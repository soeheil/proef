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
        //
    }

    public function manageUsers(User $user)
{
    return $user->isAdmin(); // Implementeer je eigen logica om te bepalen wie beheerders zijn.
}
public function delete(User $user, User $targetUser)
{
    return $user->isAdmin() && $user->id !== $targetUser->id;
}


}
