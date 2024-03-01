<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;


    protected $guarded =[];

    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function  stores() :HasMany{
        return $this->hasMany(Store::class);
    }

    public function  categories() :BelongsToMany{
        return $this->belongsToMany(CommercialCategory::class);
    }


    public function  posts() :HasMany{
        return $this->hasMany(Post::class);
    }
    public function  subscriptions() :HasMany{
        return $this->hasMany(Subscription::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($company) {
            if ($company->isDirty('habilitado') && $company->habilitado === false) {
                $company->fecha_deshabilitado = now();
            }

            if ($company->isDirty('eliminado') && $company->eliminado === true) {
                $company->fecha_eliminado = now();
            }
        });
    }


    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
