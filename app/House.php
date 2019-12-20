<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    

    public function boarding(){

        return $this->belongsTo(Boarding::class);

    }
}
