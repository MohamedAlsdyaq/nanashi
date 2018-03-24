<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_List as m_List;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Http\Controllers\MovieController as Movie;
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
    
$top_movies = $this->get_top_movies();
$latest_updates = $this->get_latest_updates();

      //return $top_movies;
        return view('home', (
            [

                'recommended'=> false,
                'top'=> $top_movies,
                'updates'=> $latest_updates
            ]
                )
                   
                   );
        
        
        
        
        
    }
}
