<?php

namespace App\Http\Controllers;

use App\SingleRoomRequest;
use Auth;
use App\BoardingRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SingleRoomRequestController extends Controller
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
        return view('requestBoarding.singelroomrequest');
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
     * @param  \App\SingleRoomRequest  $singleRoomRequest
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $singleRoomRequest = SingleRoomRequest::orderBy('created_at','desc')->paginate(3);
        return view('requestBoarding.showSingleRoomRequest', compact('singleRoomRequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SingleRoomRequest  $singleRoomRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(SingleRoomRequest $singleRoomRequest)
    {
        if ($singleRoomRequest->boardingrequest->user->id == auth()->id() || Auth::guard('admin')->check()) {

            return view('requestBoarding.editSingleroom',compact('singleRoomRequest'), array('user' => Auth::user()));
        } else {

            Alert::error('Your request has been denied by the system', 'Unauthorized Attempt')->autoclose(3000);
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SingleRoomRequest  $singleRoomRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SingleRoomRequest $singleRoomRequest)
    {
        $boardingrqs = BoardingRequest::find(request('boardingrequestid'));
        $userId = $boardingrqs->user_id;
        $adsingleromrqs = SingleRoomRequest::find(request('singleroomrequestid'));

        if ( $userId == auth()->id() || Auth::guard('admin')->check()){
            $request->validate([
                // 'boardingrequestType' => 'required',
                // 'NoOfRooms' => 'required',
                // 'Acavalability' => 'required',
                // 'MonthlyRent' => 'required',
                // 'KeyMoney' => 'required',
                // 'Address' => 'required',
                // 'Province' => 'required',
                // 'District' => 'required',
                // 'City' => 'required',
                // 'Email' => 'required',
                // 'Telephone' => 'required',
            ]);

        

            $boardingrqs ->user_id = $userId;
            $boardingrqs ->boardingType = request('boardingrequestType');

            if($request->has('School_boys')){
                $boardingrqs->School_boys = 1;
            }else{
                $boardingrqs->School_boys = 0;
            }

            if($request->has('School_girls')){
                $boardingrqs->School_girls = 1;
            }else{
                $boardingrqs->School_girls = 0;
            }

            if($request->has('Uni_boys')){
                $boardingrqs->Uni_boys = 1;
            }else{
                $boardingrqs->Uni_boys = 0;
            }

            if($request->has('Uni_girls')){
                $boardingrqs->Uni_girls = 1;
            }else{
                $boardingrqs->Uni_girls = 0;
            }

            if($request->has('Office_boys')){
                $boardingrqs->Office_boys = 1;
            }else{
                $boardingrqs->Office_boys = 0;
            }

            if($request->has('Office_girls')){
                $boardingrqs->Office_girls = 1;
            }else{
                $boardingrqs->Office_girls = 0;
            } 

            $boardingrqs ->MonthlyRent = request('MonthlyRent');
            $boardingrqs ->KeyMoney = request('KeyMoney');
            $boardingrqs ->Province = request('Province');
            $boardingrqs ->District = request('District');
            $boardingrqs ->City = request('City');
            
            $boardingrqs ->Email = request('Email');
            $boardingrqs ->Telephone = request('Telephone');
            $boardingrqs->save();

            // $adhouserqs->Boarding()->associate($boardingrqs);
            $adsingleromrqs ->NoOfBed = request('NoOfBed');
            $adsingleromrqs ->Acavalability = request('Acavalability');

            if($request->has('Withfurniture')){
                $adsingleromrqs->Withfurniture = 1;
            }else{
                $adsingleromrqs->Withfurniture = 0;
            }

            $adsingleromrqs->save();

            if ( Auth::guard('admin')->check()) {
                toastr()->success('User Boarding Request has been successfully Updated!');
                return redirect('admin');
            } else {
                return $this->show();   
            }
            // return redirect()->route('home');   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SingleRoomRequest  $singleRoomRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(SingleRoomRequest $singleRoomRequest)
    {
        DB::table('single_room_requests')->where('id', '=', $singleRoomRequest->id)->delete();
        DB::table('boarding_requests')->where('id', '=', $singleRoomRequest->boardingrequest->id)->delete();
        toastr()->success('User Boarding Request has been deleted successfully!');
        return $this->show();
    }
}
