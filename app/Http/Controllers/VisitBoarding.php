<?php

namespace App\Http\Controllers;
use App\Boarding;
use App\House;

use Illuminate\Http\Request;

class VisitBoarding extends Controller
{
    public function index()
    {
        return view('bodimsec');
    }

    public function showboarding()
    {
        $Boadrings = Boarding::orderBy('created_at','desc')->paginate(4);
        return view('bodimsec',compact('Boadrings'));
    }

    public function seemoreboarding(House $House)
    {
        return view('seemore',compact('House'));
        //return dd($House);
    }
}

