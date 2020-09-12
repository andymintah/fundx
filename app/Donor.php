<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    protected $fillable = [
        'cmgn_id',
        'firstname',
        'lastname',
        'phoneno',
        'email',
        'amount'

    ];

    public function campaign(){
        return $this->belongsTo('App\Campaign');
    } 
}
