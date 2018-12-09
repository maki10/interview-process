<?php

namespace App\Policies;

use App\User;
use App\Interview;
use Illuminate\Auth\Access\HandlesAuthorization;

class InterviewPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the interview.
     *
     * @param  \App\User  $user
     * @param  \App\Interview  $interview
     * @return mixed
     */
    public function view(User $user)
    {
        return in_array($user->type->role, ['administrator', 'student', 'staff']);
    }

    /**
     * Determine whether the user can create interviews.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->type->role, ['administrator', 'student', 'staff']);
    }

    /**
     * Determine whether the user can update the interview.
     *
     * @param  \App\User  $user
     * @param  \App\Interview  $interview
     * @return mixed
     */
    public function update(User $user, Interview $interview)
    {
        return in_array($user->type->role, ['administrator', 'student', 'staff']);
    }

    /**
     * Determine whether the user can delete the interview.
     *
     * @param  \App\User  $user
     * @param  \App\Interview  $interview
     * @return mixed
     */
    public function delete(User $user, Interview $interview)
    {
        return in_array($user->type->role, ['administrator', 'staff']);
    }
}
