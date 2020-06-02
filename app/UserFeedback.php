<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFeedback extends Model
{
    public function user(){

        return $this->belongsTo(User::class);

    }

    public function boarding(){

        return $this->belongsTo(Boarding::class);

    }

    public static function userFeedback($boardingid){
        $feedback = UserFeedback::where('boarding_id', '=', $boardingid)->get();

        return $feedback;
    }
}
