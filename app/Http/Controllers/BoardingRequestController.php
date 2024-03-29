<?php

namespace App\Http\Controllers;

use App\Boarding;
use App\BoardingRequest;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\DB;
use Alert;
use App\User;

use App\HouseRequest;
use App\SingleRoomRequest;
use App\AnexRequst;
use App\Notifications\UserSmsinfo;
class BoardingRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Boardingrequest = BoardingRequest::orderBy('created_at','desc')->paginate(4);
        return view('allrequest',compact('Boardingrequest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requestBoarding.addboardingrequest');
    }
    public function house()
    {
        return view('requestBoarding.addHouserequest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeHouserRequest(Request $request)
    {
        // dd($request);
        $request->validate([
            'boardingType' => 'required',
            'MonthlyRent' => 'required',
            'KeyMoney' => 'required',
            'Province' => 'required',
            'District' => 'required',
            'City' => 'required',
            // 'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'Email' => 'required',
            'Telephone' => 'required|numeric|min:10',
        ]);


        $boarding_requests = new BoardingRequest;
        $boarding_requests ->user_id = auth()->id();
        $boarding_requests ->boardingType = request('boardingType');

        if($request->has('School_boys')){
            $boarding_requests->School_boys = 1;
        }else{
            $boarding_requests->School_boys = 0;
        }

        if($request->has('School_girls')){
            $boarding_requests->School_girls = 1;
        }else{
            $boarding_requests->School_girls = 0;
        }

        if($request->has('Uni_boys')){
            $boarding_requests->Uni_boys = 1;
        }else{
            $boarding_requests->Uni_boys = 0;
        }

        if($request->has('Uni_girls')){
            $boarding_requests->Uni_girls = 1;
        }else{
            $boarding_requests->Uni_girls = 0;
        }

        if($request->has('Office_boys')){
            $boarding_requests->Office_boys = 1;
        }else{
            $boarding_requests->Office_boys = 0;
        }

        if($request->has('Office_girls')){
            $boarding_requests->Office_girls = 1;
        }else{
            $boarding_requests->Office_girls = 0;
        } 

        $boarding_requests ->MonthlyRent = request('MonthlyRent');
        $boarding_requests ->KeyMoney = request('KeyMoney');
        $boarding_requests ->Description = request('Description');
        $boarding_requests ->Province = request('Province');
        $boarding_requests ->District = request('District');
        $boarding_requests ->City = request('City');

        $boarding_requests ->Name = request('Name');
        // $boarding_requests->filename  = json_encode($data);
        $boarding_requests ->Email = request('Email');
        $boarding_requests ->Telephone = request('Telephone');
        $boarding_requests->save();

        $houses = new HouseRequest;
        $houses->BoardingRequest()->associate($boarding_requests);
        $houses ->NoOfRooms = request('NoOfRooms');
        $houses ->NoOfBed = request('NoOfBed');
        $houses ->Acavalability = request('Acavalability');
        $houses ->kitchenavalability = request('kitchenavalability');

        if($request->has('Withfurniture')){
            $houses->Withfurniture = 1;
        }else{
            $houses->Withfurniture = 0;
        }

        $houses->save();

        $Boadrings = Boarding::where('boardingType','LIKE', request('boardingType'))
                ->where('Province','LIKE',request('Province'))
                ->latest('created_at')->first();

                if (!empty($Boadrings)) {           
                    foreach($Boadrings as $boardings){              
                        $users = User::where('id', $boardings->user->id)->get();
                        
                        $details = [
                            'greeting' => 'Hi user',
                            'body' => 'we found a boarding place which is matched with your requirement',
                            'thanks' => 'Thank you for using Bodimalk',
                        ];
        
                        foreach ($users as $user) {
                            $user->notify(new \App\Notifications\UserSmsinfo($details));
                        }

                        toastr()->success('Your Request has been successfully added!');
                        return redirect()->action('HouseRequestController@show'); 
                    }
                }

        toastr()->success('Your Request has been successfully added!');
        return redirect()->action('HouseRequestController@show');
    }

    public function storeAnnexRequest(Request $request)
    {
        
        $request->validate([
            'boardingType' => 'required',
            'MonthlyRent' => 'required',
            'KeyMoney' => 'required',
            'Province' => 'required',
            'District' => 'required',
            'City' => 'required',
            // 'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'Email' => 'required',
            'Telephone' => 'required|numeric|min:10',
            
        ]);


        $boarding_requests = new BoardingRequest;
        $boarding_requests ->user_id = auth()->id();
        $boarding_requests ->boardingType = request('boardingType');

        if($request->has('School_boys')){
            $boarding_requests->School_boys = 1;
        }else{
            $boarding_requests->School_boys = 0;
        }

        if($request->has('School_girls')){
            $boarding_requests->School_girls = 1;
        }else{
            $boarding_requests->School_girls = 0;
        }

        if($request->has('Uni_boys')){
            $boarding_requests->Uni_boys = 1;
        }else{
            $boarding_requests->Uni_boys = 0;
        }

        if($request->has('Uni_girls')){
            $boarding_requests->Uni_girls = 1;
        }else{
            $boarding_requests->Uni_girls = 0;
        }

        if($request->has('Office_boys')){
            $boarding_requests->Office_boys = 1;
        }else{
            $boarding_requests->Office_boys = 0;
        }

        if($request->has('Office_girls')){
            $boarding_requests->Office_girls = 1;
        }else{
            $boarding_requests->Office_girls = 0;
        } 

        $boarding_requests ->MonthlyRent = request('MonthlyRent');
        $boarding_requests ->KeyMoney = request('KeyMoney');
        $boarding_requests ->Description = request('Description');
        $boarding_requests ->Province = request('Province');
        $boarding_requests ->District = request('District');
        $boarding_requests ->City = request('City');

        $boarding_requests ->Name = request('Name');
        // $boarding_requests->filename  = json_encode($data);
        $boarding_requests ->Email = request('Email');
        $boarding_requests ->Telephone = request('Telephone');
        $boarding_requests->save();

        $annex = new AnexRequst;
        $annex->BoardingRequest()->associate($boarding_requests);
        $annex ->NoOfRooms = request('NoOfRooms');
        $annex ->NoOfBed = request('NoOfBed');
        $annex ->Acavalability = request('Acavalability');
        $annex ->kitchenavalability = request('kitchenavalability');

        if($request->has('Withfurniture')){
            $annex->Withfurniture = 1;
        }else{
            $annex->Withfurniture = 0;
        }

        $annex->save();

        $Boadrings = Boarding::where('boardingType','LIKE', request('boardingType'))
                ->where('Province','LIKE',request('Province'))
                ->latest('created_at')->first();

        if (!empty($Boadrings)) {           
            foreach($Boadrings as $boardings){              
                $users = User::where('id', $boardings->user->id)->get();
                
                $details = [
                    'greeting' => 'Hi user',
                    'body' => 'we found a boarding place which is matched with your requirement',
                    'thanks' => 'Thank you for using Bodimalk',
                ];

                foreach ($users as $user) {
                    $user->notify(new \App\Notifications\UserSmsinfo($details));
                }
                toastr()->success('Your Request has been successfully added!');
                return redirect()->action('AnexRequstController@show'); 
            }
        }

        toastr()->success('Boarding request has been successfully added!');
        return redirect()->action('AnexRequstController@show');
    }

    public function storeSingelRoomRequest(Request $request)
    {
        
        $request->validate([
            'boardingType' => 'required',
            'MonthlyRent' => 'required',
            'KeyMoney' => 'required',
            'Province' => 'required',
            'District' => 'required',
            'City' => 'required',
            // 'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'Email' => 'required',
            'Telephone' => 'required|numeric|min:10',
        ]);


        $boarding_requests = new BoardingRequest;
        $boarding_requests ->user_id = auth()->id();
        $boarding_requests ->boardingType = request('boardingType');

        if($request->has('School_boys')){
            $boarding_requests->School_boys = 1;
        }else{
            $boarding_requests->School_boys = 0;
        }

        if($request->has('School_girls')){
            $boarding_requests->School_girls = 1;
        }else{
            $boarding_requests->School_girls = 0;
        }

        if($request->has('Uni_boys')){
            $boarding_requests->Uni_boys = 1;
        }else{
            $boarding_requests->Uni_boys = 0;
        }

        if($request->has('Uni_girls')){
            $boarding_requests->Uni_girls = 1;
        }else{
            $boarding_requests->Uni_girls = 0;
        }

        if($request->has('Office_boys')){
            $boarding_requests->Office_boys = 1;
        }else{
            $boarding_requests->Office_boys = 0;
        }

        if($request->has('Office_girls')){
            $boarding_requests->Office_girls = 1;
        }else{
            $boarding_requests->Office_girls = 0;
        } 

        $boarding_requests ->MonthlyRent = request('MonthlyRent');
        $boarding_requests ->KeyMoney = request('KeyMoney');
        $boarding_requests ->Description = request('Description');
        $boarding_requests ->Province = request('Province');
        $boarding_requests ->District = request('District');
        $boarding_requests ->City = request('City');

        $boarding_requests ->Name = request('Name');
        // $boarding_requests->filename  = json_encode($data);
        $boarding_requests ->Email = request('Email');
        $boarding_requests ->Telephone = request('Telephone');
        $boarding_requests->save();

        $singelroom = new SingleRoomRequest;
        $singelroom->BoardingRequest()->associate($boarding_requests);
        $singelroom ->NoOfBed = request('NoOfBed');
        $singelroom->Acavalability = request('Acavalability');

        if($request->has('Withfurniture')){
            $singelroom->Withfurniture = 1;
        }else{
            $singelroom->Withfurniture = 0;
        }

        $singelroom->save();

        $Boadrings = Boarding::where('boardingType','LIKE', request('boardingType'))
                ->where('Province','LIKE',request('Province'))
                ->latest('created_at')->first();

                if (!empty($Boadrings)) {           
                    foreach($Boadrings as $boardings){              
                        $users = User::where('id', $boardings->user->id)->get();
                        
                        $details = [
                            'greeting' => 'Hi user',
                            'body' => 'we found a boarding place which is matched with your requirement',
                            'thanks' => 'Thank you for using Bodimalk',
                        ];
        
                        foreach ($users as $user) {
                            $user->notify(new \App\Notifications\UserSmsinfo($details));
                        }
                        
                        toastr()->success('Your Request has been successfully added!');
                        return redirect()->action('SingleRoomRequestController@show');
                    }
                }

        toastr()->success('Boarding request has been successfully added!');

        // return view('requestBoarding/addboardingrequest');
        return redirect()->action('SingleRoomRequestController@show');
        // return back()->with('message', 'Your Request has been successfully added!');
    }

    public function viewHouseRequest(HouseRequest $houserequest){
        
        // $fevouriteid = MyFavourit::select('id')->where('house_id','$house->id')->get()->first();
        // dd($house->id);
        $boardingrequestData = $houserequest;
        return view('requestBoarding.visiteMore', compact('boardingrequestData'));
    }

    public function viewAnexRequest(AnexRequst $anexrequest){

        $boardingrequestData = $anexrequest;
        return view('requestBoarding.visiteMore', compact('boardingrequestData'));
    }

    public function viewSingleRoomRequest(SingleRoomRequest $singleroomrequest){

        $boardingrequestData = $singleroomrequest;
        return view('requestBoarding.visiteMore', compact('boardingrequestData'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoardingRequest  $boarding_requestsRequest
     * @return \Illuminate\Http\Response
     */
    public function show(BoardingRequest $boarding_requestsRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BoardingRequest  $boarding_requestsRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(BoardingRequest $boarding_requestsRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoardingRequest  $boarding_requestsRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoardingRequest $boarding_requestsRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoardingRequest  $boarding_requestsRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoardingRequest $boarding_requestsRequest)
    {
        // dd($boarding_requestsRequest);
        DB::table('boarding_requests')->where('id', '=', $boarding_requestsRequest->id)->delete();
        toastr()->success('Boarding request has been successfully deleted!');
        // Alert::success('User Boarding has been deleted successfully!', 'Successfully Deleted!')->autoclose(3000);
        return back();
    }
}
