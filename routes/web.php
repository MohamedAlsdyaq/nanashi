<?php

   Route::get('/', 'HomeController@index');

    Route::get('/w', function(){
          return View('welcome');
     });


Route::get('/privacy', function(){
    return View('privacy');
});

Route::get('helpers/out', function(){
return View('helpers/out');
});
Route::get('/test', function(){
	return View('image_proccessing');
});
Route::get('/movie/{id}', 'MovieController@show');


Route::get('/recommend', 'RatedByOthers@name');

Route::get('/profile/{id}', 'UserController@profile');
Route::post('/profile/edit/{id}', 'UserController@upload');
Route::get('/profile/posts/{id}', 'UserController@posts');

Route::get('/browse/{id}', 'MovieController@browse');

/*
	@@ 
*/
Route::get('/movie/posts/{id}', 'MovieController@get_posts');

Route::get('image_proccessing', function($id){

		return View('image_proccessing ')->with($id);
});

Auth::routes();
# @@ THIS ROUTE HANDLES AJAX FOR INSTANCE OF USERS, TWEETS

# @@RETURNING JSON FORMATED TWEETS TO JS, 
Route::get('/who_to_follow', 'UserController@SuggestUsers');
Route::get('get_notifications', 'FriendController@index');
Route::post('/tweet', 'PostController@store');
Route::resource('/list', 'ListController');
Route::resource('/friend', 'FriendController');
Route::post('/delete_friend', 'FriendController@destroy');

Route::get('/search',['uses' => 'MovieController@Search','as' => 'search']);
Route::get('/recent','MovieController@recent');

//Route::get('/test', 'ListController@store');


