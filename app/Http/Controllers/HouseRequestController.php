<?php

namespace App\Http\Controllers;

use App\HouseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function show(HouseRequest $houseRequest)
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
        //
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
        //
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
