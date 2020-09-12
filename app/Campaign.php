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
        'balance_amount',
        'withdrawn_amount',
        'withdraw_balance',
        'status',
        'user_id'

    ];


    public function user(){
        return $this->belongsTo('App\User');
    }  

    public function campaignaccount (){
        return $this->hasOne('App\CampaignAccount');
    }
    public function donors (){
        return $this->hasMany('App\Donors');
    }
}
