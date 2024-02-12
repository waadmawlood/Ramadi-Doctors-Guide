<?php

use App\Enums\Days;
use App\Enums\Roles;

function getRole($user = null)
{
    if ($user) {
        return $user->role;
    }

    return auth()->check() ? auth()->user()?->role : null;
}

function getRoleLevel($user = null)
{
    if ($user) {
        $role = $user->role;
    } else {
        $role = getRole();
    }

    if (!$role) {
        return 5;
    }

    return Roles::fromName($role)->value;
}

function selectRoles($role = null)
{
    if ($role) {
        $level = Roles::fromName($role)->value;
    } else {
        $level = getRoleLevel();
    }

    $roles = Roles::options();

    return array_keys(array_filter($roles, function ($value) use ($level) {
        return $level == 3 ? $value >= $level-1 : $value >= $level;
    }));
}

function getDayString(int $day)
{
    return Days::tryFrom($day)->name;
}
