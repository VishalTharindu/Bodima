<?php

namespace App\Http\Controllers;

use Auth;
use App\MyFavourit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Alert;
use App\House;
use App\Anex;
use App\SingleRoom;

class MyFavouritController extends Controller
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
    public function showfavorite()
    {
        $userID = Auth::user()->id;
        $MyFavourit = MyFavourit::where(function($query) use ($userID){
            $query->where('user_id','=',$userID);
        })->paginate(4);

        // dd($MyFavourit);
      return view('profileManage.masterdashboard',compact('MyFavourit'));
    }

    public function favoriteHouse(House $house)
    {


        $isExits = MyFavourit::where('boarding_id', '=', $house->boarding->id)
            ->where('user_id', '=', auth()->id())
            ->get();
        if ($isExits->count() <= 0) {
            $favorite = new MyFavourit;
            $favorite->boarding_id = $house->boarding->id;
            $favorite->user_id = auth()->id();
            $favorite->house_id = $house->id;


            try {
                $favorite->save();
                toastr()->success('Your Favourite has been successfully added!');
                // Alert::success('Favorite has been added successfully!', 'Favorite Added')->autoclose(3000);
                return back();
            } catch (\Illuminate\Database\QueryException $e) {

                $errorCode = $e->errorInfo[1];
                if ($errorCode == '1062') {
                    toastr()->warning('Your Favourite has been successfully added!');
                    // Alert::warning('Favorite has been already added!', 'Already Added')->autoclose(3000);
                    return back();
                }
            }

            Alert::error('Something went wrong!', 'Oops!')->autoclose(3000);
            return back();
        } else {
            toastr()->warning('Favorite has been already added!');
            // Alert::warning('Favorite has been already added!', 'Already Added')->autoclose(3000);
            return back();
        }
    }

    public function favoriteannex(Anex $annex)
    {


        $isExits = MyFavourit::where('boarding_id', '=', $annex->boarding->id)
            ->where('user_id', '=', auth()->id())
            ->get();
        if ($isExits->count() <= 0) {
            $favorite = new MyFavourit;
            $favorite->boarding_id = $annex->boarding->id;
            $favorite->user_id = auth()->id();
            $favorite->house_id = $annex->id;


            try {
                $favorite->save();
                toastr()->success('Your Favourite has been successfully added!');
                // Alert::success('Favorite has been added successfully!', 'Favorite Added')->autoclose(3000);
                return back();
            } catch (\Illuminate\Database\QueryException $e) {

                $errorCode = $e->errorInfo[1];
                if ($errorCode == '1062') {
                    toastr()->warning('Your Favourite has been successfully added!');
                    // Alert::warning('Favorite has been already added!', 'Already Added')->autoclose(3000);
                    return back();
                }
            }

            Alert::error('Something went wrong!', 'Oops!')->autoclose(3000);
            return back();
        } else {
            toastr()->warning('Favorite has been already added!');
            // Alert::warning('Favorite has been already added!', 'Already Added')->autoclose(3000);
            return back();
        }
    }

    public function favoritesingleroom(SingleRoom $singleroom)
    {


        $isExits = MyFavourit::where('boarding_id', '=', $singleroom->boarding->id)
            ->where('user_id', '=', auth()->id())
            ->get();
        if ($isExits->count() <= 0) {
            $favorite = new MyFavourit;
            $favorite->boarding_id = $singleroom->boarding->id;
            $favorite->user_id = auth()->id();
            $favorite->house_id = $singleroom->id;


            try {
                $favorite->save();
                toastr()->success('Your Favourite has been successfully added!');
                // Alert::success('Favorite has been added successfully!', 'Favorite Added')->autoclose(3000);
                return back();
            } catch (\Illuminate\Database\QueryException $e) {

                $errorCode = $e->errorInfo[1];
                if ($errorCode == '1062') {
                    toastr()->warning('Your Favourite has been successfully added!');
                    // Alert::warning('Favorite has been already added!', 'Already Added')->autoclose(3000);
                    return back();
                }
            }

            Alert::error('Something went wrong!', 'Oops!')->autoclose(3000);
            return back();
        } else {
            toastr()->warning('Favorite has been already added!');
            // Alert::warning('Favorite has been already added!', 'Already Added')->autoclose(3000);
            return back();
        }
    }

    public function destroyfavorite(MyFavourit $favoriteid)
    {
        DB::table('my_favourits')->where('id', '=', $favoriteid->id)->delete();
        // Alert::success('User Boarding has been deleted successfully!', 'Successfully Deleted!')->autoclose(3000);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MyFavourit  $myFavourit
     * @return \Illuminate\Http\Response
     */
    public function show(MyFavourit $myFavourit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyFavourit  $myFavourit
     * @return \Illuminate\Http\Response
     */
    public function edit(MyFavourit $myFavourit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyFavourit  $myFavourit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyFavourit $myFavourit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyFavourit  $myFavourit
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyFavourit $myFavourit)
    {
        //
    }
}
