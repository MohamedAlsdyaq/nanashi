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
Redis::connection();


class MovieController extends Controller
{
    //

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
        Redis::zincrby ( 'recent' , 1 , $id );


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

    public static function TopMovie( $id )
    {

        return DB::select ( "SELECT lists.movie_id, COUNT(lists.movie_id) AS magnitude,   b.*
                    FROM lists 
                    LEFT JOIN
                       (
                       SELECT * FROM movies
                       ) b
                       ON b.id = lists.movie_id
                    GROUP BY lists.movie_id
                    ORDER BY magnitude DESC
                    LIMIT 6
                        " );
    }

    /**
     * @return cached Trending
     *
     */
    public static function LatestUpdates()
    {
        return Redis::zrevrange ( 'recent' , 0 , 2 );
    }


}
