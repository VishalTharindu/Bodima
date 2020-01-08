<?php

namespace App\Http\Controllers;

use App\SingleRoom;
use Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SingleRoomController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SingleRoom  $singleRoom
     * @return \Illuminate\Http\Response
     */
    public function show(SingleRoom $singleRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SingleRoom  $singleRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(SingleRoom $singleRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SingleRoom  $singleRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SingleRoom $singleRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SingleRoom  $singleRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(SingleRoom $singleRoom)
    {
        DB::table('single_rooms')->where('id', '=', $singleRoom->id)->delete();
        DB::table('boardings')->where('id', '=', $singleRoom->boarding->id)->delete();
        Alert::success('User Boarding has been deleted successfully!', 'Successfully Deleted!')->autoclose(3000);
        return view('home');
    }
}
