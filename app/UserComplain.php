<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserComplain extends Model
{
    public function user(){

        return $this->belongsTo(User::class);

    }

    public function boarding(){

        return $this->belongsTo(Boarding::class);

    }

    public static function userComplainCount($boardingId){
        $complain = UserComplain::where('boarding_id', '=', $boardingId)->get();
        return count($complain);
    }
}
