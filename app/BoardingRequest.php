<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardingRequest extends Model
{

    public function houserequests(){

        return $this->hasMany(HouseRequest::class);

    }

    public function annexrequests(){

        return $this->hasMany(AnexRequst::class);

    }

    public function singelroomrequests(){

        return $this->hasMany(SingleRoom::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function allBoardingRequest(){
        $boarding = BoardingRequest::get();
        return count($boarding);
    }

    public static function avilableBoardingRequest(){
        $boarding = BoardingRequest::get();
        return count($boarding);
    }
}
