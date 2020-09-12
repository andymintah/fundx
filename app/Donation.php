<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'dntname',
        'description',
        'imgurl',
        'start_date',
        'end_date',
        'amount',
        'items',
        'address',
        'raised_amount',
        'balance_amount',
        'withdrawn_amount',
        'withdraw_balance',
        'category',
        'status',
        'user_id'

    ];


    public function user(){
        return $this->belongsTo('App\User');
    }  


    public function donation_donors (){
        return $this->hasMany('App\Donors');
    }
}
