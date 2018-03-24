<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User as User;
use Auth;
use App\Tweet as Tweet;
use App\Movie as Movie;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    // store the tweet in the tweet table     
        #Auth::user()->tweet()->save(new Tweet($request->all()));
     $tweet = new Tweet;
        
        $tweet->tweet = $request->input('comment');
        $tweet->user_id = Auth::user()->id;
        $tweet->name = Auth::user()->name;
        $tweet->save();
    if($request->has('movie_name')){

        // check if movie in db, if not insert it

$movie = Movie::firstOrCreate(
    [
        'movie_name' => $request->input('movie_name'),
        'id' => $request->input('movie_id'),
        'movie_pic' => $request->input('movie_pic'),
        'movie_bio' => $request->input('movie_bio'),
        'genre1' => $request->input('movie_g1'),
        'genre2' => $request->input('movie_g2'),
        'genre3' => $request->input('movie_g3'),
        'movie_date' => $request->input('movie_date'),
        'movie_length' => $request->input('movie_length'),
        'movie_rate' => $request->input('movie_rate') 
    ]
            );
        
      // @ must check if tweet is asoociated with a post 
        $tweet->movie_id = $request->input('movie_id');
    if($request->input('comment') == '.')
        $tweet->type = '2';
            
        }//end the if statment..
        
  
        $tweet->save();
   
      return $request->input('movie_name');  
        
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
 return User::find($id)->with('tweets')->simplePaginate(1);
        
    }

    public static function movie_posts($movie_id){

        return Tweet::with('user')->where([
        ['movie_id', '=', $movie_id],
        ['type', '=', null]
        ])->get();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
