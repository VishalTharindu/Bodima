<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyFavourit extends Model
{
    public function user(){

        return $this->belongsTo(User::class);

    }

    public function boarding(){

        return $this->belongsTo(Boarding::class);

    }


    // public function house(){

    //     return $this->belongsTo(House::class);

    // }

    // public function anex(){

    //     return $this->belongsTo(Anex::class);

    // }

    // public function singleroom(){

    //     return $this->belongsTo(SingleRoom::class);

    // }
}

