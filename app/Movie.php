<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
       protected $guarded = ['dump'];
    //
    
    public function tweet(){
        
        return $this->hasMAny('App\Tweet');
    }
    
    public function m_list(){
        return $this->hasOne('App\m_List');
    }
}
