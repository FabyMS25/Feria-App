<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Client_type;
use App\Models\User;

class Client_typePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Client_type');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Client_type $client_type): bool
    {
        return $user->checkPermissionTo('view Client_type');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Client_type');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Client_type $client_type): bool
    {
        return $user->checkPermissionTo('update Client_type');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Client_type $client_type): bool
    {
        return $user->checkPermissionTo('delete Client_type');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Client_type $client_type): bool
    {
        return $user->checkPermissionTo('restore Client_type');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Client_type $client_type): bool
    {
        return $user->checkPermissionTo('force-delete Client_type');
    }
}
