<?php

namespace App\Http\Controllers;

use App\Boarding;
use Illuminate\Http\Request;

class BoardingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bodimsec');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addbodim');
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
     * @param  \App\Boarding  $boarding
     * @return \Illuminate\Http\Response
     */
    public function show(Boarding $boarding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boarding  $boarding
     * @return \Illuminate\Http\Response
     */
    public function edit(Boarding $boarding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boarding  $boarding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boarding $boarding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boarding  $boarding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boarding $boarding)
    {
        //
    }
}
