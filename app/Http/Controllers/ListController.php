<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_List as mList;
use Auth;
use App\Http\Requests;


class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return '';
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
   
    //
   
$list = mList::firstOrNew(array('user_id' => Auth::user()->id, 'movie_id' => $request->input('movie_id')));
        
$list->user_id = Auth::user()->id;
$list->movie_id = $request->input('movie_id');
$list->tag = $request->input('tag');
$list->score = $request->input('score');
$list->save();
        
        
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
        $watched = mList::where(['user_id' => $id, 'tag'=> 'completed'])->with('movie')->get();
        
        $watchlist = mList::where(['user_id' => $id, 'tag'=> 'watchlist'])->with('movie')->get();
        
        $dropped = mList::where(['user_id' => $id, 'tag'=> 'dropped'])->with('movie')->get();
    
        return view('list', [
            'data' => $watched,
            'watchlist' => $watchlist,
            'dropped' => $dropped
                
                          ]);
        
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
    public static function BlackList($id , $suggestions)
    {

    }

    public static function Filter( $id ){

    }

    public static function GetWatched( $id ){
    return mList::where(['user_id' => $id, 'tag'=> 'completed'])->get();
    }
}
