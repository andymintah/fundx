<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doantionpayout extends Model
{
    protected $fillable = [
        'dnt_id',

        'amount'

    ];

    public function campaign(){
        return $this->belongsTo('App\Donation');
    } 
}
