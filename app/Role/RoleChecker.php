<?php
namespace App\Role;
use App\User;

class RoleChecker
{
    public function check(User $user, string $role)
    {
        return $user->hasRole($role);
    }
}