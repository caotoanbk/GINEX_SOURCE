<?php
namespace App\Role;

class UserRole {
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_USER = 'ROLE_USER';

    protected static $roleHierarchy = [
        self::ROLE_ADMIN => ['*'],
        self::ROLE_USER => []
    ];

    public static function getAllowedRoles(string $role)
    {
        if(isset(self::$roleHierarchy[$role])){
            return self::$roleHierarchy[$role];
        }
        return [];
    }

    public static function getRoleList()
    {
        return [
            static::ROLE_ADMIN => 'Admin',
            static::ROLE_USER => 'User'
        ];
    }
}