<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use App\Boarding;

use App\House;
use App\Anex;
use App\SingleRoom;

use App\HouseRequest;
use App\AnexRequst;
use App\SingleRoomRequest;
use App\Notifications\AdminAction;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function __construct()

    {

        $this->middleware('auth:admin');

    }

    public function index()
    {
        return view('admin.index');
    }

    public function allusers()
    {
        $Users = User::orderBy('created_at','desc')->paginate(10);
        return view('admin.index', compact('Users'));
    }

    public function allhouse()
    {
        $Houses = House::orderBy('created_at','desc')->paginate(10);
        return view('admin.index', compact('Houses'));
    }

    public function allannex()
    {
        $Anex = Anex::orderBy('created_at','desc')->paginate(10);
        return view('admin.index', compact('Anex'));
    }

    public function allsingleroom()
    {
        $SingleRoom = SingleRoom::orderBy('created_at','desc')->paginate(10);
        return view('admin.index', compact('SingleRoom'));
    }

    public function allhouserequest()
    {
        $HouseRequests = HouseRequest::orderBy('created_at','desc')->paginate(10);
        return view('admin.index', compact('HouseRequests'));
    }

    public function allannexrequest()
    {
        $AnexRequsts = AnexRequst::orderBy('created_at','desc')->paginate(10);
        return view('admin.index', compact('AnexRequsts'));
    }

    public function allsingleroomrequest()
    {
        $SingleRoomRequests = SingleRoomRequest::orderBy('created_at','desc')->paginate(10);
        return view('admin.index', compact('SingleRoomRequests'));
    }

    public function lockboarding(Boarding $boardingid)
    {
        $boarding = Boarding::find($boardingid->id);
        $boarding->Availability = 'LOCKED';
        $boarding->save();
        $users = User::where('id',$boarding->user->id)->get();

        $details = [
            'greeting' => 'Hi user',
            'body' => 'Sorry to inform that the admin has lock your advertisment.contact admin to unlock it',
            'thanks' => 'Thank you for using Bodimalk',
        ];

        foreach ($users as $user) {
            $user->notify(new AdminAction($details));
        }
        

        toastr()->success('User Boarding successfully locked!');
        return back();
    }
    public function unlockboarding(Boarding $boardingid)
    {
        $boarding = Boarding::find($boardingid->id);
        $boarding->Availability = 'YES';
        $boarding->save();

        toastr()->success('User Boarding successfully Unlocked!');
        return back();
    }

    public function warningaUser(Boarding $boardingid)
    {
        $users = User::where('id',$boardingid->user->id)->get();
        $details = [
            'greeting' => 'Hi user',
            'body' => 'your property has many user complain.it would lock soon',
            'thanks' => 'Thank you for using Bodimalk',
        ];

        foreach ($users as $user) {
            $user->notify(new AdminAction($details));
        }

        toastr()->success('Warning has successfully send!');
        return back();
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
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
