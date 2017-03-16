<?php

   Route::get('/', 'HomeController@index');

    Route::get('/w', function(){
          return View('welcome');
     });


Route::get('/privacy', function(){
    return View('privacy');
});
Route::get('/test', 'UserController@convertToHoursMins');
Route::get('/movie/{id}', 'MovieController@show');
Route::get('/recommend', 'RatedByOthers@name');
Route::get('/profile/{id}', 'UserController@profile');
Route::post('/profile/edit/{id}', 'UserController@edit');
Route::get('/profile/posts/{id}', 'UserController@posts');
Route::get('/browse/{id}', 'MovieController@browse');

Route::get('/who_to_follow', 'UserController@SuggestUsers');
Route::get('get_notifications', 'FriendController@index');

Auth::routes();
# THIS ROUTE HANDLES AJAX FOR INSTANCE OF USERS, TWEETS
#RETURNING JSON FORMATED TWEETS TO JS, 
Route::resource('/tweet', 'PostController');
Route::resource('/list', 'ListController');
Route::resource('/friend', 'FriendController');
Route::post('/delete_friend', 'FriendController@destroy');

Route::get('/search',['uses' => 'MovieController@Search','as' => 'search']);
//Route::get('/test', 'ListController@store');


