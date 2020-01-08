<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleRoomRequest extends Model
{
    public function boardingrequest(){

        return $this->belongsTo(BoardingRequest::class);

    }
}
