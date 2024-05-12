<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {

    }
    public function destroy(User $user, User $usuario): bool
    {
        if($user->hasRole('admin')){
            return true;
        }
        return false;
    }
    public function edit(User $user, User $usuario): bool
    {
        if($user->hasRole('admin')){
            return true;
        }
        return false;
    }
}
