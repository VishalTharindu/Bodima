<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boarding extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function houses(){

        return $this->hasMany(House::class);

    }

    public function anexs(){

        return $this->hasMany(Anex::class);

    }

    public function singleroom(){

        return $this->hasMany(SingleRoom::class);

    }

    public function favourities()
    {
        return $this->hasMany(MyFavourit::class);
    }

    public function boardingrating()
    {
        return $this->hasMany(BoardingRating::class);
    }

    public function usercomplain()
    {
        return $this->hasMany(UserComplain::class);
    }

    public function usefeedback()
    {
        return $this->hasMany(UserFeedback::class);
    }

    public static function allBoarding(){
        $boarding = Boarding::get();
        return count($boarding);
    }

    public static function availabaleBoarding(){
        $boarding = Boarding::where('Availability', '=', 'YES')->get();
        return count($boarding);
    }
}
