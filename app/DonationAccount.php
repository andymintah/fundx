<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationAccount extends Model
{
    protected $fillable = [
        'dnt_id',
        'total_amount',
        'raised_amount',
        'balance_amount',
        'withdrawn_amount'

    ];


    public function donation(){
        return $this->belongsTo('App\Donation');
    }  


}
