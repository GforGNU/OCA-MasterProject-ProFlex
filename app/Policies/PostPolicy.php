<?php

namespace App\Policies;

use App\User;
use App\JobPost;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any job posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the job post.
     *
     * @param  \App\User  $user
     * @param  \App\JobPost  $jobPost
     * @return mixed
     */
    public function view(User $user, JobPost $jobPost)
    {
        //

    }

    /**
     * Determine whether the user can create job posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->user_type_id == '1';
    }

    /**
     * Determine whether the user can update the job post.
     *
     * @param  \App\User  $user
     * @param  \App\JobPost  $jobPost
     * @return mixed
     */
    public function update(User $user, JobPost $jobPost)
    {
        //
        return $user->user_type_id == '1';
    }

    /**
     * Determine whether the user can delete the job post.
     *
     * @param  \App\User  $user
     * @param  \App\JobPost  $jobPost
     * @return mixed
     */
    public function delete(User $user, JobPost $jobPost)
    {
        //
    }

    /**
     * Determine whether the user can restore the job post.
     *
     * @param  \App\User  $user
     * @param  \App\JobPost  $jobPost
     * @return mixed
     */
    public function restore(User $user, JobPost $jobPost)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the job post.
     *
     * @param  \App\User  $user
     * @param  \App\JobPost  $jobPost
     * @return mixed
     */
    public function forceDelete(User $user, JobPost $jobPost)
    {
        //
    }
}
