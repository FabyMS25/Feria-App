<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Post_category;
use App\Models\User;

class Post_categoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Post_category');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Post_category $post_category): bool
    {
        return $user->checkPermissionTo('view Post_category');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Post_category');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Post_category $post_category): bool
    {
        return $user->checkPermissionTo('update Post_category');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Post_category $post_category): bool
    {
        return $user->checkPermissionTo('delete Post_category');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Post_category $post_category): bool
    {
        return $user->checkPermissionTo('restore Post_category');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Post_category $post_category): bool
    {
        return $user->checkPermissionTo('force-delete Post_category');
    }
}
