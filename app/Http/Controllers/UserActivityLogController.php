<?php

namespace App\Http\Controllers;

use App\UserActivityLog;
use App\Boarding;
use Illuminate\Http\Request;

class UserActivityLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $Type = UserActivityLog::select('Boardingtype')
                ->where(function ($query) use ($userId) {
                    $query->where('user_id', '=', $userId);
                })
                ->groupBy('Boardingtype')
                ->orderByRaw('COUNT(*) DESC')
                ->limit(1)
                ->get();


        $Keyword = UserActivityLog::select('Keyword')
        ->where(function ($query) use ($userId) {
            $query->where('user_id', '=', $userId);
        })
        ->groupBy('Keyword')
        ->orderByRaw('COUNT(*) DESC')
        ->limit(1)
        ->get();

        dd($Type->Boardingtype);
        // $Boadrings = Boarding::where(function($query) use ($Type){
        //     $query->where('boardingType','=',$Type);
        // })->paginate(4);

        $Boadrings = Boarding::where(function($query) use ($userId){
            $query->where('user_id','=',$userId);
        })->paginate(4);
        dd($Boadrings);
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
     * @param  \App\UserActivityLog  $userActivityLog
     * @return \Illuminate\Http\Response
     */
    public function show(UserActivityLog $userActivityLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserActivityLog  $userActivityLog
     * @return \Illuminate\Http\Response
     */
    public function edit(UserActivityLog $userActivityLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserActivityLog  $userActivityLog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserActivityLog $userActivityLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserActivityLog  $userActivityLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserActivityLog $userActivityLog)
    {
        //
    }
}
