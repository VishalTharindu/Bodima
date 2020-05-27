<?php

namespace App\Http\Controllers;

use App\UserComplain;
use Illuminate\Http\Request;
use App\Admin;
use App\Notifications\UserAcion;

class UserComplainController extends Controller
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
        $complain = new UserComplain;
        $complain ->user_id = request('userid');
        $complain ->boarding_id = request('boardingtypeid');
        $complain ->name = request('name');
        $complain ->email = request('email');
        $complain ->complain = request('complain');
       
        $admins = Admin::get();
        $complain->save();

        $details = [
            'cmlink' => '/admin/show/complain',
            'body' => 'New complain recived',
        ];

        foreach ($admins as $admin) {
            $admin->notify(new UserAcion($details));
        }

        toastr()->success('Your complain has been successfuly added!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserComplain  $userComplain
     * @return \Illuminate\Http\Response
     */
    public function show(UserComplain $userComplain)
    {
        $complain = UserComplain::orderBy('created_at','desc')->paginate(3);
        return view('admin.index', compact('complain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserComplain  $userComplain
     * @return \Illuminate\Http\Response
     */
    public function edit(UserComplain $userComplain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserComplain  $userComplain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserComplain $userComplain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserComplain  $userComplain
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserComplain $userComplain)
    {
        //
    }
}
