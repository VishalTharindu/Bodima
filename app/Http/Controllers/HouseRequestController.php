<?php

namespace App\Http\Controllers;

use App\HouseRequest;
use App\BoardingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Alert;

class HouseRequestController extends Controller
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
        return view('requestBoarding.addHouserequest');
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
     * @param  \App\HouseRequest  $houseRequest
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $HouseRequest = HouseRequest::orderBy('created_at','desc')->get();
        return view('requestBoarding.showHouseRequest', compact('HouseRequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HouseRequest  $houseRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(HouseRequest $houseRequest)
    {
        if ($houseRequest->boardingrequest->user->id == auth()->id() || Auth::guard('admin')->check()) {

            return view('requestBoarding.editHouserequest',compact('houseRequest'), array('user' => Auth::user()));
        } else {

            Alert::error('Your request has been denied by the system', 'Unauthorized Attempt')->autoclose(3000);
            return redirect('/');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HouseRequest  $houseRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HouseRequest $houseRequest)
    {
        $boardingrqs = BoardingRequest::find(request('boardingrequestid'));
        $userId = $boardingrqs->user_id;
        $adhouserqs = HouseRequest::find(request('houseRequestid'));

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
            $adhouserqs ->NoOfRooms = request('NoOfRooms');
            $adhouserqs ->NoOfBed = request('NoOfBed');
            $adhouserqs ->Acavalability = request('Acavalability');

            $adhouserqs ->kitchenavalability = request('kitchenavalability');

            if($request->has('Withfurniture')){
                $adhouserqs->Withfurniture = 1;
            }else{
                $adhouserqs->Withfurniture = 0;
            }

            $adhouserqs->save();

            if ( Auth::guard('admin')->check()) {
                toastr()->success('User Boarding has been successfully Updated!');
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
     * @param  \App\HouseRequest  $houseRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(HouseRequest $houseRequest)
    {
        // DB::table('houses')->where('id', '=', $house->id)->delete();
        $te = DB::table('boarding_requests')->where('id', '=', $houseRequest->id)->get();
        dd($te);
        Alert::success('User Boarding has been deleted successfully!', 'Successfully Deleted!')->autoclose(3000);
        return back();
    }
}
