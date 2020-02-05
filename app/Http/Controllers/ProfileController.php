<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Auth;
use App\User;
use App\UserEmail;
use Illuminate\Support\Facades\DB;

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

    public function viewAllMessage()
    {
        $id = Auth::user()->id;
        $messages = UserEmail::where(function($query) use ($id) 
        {
            $query->where('receiver_id','=', $id);

        })->orderBy('id', 'desc')
          ->paginate(10);

        return view('profileManage.masterdashboard', compact('messages'),array('user' => Auth::user()));
    }

    public function myMessage()
    {
        $id = Auth::user()->id;
        $messages = UserEmail::where(function($query) use ($id) 
        {
            $query->where('receiver_id','=', $id);

        })->where(function ($query){

            $query->where('status', 'LIKE', 'unread');
    
        })->orderBy('id', 'desc')
          ->paginate(1);

        return view('profileManage.masterdashboard', compact('messages'),array('user' => Auth::user()));
    }

    public function viewMessage(UserEmail $message)
    {
        $id = $message->id;
        $updateMessage = UserEmail::find($id);
        $updateMessage->status = 'read';
        $updateMessage->save();
        
        return view('profileManage.masterdashboard',compact('message') ,array('user' => Auth::user()));

    }
    public function deleteMessage(UserEmail $message)
    {
        if ($message->receiver_id == auth()->id()) {

            DB::table('user_emails')->where('id', '=', $message->id)->delete();

            toastr()->success('Your message has been deleted successfully!');
            return redirect('/user/message/all');
        }
        else {

            toastr()->success('Your request has been denied by the system!');
            return redirect('/user/message/all');
            
        }
    }
}
