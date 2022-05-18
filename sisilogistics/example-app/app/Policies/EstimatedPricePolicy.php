<?php

namespace App\Policies;

use App\Models\EstimatedPrice;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EstimatedPricePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EstimatedPrice  $estimatedPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, EstimatedPrice $estimatedPrice)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EstimatedPrice  $estimatedPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, EstimatedPrice $estimatedPrice)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EstimatedPrice  $estimatedPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, EstimatedPrice $estimatedPrice)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EstimatedPrice  $estimatedPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, EstimatedPrice $estimatedPrice)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EstimatedPrice  $estimatedPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, EstimatedPrice $estimatedPrice)
    {
        //
    }
}
