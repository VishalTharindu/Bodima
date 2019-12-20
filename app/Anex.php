<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anex extends Model
{
    
    public function boarding(){

        return $this->belongsTo(Boarding::class);

    }
}
