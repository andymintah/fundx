<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class campaignpayout extends Model
{
    protected $fillable = [
        'cmgn_id',

        'amount'

    ];

    public function campaign(){
        return $this->belongsTo('App\Campaign');
    } 
}
