<?php

namespace App\Http\Controllers;

use App\HouseRequest;
use Illuminate\Http\Request;

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
        //
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
        //
    }
}
