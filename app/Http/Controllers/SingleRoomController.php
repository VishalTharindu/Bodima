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
    
    public function searchsingleroom(Request $request)
    {
        // dd($request);
        $keyword = $request->input('searchquery');       
        // $withfetu = $request->input('furniture');
        // $minRent = $request->input('minrent');
        // $maxRent = $request->input('maxrent');

        if ($acavb = $request->has('ac')) {

            $acavb = "Yes";
        } else {

            $acavb = "%%";
        }

        if ($withfetu = $request->has('furniture')) {

            $withfetu = 1;
        } else {

            $withfetu = "%%";
        }

        // if ($outdoor = $request->has('outdoor')) {

        //     $outdoor = "Available";
        // } else {

        //     $outdoor = "%%";
        // }

        $SingleRoom = SingleRoom::whereHas('boarding', function ($query) use ($keyword) {
            $query->where(function ($query) use ($keyword) {
                $query->orwhere('District', 'LIKE', $keyword)
                    ->orWhere('Province', 'LIKE', $keyword)
                    ->orWhere('City', 'LIKE', $keyword);
            });
        // })->whereHas('boarding', function ($query) use ($minRent, $maxRent) {

        //     $query->whereBetween('MonthlyRent', array($minRent, $maxRent));
        })->where(function ($query) use ($acavb){

            $query->where('Acavalability', 'LIKE', $acavb);

        })->where(function ($query) use ($withfetu) {

            $query->where('Withfurniture', 'LIKE', $withfetu);
        })->get();

        return view('SearchResult.singleroomresult', compact('SingleRoom'));
    }

    // public function searcresultview(){
    //     return view('SearchResult.singleroomresult');
    // }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\SingleRoom  $singleRoom
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $SingleRoom = SingleRoom::orderBy('created_at','desc')->paginate(3);
        return view('addBoarding.showSingleRoom', compact('SingleRoom'));
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
