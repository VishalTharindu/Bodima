<?php

namespace App\Http\Controllers;
use App\Boarding;
use App\House;
use App\Anex;

use Illuminate\Http\Request;

class VisitBoarding extends Controller
{
    public function index()
    {
        return view('bodimsec');
    }

    public function showboarding()
    {
        $Boadrings = Boarding::orderBy('created_at','desc')->paginate(3);
        return view('boardingview',compact('Boadrings'));
    }

    public function seemoreboarding($boardingData)
    {
        return view('seemore',$boardingData);
        //return dd($House);
    }

    public function viewHouse(House $house){

        $boardingData = $house;
        return view('seemore', compact('boardingData'));
    }

    public function viewAnex(Anex $anex){

        $boardingData = $anex;
        return view('seemore', compact('boardingData'));
    }

    public function viewSingleRoom(SingleRoom $singleroom){

        $boardingData = $singleroom;
        return view('seemore', compact('boardingData'));
    }
}

