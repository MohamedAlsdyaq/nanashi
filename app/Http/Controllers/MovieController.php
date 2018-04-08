<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet as Tweet;
use App\User as User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\PostController as Posts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Auth;



class MovieController extends Controller
{
    //

    public static function connect(){
        $token  = new \Tmdb\ApiToken('54f297aa644bf4f27044771fc75cbb64');
        return new \Tmdb\Client($token);
    }

    /**
     * @param $id
     */
    public static function get_movie( $id ){
        $client = MovieController::connect();
        return  $client->getMoviesApi()->getMovie( $id );
    }

    public function get_posts( $id )
    {

        return Posts::movie_posts ( $id );

    }

    /**
     * @param $id
     * @return View
     */
    public function show( $id )
    {


        $posts = $this->get_posts ( $id );
        $recommended = false;
        $id = (int)$id;

        // @@ Add an item to Redis Trending set
        if($id > 0)
           Redis::zincrby ( 'Trending' , 1 , $id );

        if(isset(Auth::user()->id) && $id > 0)
            Redis::sadd (Auth::user()->id , $id );


        return view ( 'movie' )->with ( [
            'posts' => $posts ,
            'recommended' => 862
        ] );
    }

    /*

    @@ Param a string to be searched
    @@ Returns object  of all matching string names
    */
    public function search()
    {
        // $query = Request::input('search');
        $q = Input::get ( 'q' );

        return view ( 'search' )->with ( 'movie_name' , $q );
    }


    public function browse( $id )
    {

        return view ( 'browse' )->with ( 'id' , $id );

    }

    /**
     * @return mixed
     */
    public static function recent( )
    {

        return Redis::SMEMBERS (  Auth::user()->id );
    }

    /**
     * @return cached Trending
     *
     */
    public static function LatestUpdates()
    {
        return Redis::zrevrange ( 'Trending' , 1 , -1 );
    }



}
