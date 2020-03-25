<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_name', 'last_name', 'city', 'phone', 'email', 'password','usertype', 'address', 'country', 'postalcode', 'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function boardings()
    {
        return $this->hasMany(Boarding::class);
    }

    public function boardingsrequest()
    {
        return $this->hasMany(BoardingRequest::class);
    }

    public function favourities()
    {
        return $this->hasMany(MyFavourit::class);
    }

    public function boardingrating()
    {
        return $this->hasMany(BoardingRating::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function usercomplain()
    {
        return $this->hasMany(UserComplain::class);
    }

    public function useractivitylog(){
        return $this->hasMany(UserActivityLog::class);
    }
}
