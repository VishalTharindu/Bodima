<?php

namespace App\Http\Controllers;

use App\Boarding;
use Auth;
use Image;
use Illuminate\Http\Request;

class BoardingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addbodim');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // return dd($request);
        $request->validate([
            'boardingType' => 'required',
            'NoOfRooms' => 'required',
            'Acavalability' => 'required',
            'MonthlyRent' => 'required',
            'KeyMoney' => 'required',
            'Address' => 'required',
            'Description' => '',
            'Province' => 'required',
            'District' => 'required',
            'City' => 'required',
            // 'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'Email' => 'required',
            'Telephone' => 'required',
        ]);

        // $this->validate($request, [
        //     'filename' => 'required',
        //     'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // ]);

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

        // if($request->hasfile('filename'))
        //  {

        //     foreach($request->file('filename') as $image)
        //     {
        //         $name=$image->getClientOriginalName();
        //         $image->move(public_path().'/images/uploads/boardingimg/', $name);  
        //         $data[] = $name;  
        //     }
        //  }

        $boarding = new Boarding;
        $boarding ->user_id = auth()->id();
        $boarding ->boardingType = request('boardingType');
        $boarding ->NoOfRooms = request('NoOfRooms');
        $boarding ->NoOfBed = request('NoOfBed');
        $boarding ->Acavalability = request('Acavalability');

        if($request->has('Table')){
            $boarding->Table = 1;
        }else{
            $boarding->Table = 0;
        }

        if($request->has('Chairs')){
            $boarding->Chairs = 1;
        }else{
            $boarding->Chairs = 0;
        }

        if($request->has('Racks')){
            $boarding->Racks = 1;
        }else{
            $boarding->Racks = 0;
        }

        if($request->has('More')){
            $boarding->More = 1;
        }else{
            $boarding->More = 0;
        }

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
        $boarding->filename  = json_encode($data);
        $boarding ->Email = request('Email');
        $boarding ->Telephone = request('Telephone');
        $boarding->save();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boarding  $boarding
     * @return \Illuminate\Http\Response
     */
    public function show(Boarding $boarding)
    {
        //$Boadrings = Boarding::paginate(4);
        $userID = Auth::user()->id;
        $Boadrings = Boarding::where(function($query) use ($userID){
            $query->where('user_id','=',$userID);
        })->paginate(4);

    
      return view('dashboard',compact('Boadrings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boarding  $boarding
     * @return \Illuminate\Http\Response
     */
    public function edit(Boarding $boarding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boarding  $boarding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boarding $boarding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boarding  $boarding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boarding $boarding)
    {
        //
    }
}
