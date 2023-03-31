<?php

namespace App\Policies;

use App\Models\Gig;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class GigPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Gig $gig): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Gig $gig): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, newGig $newGig): bool
    {
        return $user->id === $newGig->user_id;
        // return $newGig->user()->is($user);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Gig $gig): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Gig $gig): bool
    {
        //
    }

    public function deleted(Gig $gig)
    {
        Mail::to('Vicken408@gmail.com')->queue(new GigDeleted($gig));
    }
    public function created(Gig $gig)
    {
        Mail::to('Vicken408@gmail.com')->queue(new GigCreated($gig));
    }
}
