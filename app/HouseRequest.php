<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseRequest extends Model
{
    public function boardingrequest(){

        return $this->belongsTo(BoardingRequest::class);

    }
}
