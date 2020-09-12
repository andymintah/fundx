<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignAccount extends Model
{
    protected $fillable = [
        'cmgn_id',
        'total_amount',
        'raised_amount',
        'balance_amount',
        'withdrawn_amount'

    ];


    public function campaign(){
        return $this->belongsTo('App\Campaign');
    }  


}
