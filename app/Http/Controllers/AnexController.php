<?php

namespace App\Http\Controllers;

use App\Anex;
use Illuminate\Http\Request;

class AnexController extends Controller
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
     * @param  \App\Anex  $anex
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Anex = Anex::orderBy('created_at','desc')->paginate(3);
        return view('addBoarding.showAnnex', compact('Anex'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anex  $anex
     * @return \Illuminate\Http\Response
     */
    public function edit(Anex $anex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anex  $anex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anex $anex)
    {
        //
    }
    public function searchannex(Request $request)
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

        $Anex = Anex::where(function ($query) use ($room) {
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

            $query->where('Acavalability', '=', $acavb);

        })->where(function ($query) use ($withfetu) {

            $query->where('Withfurniture', 'LIKE', $withfetu);
        })->get();

        return view('SearchResult.annexresult', compact('Anex'));
    }

    public function searcresultview(){
        return view('SearchResult.annexresult');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anex  $anex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anex $anex)
    {
        DB::table('anexes')->where('id', '=', $anex->id)->delete();
        DB::table('boardings')->where('id', '=', $anex->boarding->id)->delete();
        Alert::success('User Boarding has been deleted successfully!', 'Successfully Deleted!')->autoclose(3000);
        return view('home');
    }
}
