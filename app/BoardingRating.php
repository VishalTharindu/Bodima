<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardingRating extends Model
{
    
    public function user(){

        return $this->belongsTo(User::class);

    }

    public function boarding(){

        return $this->belongsTo(Boarding::class);

    }
}
