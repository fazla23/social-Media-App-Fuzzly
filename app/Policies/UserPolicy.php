<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy {

    use HandlesAuthorization;

    public function edit(User $user1,User $user){
        return $user->is(auth()->user());
    }
}
