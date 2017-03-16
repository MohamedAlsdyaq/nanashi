<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\User as User;
use App\Tweet as Tweet;
use App\Friend as Friends;
use App\Movie as Movie;
use App\m_List as mList;
use App\Friend as Friend;
use Illuminate\Support\Facades\File;
use Auth;
use Image;
use Illuminate\Support\Facades\Storage;
use Charts;


class UserController extends Controller
{
   
    
    
    public function profile($id){
    
      $q = DB::select("
        SELECT lists.user_id, movies.genre1, count(movies.genre1) as counting
            FROM movies
            LEFT JOIN lists ON movies.id = lists.movie_id
            where lists.user_id ='$id'
            group by lists.user_id, movies.genre1
              ORDER BY counting DESC limit 3
        ");
        
 
        
 $resultArray = json_decode(json_encode($q), true);
     $chart = false; 
    $preferd_genre = false;
 if(isset($resultArray[2]['genre1'])){   
     
  $preferd_genre =  $resultArray[0];
     
     
 $chart = Charts::create('pie', 'highcharts')
        ->setTitle(' ')
        ->setLabels([$resultArray[0]['genre1'], $resultArray[1]['genre1'], $resultArray[2]['genre1']])
        ->setLibrary('google')
        ->setValues([$resultArray[0]['counting'],$resultArray[1]['counting'],$resultArray[2]['counting']])
        ->setResponsive(true);
 }
           
       
        
        

$are_we_friends = Friend::where([
    'user1' => Auth::user()->id, 'user2' => $id
        ])->get();
        
        
        
        $data = User::find($id); 
        /*
        if none display 404
        */
$me = Auth::user()->id;
 $statistics = DB::select("SELECT lists.movie_id, movies.movie_length
                        FROM lists 
                        LEFT JOIN movies ON movies.id = lists.movie_id
                        WHERE lists.user_id = '$id'
                        ");
                 $sum = null;
      foreach($statistics as $s){
          $sum += $s->movie_length;
      }
      $sum =    round(app('App\Http\Controllers\Helper')->convertMinutesToDays($sum), 2);

        return View('profile', [
            'profile_owner' => $data,
            'are_we_friends' => $are_we_friends,
            'statistic' => $sum,
            'chart' => $chart,
            'acheviments' => $preferd_genre
           

        ]);
            
    
    } // end profile
    
    public function posts($id){
        
   return $posts = Tweet::where('user_id', $id)->where('movie_id', '!=', 0)->with('movie')->get();
        
    }
   
    public function SuggestUsers(){
         $me = Auth::user()->id;

return  $top_movies = DB::select("SELECT id,name,pic FROM users
                    WHERE id NOT IN(
                        SELECT user2 FROM friends
                        WHERE user1 = '$me'
                    )
                    AND id !='$me'   
                        ");
        
    }
   
    public function test($id){
  
  return Tweet::with('user')->where('movie_id', '=', $id)->get();
        
    
    
    
}
    
    public function edit(Request $request){

      if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('storage\\'.Auth::user()->id.'\\' . $filename ) );
          
    		$user =  User::find(Auth::user()->id);
            
    		$user->pic = $filename;
    		$user->save();
           header('Location: /profile/'.Auth::user()->id);
    	}
       
    }
    
    
}