<?php

namespace App\Policies;

use App\User;
use App\WorkingHour;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkingHourPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the working h our.
     *
     * @param  \App\User  $user
     * @param  \App\WorkingHour  $workingHour
     * @return mixed
     */
    public function view(User $user, WorkingHour $workingHour)
    {
        return in_array($user->type->role, ['administrator', 'student', 'staff']);
    }

    /**
     * Determine whether the user can create working h ours.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->type->role, ['administrator', 'student', 'staff']);
    }

    /**
     * Determine whether the user can update the working h our.
     *
     * @param  \App\User  $user
     * @param  \App\WorkingHour  $workingHour
     * @return mixed
     */
    public function update(User $user, WorkingHour $workingHour)
    {
        return in_array($user->type->role, ['administrator', 'student', 'staff']);
    }

    /**
     * Determine whether the user can delete the working h our.
     *
     * @param  \App\User  $user
     * @param  \App\WorkingHour  $workingHour
     * @return mixed
     */
    public function delete(User $user, WorkingHour $workingHour)
    {
        return in_array($user->type->role, ['administrator']);
    }
}
