<?php

namespace App\Http\Controllers;
use App\Boarding;

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

    public function seemoreboarding()
    {
        return view('seemore');
    }
}

