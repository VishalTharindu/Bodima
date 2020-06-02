<?php

namespace App\Http\Controllers;

use Auth;
use App\SingleRoom;
use App\Boarding;
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
        if ($singleRoom->boarding->user_id == auth()->id()|| Auth::guard('admin')->check()) {

            return view('addBoarding.editSingleroom',compact('singleRoom'), array('user' => Auth::user()));
        } else {

            Alert::error('Your request has been denied by the system', 'Unauthorized Attempt')->autoclose(3000);
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SingleRoom  $singleRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $boarding = Boarding::find(request('boardingid'));
        $userId = $boarding->user_id;
        $adsingleroom = SingleRoom::find(request('singleroomid'));

        if ( $adsingleroom->boarding->user_id == auth()->id() || Auth::guard('admin')->check()){
            $request->validate([
                'boardingType' => 'required',
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
            $boarding ->longitude = request('longitude');
            $boarding ->latitude = request('latitude');

            // $boarding ->Name = request('images');
            if ($request->hasfile('filename')) {

                $boarding->filename  = json_encode($data);
            }
            
            $boarding ->Email = request('Email');
            $boarding ->Telephone = request('Telephone');
            $boarding->save();

            // $adhouse->Boarding()->associate($boarding);
            $adsingleroom ->NoOfBed = request('NoOfBed');
            $adsingleroom ->Acavalability = request('Acavalability');

            if($request->has('Withfurniture')){
                $adsingleroom->Withfurniture = 1;
            }else{
                $adsingleroom->Withfurniture = 0;
            }


            $adsingleroom->save();

            toastr()->success('Your Boarding has been successfully Updated!');

            if ( Auth::guard('admin')->check()) {
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
     * @param  \App\SingleRoom  $singleRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(SingleRoom $singleRoom)
    {
        if ( $singleRoom->boarding->user_id == auth()->id() || Auth::guard('admin')->check()){

            DB::table('single_rooms')->where('id', '=', $singleRoom->id)->delete();
            DB::table('boardings')->where('id', '=', $singleRoom->boarding->id)->delete();
            Alert::success('User Boarding has been deleted successfully!', 'Successfully Deleted!')->autoclose(3000);

            if ( Auth::guard('admin')->check()) {
                toastr()->success('User Boarding  successfully Deleted!');
                return view('admin.index');
            } else {
                toastr()->success('Your Boarding  successfully Deleted!');
                return view('home');
            }
            
        }
    }
}
