<?php

namespace App\Policies;

use App\User;
use App\InterviewType;
use Illuminate\Auth\Access\HandlesAuthorization;

class InterviewTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the interview types.
     *
     * @param  \App\User  $user
     * @param  \App\InterviewType  $interviewType
     * @return mixed
     */
    public function view(User $user)
    {
        return in_array($user->type->role, ['administrator', 'student', 'staff']);
    }

    /**
     * Determine whether the user can create interview types.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->type->role, ['administrator']);
    }

    /**
     * Determine whether the user can update the interview types.
     *
     * @param  \App\User  $user
     * @param  \App\InterviewType  $interviewType
     * @return mixed
     */
    public function update(User $user, InterviewType $interviewType)
    {
        return in_array($user->type->role, ['administrator']);
    }

    /**
     * Determine whether the user can delete the interview types.
     *
     * @param  \App\User  $user
     * @param  \App\InterviewType  $interviewType
     * @return mixed
     */
    public function delete(User $user, InterviewType $interviewType)
    {
        return in_array($user->type->role, ['administrator']);
    }
}
