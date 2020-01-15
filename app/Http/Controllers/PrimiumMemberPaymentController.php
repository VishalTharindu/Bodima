<?php

namespace App\Http\Controllers;

use App\PrimiumMemberPayment;
use Illuminate\Http\Request;

class PrimiumMemberPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('membershoptype');
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
     * @param  \App\PrimiumMemberPayment  $primiumMemberPayment
     * @return \Illuminate\Http\Response
     */
    public function show(PrimiumMemberPayment $primiumMemberPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PrimiumMemberPayment  $primiumMemberPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(PrimiumMemberPayment $primiumMemberPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrimiumMemberPayment  $primiumMemberPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrimiumMemberPayment $primiumMemberPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrimiumMemberPayment  $primiumMemberPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrimiumMemberPayment $primiumMemberPayment)
    {
        //
    }
}
