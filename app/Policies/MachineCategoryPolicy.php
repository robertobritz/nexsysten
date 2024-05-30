<?php

namespace App\Policies;

use App\Models\MachineCategory;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MachineCategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('machine_edit');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, MachineCategory $machineCategory): bool
    {
        return $user->hasPermissionTo('machine_edit');
    }

    /**        //her the user can update the model.
     */
    public function update(User $user, MachineCategory $machineCategory): bool
    {
        return $user->hasPermissionTo('machine_edit');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, MachineCategory $machineCategory): bool
    {
        return $user->hasPermissionTo('machine_edit');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, MachineCategory $machineCategory): bool
    {
        return $user->hasPermissionTo('machine_edit');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, MachineCategory $machineCategory): bool
    {
        return $user->hasPermissionTo('machine_edit');
    }
}
