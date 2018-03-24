<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{    
    //
    public function user(){
        
        return $this->belongsTo('App\User');
        
    } // user()

    public function movie(){
        
        return $this->belongsTo('App\Movie');
    }


}
