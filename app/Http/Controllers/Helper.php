<?php
namespace App\Http\Controllers;

class Helper {
public function convertMinutesToDays($time) {
      
    if ($time < 1) {
        return;
    }
      
    $days = ($time / 1440);
   
    return  $days;
    
}
    
}