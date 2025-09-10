<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'moderator']); // Admins and moderators can create
    }

    public function view(User $user, User $model): bool
    {
        return $user->role === 'admin'; // Only admins can view users
    }

    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'moderator']); // Admins and moderators can create
    }

    public function update(User $user, User $model): bool
    {
        return $user->role === 'admin';
    }

    public function delete(User $user, User $model): bool
    {
        return $user->role === 'admin';
    }
    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        return $user->role === 'admin';
    }
}
