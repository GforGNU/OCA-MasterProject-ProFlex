<?php

namespace App\Policies;

use App\User;
use App\SeekerProfile;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeekerProfilePolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any seeker profiles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the seeker profile.
     *
     * @param  \App\User  $user
     * @param  \App\SeekerProfile  $seekerProfile
     * @return mixed
     */
    public function view(User $user, SeekerProfile $seekerProfile)
    {
        //
    }

    /**
     * Determine whether the user can create seeker profiles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->user_type_id == '2';
    }

    /**
     * Determine whether the user can update the seeker profile.
     *
     * @param  \App\User  $user
     * @param  \App\SeekerProfile  $seekerProfile
     * @return mixed
     */
    public function update(User $user, SeekerProfile $seekerProfile)
    {
        //
    }

    /**
     * Determine whether the user can delete the seeker profile.
     *
     * @param  \App\User  $user
     * @param  \App\SeekerProfile  $seekerProfile
     * @return mixed
     */
    public function delete(User $user, SeekerProfile $seekerProfile)
    {
        //
    }

    /**
     * Determine whether the user can restore the seeker profile.
     *
     * @param  \App\User  $user
     * @param  \App\SeekerProfile  $seekerProfile
     * @return mixed
     */
    public function restore(User $user, SeekerProfile $seekerProfile)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the seeker profile.
     *
     * @param  \App\User  $user
     * @param  \App\SeekerProfile  $seekerProfile
     * @return mixed
     */
    public function forceDelete(User $user, SeekerProfile $seekerProfile)
    {
        //
    }
}
