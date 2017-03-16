<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //
    protected $fillable  = ['*'];
    
    public function user(){
        return $this->hasMany('App\User');
    }
}

