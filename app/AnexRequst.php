<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnexRequst extends Model
{
    public function favourities()
    {
        return $this->hasMany(MyFavourit::class);
    }

    public function boardingrequest(){

        return $this->belongsTo(BoardingRequest::class);

    }
}
