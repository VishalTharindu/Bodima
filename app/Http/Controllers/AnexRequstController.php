<?php

namespace App\Http\Controllers;

use App\AnexRequst;
use Illuminate\Http\Request;

class AnexRequstController extends Controller
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
        return view('requestBoarding.addAnexrequest');
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
     * @param  \App\AnexRequst  $anexRequst
     * @return \Illuminate\Http\Response
     */
    public function show(AnexRequst $anexRequst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnexRequst  $anexRequst
     * @return \Illuminate\Http\Response
     */
    public function edit(AnexRequst $anexRequst)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnexRequst  $anexRequst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnexRequst $anexRequst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AnexRequst  $anexRequst
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnexRequst $anexRequst)
    {
        //
    }
}
