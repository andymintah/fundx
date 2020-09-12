<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'lastname',
        'firstname',
        'othernames',
        'dpurl',
        'nationalidtype',
        'nationalidno',
        'email',
        'contactno1',
        'contactno2',
        'contactno3',
        'user_id',
        'role_id'


    ];
    public function user(){
        return $this->belongsTo('App\User');
    }  
    public function role(){
        return $this->hasOne('App\Role');
    }  
    public function nat_id_types(){
        return $this->hasOne('App\Nat_ID_Type');
    }  
}
