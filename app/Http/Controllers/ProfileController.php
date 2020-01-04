<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Auth;
use App\User;

class ProfileController extends Controller
{

    public function updateAccount(UserRequest $request){


        $validated = $request->validated();
        // dd($request);

        

        $id = Auth::user()->id;

        

        $user = User::find($id);
        if(strcmp($user->email,request('email')) != 0 ){
            $user->email_verified_at = NULL;
        }
        $user->name = request('name');
        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->email = request('email');
        $user->city = request('city');
        $user->phone = request('phone');
        $user->address = request('address');
        $user->country = request('country');
        $user->postalcode = request('postalcode');
        $user->description = request('description');
        $user->save();

        return back()->with('message', 'Your account has been successfully updated!');

    }
}
