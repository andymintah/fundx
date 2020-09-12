<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationDonors extends Model
{
    protected $fillable = [
        'dnt_id',
        'firstname',
        'lastname',
        'phoneno',
        'email',
        'amount'

    ];

    public function donation(){
        return $this->belongsTo('App\Donation');
    } 
}
