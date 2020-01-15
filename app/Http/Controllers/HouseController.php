<?php

namespace App\Http\Controllers;

use Auth;
use App\House;
use App\Boarding;
use Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HouseController extends Controller
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
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Houses = House::orderBy('created_at','desc')->paginate(3);
        return view('addBoarding.showHouse', compact('Houses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        if ($house->boarding->user_id == auth()->id()) {

            return view('addBoarding.editHouse',compact('house'), array('user' => Auth::user()));
        } else {

            Alert::error('Your request has been denied by the system', 'Unauthorized Attempt')->autoclose(3000);
            return redirect('/');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        DB::table('houses')->where('id', '=', $house->id)->delete();
        DB::table('boardings')->where('id', '=', $house->boarding->id)->delete();
        Alert::success('User Boarding has been deleted successfully!', 'Successfully Deleted!')->autoclose(3000);
        return redirect()->route('home');
    }
    public function searchHouse(Request $request)
    {
        // dd($request);
        $keyword = $request->input('searchquery');
        $room = $request->input('room');
        $type = $request->input('brtype');
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

        $House = House::where(function ($query) use ($room) {
            $query->where('NoOfRooms', '>=', $room);
        })->whereHas('boarding', function ($query) use ($keyword) {
            $query->where(function ($query) use ($keyword) {
                $query->orwhere('District', 'LIKE', $keyword)
                    ->orWhere('Province', 'LIKE', $keyword)
                    ->orWhere('City', 'LIKE', $keyword);
            });
        // })->whereHas('boarding', function ($query) use ($minRent, $maxRent) {

        //     $query->whereBetween('MonthlyRent', array($minRent, $maxRent));
        })->whereHas('boarding', function ($query) use ($type){

            $query->where('boardingType', '=', $type);

        })->where(function ($query) use ($acavb){

            $query->where('Acavalability', 'LIKE', $acavb);

        })->where(function ($query) use ($withfetu) {

            $query->where('Withfurniture', 'LIKE', $withfetu);
        })->get();

        return view('SearchResult.houseresult', compact('House'));
    }

    public function searcresultview(){
        return view('SearchResult.houseresult');
    }
}
