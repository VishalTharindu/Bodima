<?php

namespace App\Http\Controllers;

use App\UserEmail;
use Illuminate\Http\Request;

class UserEmailController extends Controller
{
    public function houseContact(Request $request)
    {
        // dd($request);
 
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'pno' => 'required',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2500|min:10'
        ]);
        
       
        // if ($validator->fails()) {

        //     Alert::error('Please check your inputs and correct the following errors', 'Invalid Attempt')->autoclose(3000);
        //     return back()->withErrors($validator);
        // }

        // $owner = \App\User::find(request('owner'));

        $message = new UserEmail;
        $message->receiver_id = request('owner');
        $message->sender_id = request('sender');
        $message->senderMail = request('email');
        $message->senderName = request('name');
        $message->phoneNo = request('pno');
        $message->subject = request('subject');
        $message->message = request('message');
        $message->property_url = request('path');
        $message->save();

        // \Mail::to($owner->email)->send(new ContactMail($request));
        
        // Alert::success('Your message has been sent successfully!', 'Message Sent')->autoclose(3000);

        toastr()->success('Your message has been sent successfully!');
        return back();

    }
    public function replyMessage(Request $request)
    {

        $request->validate([
            'message' => 'required|string|max:2500|min:10'
        ]);
        
        $message = new UserEmail;
        $message->receiver_id = request('owner');
        $message->sender_id = auth()->user()->id;
        $message->senderMail = auth()->user()->email;
        $message->senderName = auth()->user()->name;
        $message->phoneNo = auth()->user()->phoneNo;
        $message->subject = request('subject');
        $message->message = request('message');
        $message->property_url = request('path');
        $message->save();

        $request->name = auth()->user()->name;
        $request->email = auth()->user()->email;
        $request->pno = auth()->user()->phoneNo;
        $request->property_url = request('path');

        toastr()->success('Your message has been sent successfully!');

        // \Mail::to(request('email'))->send(new ContactMail($request));
        
        // Alert::success('Your message has been sent successfully!', 'Message Sent')->autoclose(3000);

        return back();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserEmail  $userEmail
     * @return \Illuminate\Http\Response
     */
    public function show(UserEmail $userEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserEmail  $userEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserEmail $userEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserEmail  $userEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserEmail $userEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserEmail  $userEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserEmail $userEmail)
    {
        //
    }
}
