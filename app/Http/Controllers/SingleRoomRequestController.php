<?php

namespace App\Http\Controllers;

use App\SingleRoomRequest;
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
    public function show(SingleRoomRequest $singleRoomRequest)
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SingleRoomRequest  $singleRoomRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(SingleRoomRequest $singleRoomRequest)
    {
        //
    }
}
