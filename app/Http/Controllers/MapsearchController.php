<?php

namespace App\Http\Controllers;

use App\Mapsearch;
use Illuminate\Http\Request;
use App\Boarding;

class MapsearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::all();
        $shops = Boarding::orderBy('created_at','desc')->paginate(9);
        

        $mapShops = $shops->makeHidden(['Availability', 'created_at', 'updated_at', 'deleted_at', 'created_by_id']);
        $latitude = $shops->count() && (request()->filled('Province') || request()->filled('District')) ? $shops->average('latitude') : 6.9814435;
        $longitude = $shops->count() && (request()->filled('Province') || request()->filled('District')) ? $shops->average('longitude') : 81.0741583;

        return view('SearchResult.mapsearch', compact('shops', 'mapShops', 'latitude', 'longitude'));
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
     * @param  \App\Mapsearch  $mapsearch
     * @return \Illuminate\Http\Response
     */
    public function show(Mapsearch $mapsearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mapsearch  $mapsearch
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapsearch $mapsearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mapsearch  $mapsearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapsearch $mapsearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mapsearch  $mapsearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapsearch $mapsearch)
    {
        //
    }
}
