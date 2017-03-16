<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Friend as Friend;
use App\Http\Requests;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //show notifications
    {
        //
        $me = Auth::user()->id;
      return  DB::select("SELECT users.name,users.pic, friends.created_at, friends.user1
                    FROM users
                    Left JOIN friends ON users.id = friends.user2 
                    WHERE users.id IN(
                        SELECT user1 FROM friends
                        WHERE user2 = '$me'
                        )
                    AND users.id !='$me'
                    AND friends.status='0'");
        
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
        
$friend_instance = new Friend;
        
       $friend_instance->user1 = Auth::user()->id;
       $friend_instance->user2 = $request->user_2;
       $friend_instance->status = 0;
        
       $friend_instance->save();
      
        //return $friend_instance;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //@SHOWS SOMEONE FRIENDS,

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
    public function destroy(Request $request)
    {
        //
$deletedRows = Friend::where([
    'user1' => Auth::user()->id, 'user2' => $request->user_2
        ])->delete();
    
        //return Auth::user->id.$request->user2
    }
    
    
}
