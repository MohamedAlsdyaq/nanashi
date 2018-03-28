<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_List as m_List;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Http\Controllers\MovieController as Movie;
use tmdb;

$client = new \GuzzleHttp\Client();


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
         $this->middleware('auth');
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_top_movies(){
    return   Movie::TopMovie(Auth::User()->id);     
    }

    public function get_latest_updates(){
    return   Movie::LatestUpdates(Auth::User()->id);       
    }


    public function index()
    {
       // $top = m_List::whereCreatedAt()
    
$trending = MovieController::LatestUpdates();
$recent = MovieController::recent();

$Trend  = $recent_view = array();

if(count($trending) > 0)
    for($i=0; $i<count($trending); $i++){$Trend[$i] = MovieController::get_movie( $trending[ $i ] ); }

if(count($recent) > 0)
    for($i=1; $i<count($recent); $i++){ $recent_view[$i] = MovieController::get_movie( $recent[ $i ] ); }


        // dd($s);
      //return $top_movies;
        return view('home', (
            [

                'recommended'=> false,
                'trendings'=> $Trend,
                'recents'=> $recent_view
            ]
                )
                   
                   );
        
        
        
        
        
    }
}
