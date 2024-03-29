<?php

namespace App\Http\Controllers;

use App\UserFeedback;
use Illuminate\Http\Request;

class UserFeedbackController extends Controller
{
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
        $feedback = new UserFeedback;
        $feedback ->user_id = request('userid');
        $feedback ->boarding_id = request('boardingtypeid');
        $feedback ->name = request('name');
        $feedback ->email = request('email');
        $feedback ->feedback = request('feedback');
       
        $feedback->save();

        toastr()->success('Your feedback has been successfuly added!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function show(UserFeedback $userFeedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function edit(UserFeedback $userFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserFeedback $userFeedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserFeedback $userFeedback)
    {
        //
    }
}
