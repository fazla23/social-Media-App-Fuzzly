<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user){
        return view('profiles.show',[
            'user'=>$user,
            'tweets'=>$user
                ->tweets()
                ->withLikes()
                ->paginate(5)
        ]);
    }

    public function edit(User $user){

//        if($user->isNot(auth()->user()))
//        {
//            abort(404);
//        }

//        $this->authorize('edit',$user);

        //the authorization is done further in the web.php by using middleware
        return view('profiles.edit',compact('user'));
    }

    public function update(User $user){

        $attributes=request()->validate([
            'avatar'=>'file|nullable',
           'name'=>'string|required|max:255',
           'username'=>['string','required','max:255','alpha_dash',Rule::unique('users')->ignore($user)],
           'email'=>['string','email','required',Rule::unique('users')->ignore($user)],
           'password'=>['string','required','min:8','max:255','confirmed']
        ]);

        if(!is_null(request('avatar')))
            $attributes['avatar']=request('avatar')->store('avatars');

        $attributes['password']=Hash::make(request('password'));

        $user->update($attributes);
        return redirect('/profiles/'.$user->username);
    }
}
