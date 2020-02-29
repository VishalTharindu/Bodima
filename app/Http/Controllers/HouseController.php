<?php

namespace App\Http\Controllers;

use Auth;
use App\House;
use App\Boarding;
use Image;
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
        if ($house->boarding->user_id == auth()->id() || Auth::guard('admin')->check()) {

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
    public function update(Request $request)
    {
        $boarding = Boarding::find(request('boardingid'));
        $userId = $boarding->user_id;
        $adhouse = House::find(request('houseid'));

        if ( $adhouse->boarding->user_id == auth()->id() || Auth::guard('admin')->check()){
            $request->validate([
                'boardingType' => 'required',
                'NoOfRooms' => 'required',
                'Acavalability' => 'required',
                'MonthlyRent' => 'required',
                'KeyMoney' => 'required',
                'Address' => 'required',
                'Description' => '',
                // 'Province' => 'required',
                // 'District' => 'required',
                // 'City' => 'required',
                // 'Email' => 'required',
                // 'Telephone' => 'required',
            ]);

        if($request->hasfile('filename'))
                {

                foreach($request->file('filename') as $image)
                {
                    $name= uniqid('real_') . '.' . $image->getClientOriginalExtension();
                    //$image->move(public_path().'/uploads/property/house', $name);
                    Image::make($image)->resize(1280,876)->save(\public_path('/images/uploads/boardingimg/' . $name));  
                    $data[] = $name;
                }

                
            }

            $boarding ->user_id = $userId;
            $boarding ->boardingType = request('boardingType');

            if($request->has('School_boys')){
                $boarding->School_boys = 1;
            }else{
                $boarding->School_boys = 0;
            }

            if($request->has('School_girls')){
                $boarding->School_girls = 1;
            }else{
                $boarding->School_girls = 0;
            }

            if($request->has('Uni_boys')){
                $boarding->Uni_boys = 1;
            }else{
                $boarding->Uni_boys = 0;
            }

            if($request->has('Uni_girls')){
                $boarding->Uni_girls = 1;
            }else{
                $boarding->Uni_girls = 0;
            }

            if($request->has('Office_boys')){
                $boarding->Office_boys = 1;
            }else{
                $boarding->Office_boys = 0;
            }

            if($request->has('Office_girls')){
                $boarding->Office_girls = 1;
            }else{
                $boarding->Office_girls = 0;
            } 

            $boarding ->MonthlyRent = request('MonthlyRent');
            $boarding ->KeyMoney = request('KeyMoney');
            $boarding ->Address = request('Address');
            $boarding ->Description = request('Description');
            $boarding ->Province = request('Province');
            $boarding ->District = request('District');
            $boarding ->City = request('City');

            // $boarding ->Name = request('images');
            if ($request->hasfile('filename')) {

                $boarding->filename  = json_encode($data);
            }
            
            $boarding ->Email = request('Email');
            $boarding ->Telephone = request('Telephone');
            $boarding->save();

            // $adhouse->Boarding()->associate($boarding);
            $adhouse ->NoOfRooms = request('NoOfRooms');
            $adhouse ->NoOfBed = request('NoOfBed');
            $adhouse ->Acavalability = request('Acavalability');

            $adhouse ->kitchenavalability = request('kitchenavalability');

            if($request->has('Withfurniture')){
                $adhouse->Withfurniture = 1;
            }else{
                $adhouse->Withfurniture = 0;
            }

            $adhouse->save();

            if ( Auth::guard('admin')->check()) {
                toastr()->success('User Boarding has been successfully Updated!');
                return redirect('admin');
            } else {
                return redirect()->route('home');   
            }
            // return redirect()->route('home');   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        if ( $house->boarding->user_id == auth()->id() || Auth::guard('admin')->check()){

            DB::table('houses')->where('id', '=', $house->id)->delete();
            DB::table('boardings')->where('id', '=', $house->boarding->id)->delete();

                       
            if ( Auth::guard('admin')->check()) {
                toastr()->success('User Boarding  successfully Deleted!');
                return view('admin.index');
            } else {
                toastr()->success('Your Boarding  successfully Deleted!');
                return redirect()->route('home');   
            }
        }
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
