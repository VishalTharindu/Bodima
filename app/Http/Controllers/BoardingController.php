<?php

namespace App\Http\Controllers;

use App\Boarding;
use Auth;
use Image;
use Alert;
use Illuminate\Http\Request;

use App\House;
use App\Anex;
use App\SingleRoom;
use App\User;
use Nexmo\Laravel\Facade\Nexmo;
use App\BoardingRequest;
use App\Notifications\UserSmsinfo;

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
        return view('addBoarding.addboarding');
    }

    public function house()
    {
        return view('addBoarding.addHouse');
    }

    public function anex()
    {
        return view('addBoarding.addAnex');
    }

    public function singalroom()
    {
        return view('addBoarding.addSingalroom');
    }

    public function premiumuserboarding()
    {
        $Boarding = Boarding::orderBy('created_at','desc')->paginate(4);
        return view('addBoarding.premiumuserboarding', compact('Boarding'));
    }

    public function housestore(Request $request){

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
            'Email' => 'required',
            'Telephone' => 'required',
        ]);

       if($request->hasfile('filename'))
             {
            
            $imgcount =0;

            foreach($request->file('filename') as $image)
            {
                if ($imgcount < 1) {
                    $covname= uniqid('real_') . '.' . $image->getClientOriginalExtension();
                    //$image->move(public_path().'/uploads/property/house', $name);
                    Image::make($image)->resize(1280,876)->save(\public_path('/images/uploads/boardingimg/' . $covname));  
                    // $covedata[] = $covname;
                    break;
                }              
            }

            foreach($request->file('filename') as $image)
            {
                $name= uniqid('real_') . '.' . $image->getClientOriginalExtension();
                //$image->move(public_path().'/uploads/property/house', $name);
                Image::make($image)->resize(1280,876)->save(\public_path('/images/uploads/boardingimg/' . $name));  
                $data[] = $name;
            }

            
         }


        $boarding = new Boarding;
        $boarding ->user_id = auth()->id();
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
        $boarding ->City = request('City');
        $boarding ->latitude  = request('lat');
        $boarding ->longitude = request('lng');
        // $boarding ->Name = request('images');
        $boarding->filename  = json_encode($data);
        $boarding->coverimg  = $covname;
        $boarding ->Email = request('Email');
        $boarding ->Telephone = request('Telephone');
        $boarding->save();

        $adhouse = new House;

        $adhouse->Boarding()->associate($boarding);
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

        $Boadrings = BoardingRequest::where('boardingType','LIKE', request('boardingType'))
                        ->where('Province','LIKE',request('Province'))
                        ->latest('created_at')->get();
        if (count($Boadrings) > 0) {           
            foreach($Boadrings as $boardings){              
                if($boardings->user->usertype == 1){
                    $users = User::where('id', $boardings->user->id)->get();
                
                    $details = [
                        'greeting' => 'Hi user',
                        'body' => 'we found a boarding place which is matched with your requirement',
                        'thanks' => 'Thank you for using Bodimalk',
                    ];

                    foreach ($users as $user) {
                        $user->notify(new \App\Notifications\UserSmsinfo($details));
                    }

                    toastr()->success('Your Boarding has been successfully added!');
                    // return back()->with('Your Boarding has been successfully added!');
                    return redirect()->action('HouseController@show');
    
                }    
            }
        }


        // Alert::success('User Boarding has been added successfully!', 'Successfully Added!')->autoclose(3000);
        toastr()->success('Your Boarding has been successfully added!');
        return view('welcome'); 
    }

    public function anexstore(Request $request){

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

        if($request->hasfile('filename'))
        {
       
       $imgcount =0;

       foreach($request->file('filename') as $image)
       {
           if ($imgcount < 1) {
               $covname= uniqid('real_') . '.' . $image->getClientOriginalExtension();
               //$image->move(public_path().'/uploads/property/house', $name);
               Image::make($image)->resize(1280,876)->save(\public_path('/images/uploads/boardingimg/' . $covname));  
               // $covedata[] = $covname;
               break;
           }              
       }

       foreach($request->file('filename') as $image)
       {
           $name= uniqid('real_') . '.' . $image->getClientOriginalExtension();
           //$image->move(public_path().'/uploads/property/house', $name);
           Image::make($image)->resize(1280,876)->save(\public_path('/images/uploads/boardingimg/' . $name));  
           $data[] = $name;
       }

       
    }

        
        $boarding = new Boarding;
        $boarding ->user_id = auth()->id();
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

        $boarding->filename  = json_encode($data);
        $boarding->coverimg  = $covname;
        $boarding ->Email = request('Email');
        $boarding ->Telephone = request('Telephone');
        $boarding->save();

        $adanex = new Anex;

        $adanex->Boarding()->associate($boarding);
        $adanex ->NoOfRooms = request('NoOfRooms');
        $adanex ->NoOfBed = request('NoOfBed');
        $adanex ->Acavalability = request('Acavalability');

        $adanex ->kitchenavalability = request('kitchenavalability');

        if($request->has('Withfurniture')){
            $adanex->Withfurniture = 1;
        }else{
            $adanex->Withfurniture = 0;
        }

        $adanex->save();

        $Boadrings = BoardingRequest::where('boardingType','LIKE', request('boardingType'))
            ->where('Province','LIKE',request('Province'))
            ->latest('created_at')->get();
        if (count($Boadrings) > 0) {           
            foreach($Boadrings as $boardings){              
                if($boardings->user->usertype == 1){
                    $users = User::where('id', $boardings->user->id)->get();
                    
                    $details = [
                        'greeting' => 'Hi user',
                        'body' => 'we found a boarding place which is matched with your requirement',
                        'thanks' => 'Thank you for using Bodimalk',
                    ];

                    foreach ($users as $user) {
                        $user->notify(new \App\Notifications\UserSmsinfo($details));
                    }

                    return back()->with('Your Boarding has been successfully added!');

                }       
            }              
        }

        toastr()->success('Your Favourite has been successfully added!');

        return back();
    }


    public function singleroomstore(Request $request){

        $request->validate([
            'boardingType' => 'required',
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

        if($request->hasfile('filename'))
        {
       
            $imgcount =0;

            foreach($request->file('filename') as $image)
            {
                if ($imgcount < 1) {
                    $covname= uniqid('real_') . '.' . $image->getClientOriginalExtension();
                    //$image->move(public_path().'/uploads/property/house', $name);
                    Image::make($image)->resize(1280,876)->save(\public_path('/images/uploads/boardingimg/' . $covname));  
                    // $covedata[] = $covname;
                    break;
                }              
            }

            foreach($request->file('filename') as $image)
            {
                $name= uniqid('real_') . '.' . $image->getClientOriginalExtension();
                //$image->move(public_path().'/uploads/property/house', $name);
                Image::make($image)->resize(1280,876)->save(\public_path('/images/uploads/boardingimg/' . $name));  
                $data[] = $name;
            }

       
        }


        $boarding = new Boarding;
        $boarding ->user_id = auth()->id();
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

        $boarding->filename  = json_encode($data);
        $boarding->coverimg  = $covname;
        $boarding ->Email = request('Email');
        $boarding ->Telephone = request('Telephone');
        $boarding->save();

        $adsingleroom = new SingleRoom;

        $adsingleroom->Boarding()->associate($boarding);
        $adsingleroom ->NoOfBed = request('NoOfBed');

        if($request->has('Acavalability')){
            $adsingleroom->Acavalability = 1;
        }else{
            $adsingleroom->Acavalability = 0;
        }

        if($request->has('Withfurniture')){
            $adsingleroom->Withfurniture = 1;
        }else{
            $adsingleroom->Withfurniture = 0;
        }

        $adsingleroom->save();

        $Boadrings = BoardingRequest::where('boardingType','LIKE', request('boardingType'))
                ->where('Province','LIKE',request('Province'))
                ->latest('created_at')->get();  
        if (count($Boadrings) > 0) {           
            foreach($Boadrings as $boardings){              
                if($boardings->user->usertype == 1){
                    $users = User::where('id', $boardings->user->id)->get();
                    
                    $details = [
                        'greeting' => 'Hi user',
                        'body' => 'we found a boarding place which is matched with your requirement',
                        'thanks' => 'Thank you for using Bodimalk',
                    ];

                    foreach ($users as $user) {
                        $user->notify(new \App\Notifications\UserSmsinfo($details));
                    }

                    return back()->with('Your Boarding has been successfully added!');

                }    
            }
        }

        return back()->with('message', 'Your Boarding has been successfully added!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

    
      return view('profileManage.masterdashboard',compact('Boadrings'));
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
