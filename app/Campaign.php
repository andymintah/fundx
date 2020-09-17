<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'cmpname',
        'description',
        'imgurl',
        'start_date',
        'end_date',
        'amount',
        'category'.
        'raised_amount',
        'target_balance',
        'withdrawn_amount',
        'withdrawable_balance',
        'status',
        'user_id'

    ];


    public function user(){
        return $this->belongsTo('App\User'::class);
    }  


    public function donors (){
        return $this->hasMany('App\Donors');
    }
}
