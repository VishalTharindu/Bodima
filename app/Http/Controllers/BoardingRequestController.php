<?php

namespace App\Http\Controllers;

use App\BoardingRequest;
use Illuminate\Http\Request;

use App\HouseRequest;

class BoardingRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Boardingrequest = BoardingRequest::orderBy('created_at','desc')->paginate(4);
        return view('allrequest',compact('Boardingrequest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requestBoarding.addboardingrequest');
    }
    public function house()
    {
        return view('requestBoarding.tradeHouse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeHouserRequest(Request $request)
    {
        
        $request->validate([
            'boardingType' => 'required',
            'MonthlyRent' => 'required',
            'KeyMoney' => 'required',
            'Province' => 'required',
            'District' => 'required',
            'City' => 'required',
            // 'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'Email' => 'required',
            'Telephone' => 'required',
        ]);


        $boarding_requests = new BoardingRequest;
        $boarding_requests ->user_id = auth()->id();
        $boarding_requests ->boardingType = request('boardingType');

        if($request->has('School_boys')){
            $boarding_requests->School_boys = 1;
        }else{
            $boarding_requests->School_boys = 0;
        }

        if($request->has('School_girls')){
            $boarding_requests->School_girls = 1;
        }else{
            $boarding_requests->School_girls = 0;
        }

        if($request->has('Uni_boys')){
            $boarding_requests->Uni_boys = 1;
        }else{
            $boarding_requests->Uni_boys = 0;
        }

        if($request->has('Uni_girls')){
            $boarding_requests->Uni_girls = 1;
        }else{
            $boarding_requests->Uni_girls = 0;
        }

        if($request->has('Office_boys')){
            $boarding_requests->Office_boys = 1;
        }else{
            $boarding_requests->Office_boys = 0;
        }

        if($request->has('Office_girls')){
            $boarding_requests->Office_girls = 1;
        }else{
            $boarding_requests->Office_girls = 0;
        } 

        $boarding_requests ->MonthlyRent = request('MonthlyRent');
        $boarding_requests ->KeyMoney = request('KeyMoney');
        // $boarding_requests ->Address = request('Address');
        // $boarding_requests ->Description = request('Description');
        $boarding_requests ->Province = request('Province');
        $boarding_requests ->District = request('District');
        $boarding_requests ->City = request('City');

        $boarding_requests ->Name = request('Name');
        // $boarding_requests->filename  = json_encode($data);
        $boarding_requests ->Email = request('Email');
        $boarding_requests ->Telephone = request('Telephone');
        $boarding_requests->save();

        $houses = new HouseRequest;
        $houses->BoardingRequest()->associate($boarding_requests);
        $houses ->NoOfRooms = request('NoOfRooms');
        $houses ->NoOfBed = request('NoOfBed');
        $houses ->Acavalability = request('Acavalability');
        $houses ->kitchenavalability = request('kitchenavalability');

        if($request->has('Withfurniture')){
            $houses->Withfurniture = 1;
        }else{
            $houses->Withfurniture = 0;
        }

        if($request->has('Gardenneed')){
            $houses->Gardenneed = 1;
        }else{
            $houses->Gardenneed = 0;
        }

        // if($request->has('Racks')){
        //     $houses->Racks = 1;
        // }else{
        //     $houses->Racks = 0;
        // }

        // if($request->has('More')){
        //     $houses->More = 1;
        // }else{
        //     $houses->More = 0;
        // }

        $houses ->NumberOfBthroom = request('NumberOfBthroom');


        $houses->save();

        return back()->with('message', 'Your property has been successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoardingRequest  $boarding_requestsRequest
     * @return \Illuminate\Http\Response
     */
    public function show(BoardingRequest $boarding_requestsRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BoardingRequest  $boarding_requestsRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(BoardingRequest $boarding_requestsRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoardingRequest  $boarding_requestsRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoardingRequest $boarding_requestsRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoardingRequest  $boarding_requestsRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoardingRequest $boarding_requestsRequest)
    {
        //
    }
}
