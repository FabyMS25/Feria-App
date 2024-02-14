<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\CommercialCategory_Company;
use App\Models\User;

class CommercialCategory_CompanyPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any CommercialCategory_Company');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CommercialCategory_Company $commercialcategory_company): bool
    {
        return $user->checkPermissionTo('view CommercialCategory_Company');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create CommercialCategory_Company');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CommercialCategory_Company $commercialcategory_company): bool
    {
        return $user->checkPermissionTo('update CommercialCategory_Company');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CommercialCategory_Company $commercialcategory_company): bool
    {
        return $user->checkPermissionTo('delete CommercialCategory_Company');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CommercialCategory_Company $commercialcategory_company): bool
    {
        return $user->checkPermissionTo('restore CommercialCategory_Company');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CommercialCategory_Company $commercialcategory_company): bool
    {
        return $user->checkPermissionTo('force-delete CommercialCategory_Company');
    }
}
