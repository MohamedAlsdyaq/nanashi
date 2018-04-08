<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Auth;
use Illuminate\Support\Facades\Storage as storage;
use Excel;

class ModelController extends Controller
{
    public function OpenFile(){

        $file_n = base_path('storage/app/ml-20m/ratings.csv');
        $file = fopen($file_n, "r");
        $all_data = array();
        while ( ($data = fgetcsv($file, 10000, ",")) !==FALSE) {

            $user = $data[0];
            $movie = $data[1];
            $score = $data[2];
    $all_data = 'user_ID'.$user." Rated ".$movie." With a score of ".$score;
    
        while ($user == 1)

          echo $all_data;
        }
        break;
        fclose($file);
    }
    public function CF_user( $id ){

    }

    public function CF_item( $id ){

    }

    public function Recently_viewed( $id ){

    }
}