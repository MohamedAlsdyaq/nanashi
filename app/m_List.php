<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_List extends Model
{
    //
    protected $table = 'lists';
    protected $fillable = ['*'];
    
    public function movie(){
        
        return $this->belongsTo('App\Movie');
    }
}
