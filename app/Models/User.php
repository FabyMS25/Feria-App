<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Facades\Filament;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasTenants;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
// use RalphJSmit\Filament\Notifications\Concerns\FilamentNotifiable;

class User extends Authenticatable implements HasTenants, FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_admin' => 'boolean',
    ];


    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'user_has_permissions')->withTimestamps();
    }

    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class);
    }

    public function getTenants(Panel $panel): Collection
    {
        return $this->companies;
    }
    public function canAccessTenant(Model $tenant): bool
    {
        return $this->companies->contains($tenant);
    }
    public function canAccessPanel(Panel $panel): bool
    {
        $user = Filament::auth()->user();
        $roles = auth()->user()->roles;
        $role=$roles->first()->name;

        return match($panel->getId()){
            // 'feria-client' =>  Auth::check() && Auth::user()->hasRole('Client'),
            // 'admin' => $user->hasRole(['Admin', 'Super Admin']),
            // 'feria' => $user->hasAnyRole(['Titular', 'Employee', 'Admin']),
            'feria-client' => $role == 'Client',
            'admin' => $role == 'Admin' || $role == 'Super Admin',
            'feria' => true,//$role == 'Titular' || $role =='Employee' || $role == 'Admin',
        };
    }

    public function userHasRole(string $roleName): bool
    {
        $userRoles = auth()->user()->roles->pluck('name')->toArray();

        return in_array($roleName, $userRoles);
    }
    public static function boot()
    {
        parent::boot();

        static::saving(function ($user) {
                $user->updatePermissions();
        });
    }
    public function updatePermissions()
    {
        $roles = $this->roles;
        $permissions = [];

        foreach ($roles as $role) {
            $permissions = array_merge($permissions, $role->permissions->pluck('id')->toArray());
        }
        $uniquePermissions = array_unique($permissions);
        $this->permissions()->sync($uniquePermissions);

    }
}
