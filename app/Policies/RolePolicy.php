<?php declare(strict_types=1);

/**
 * This file is part of ems.covidreporter.news, a Covid Reporter News, LLC, Project.
 *
 * Copyright © 2020 Covid Reporter News, LLC.
 * Author: Theodore R. Smith <theodore@phpexperts.pro>
 *   GPG Fingerprint: 4BF8 2613 1C34 87AC D28F  2AD8 EB24 A91D D612 5690
 *   https://www.phpexperts.pro/
 *   https://github.com/PHPExpertsInc/Skeleton
 *
 * This file is licensed under the MIT License.
 */

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the role.
     *
     * @param \App\Role $role
     *
     * @return mixed
     */
    public function view(User $user, Role $role)
    {
        return $user->hasPermissionTo('role.view');
    }

    /**
     * Determine whether the user can create roles.
     *
     * @return mixed
     */
    public function create(User $user, Role $role)
    {
        return $user->hasPermissionTo('role.create')
        && ($user->highestRole()->authority >= $role->authority);
    }

    /**
     * Determine whether the user can delete the role.
     *
     * @param \App\Role $role
     *
     * @return mixed
     */
    public function delete(User $user, Role $role)
    {
        return $user->hasPermissionTo('role.delete')
        && ($user->highestRole()->authority >= $role->authority);
    }

    /**
     * Determine whether the user can restore the role.
     *
     * @param \App\Role $role
     *
     * @return mixed
     */
    public function restore(User $user, Role $role)
    {
    }

    /**
     * Determine whether the user can permanently delete the role.
     *
     * @param \App\Role $role
     *
     * @return mixed
     */
    public function forceDelete(User $user, Role $role)
    {
    }
}
