<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardingRequest extends Model
{

    public function houserequests(){

        return $this->hasMany(HouseRequest::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
