<?php

namespace App\Http\Controllers;

use App\BoardingRating;
use Illuminate\Http\Request;

class BoardingRatingController extends Controller
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
        $rating = new BoardingRating;
        $rating ->user_id = request('user_id');
        $rating ->boarding_id = request('boarding_id');
        $rating ->rating = request('rating');       
        $rating->save();

        return back();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoardingRating  $boardingRating
     * @return \Illuminate\Http\Response
     */
    public function show(BoardingRating $boardingRating)
    {
        $boardingRating = BoardingRating::orderBy('created_at','desc')->paginate(3);
        return view('showrating', compact('boardingRating'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BoardingRating  $boardingRating
     * @return \Illuminate\Http\Response
     */
    public function edit(BoardingRating $boardingRating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoardingRating  $boardingRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoardingRating $boardingRating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoardingRating  $boardingRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoardingRating $boardingRating)
    {
        //
    }
}
