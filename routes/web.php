<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');
    Route::post('/tweets/{tweet}/like', 'TweetLikeController@store');
    Route::delete('/tweets/{tweet}/like', 'TweetLikeController@destroy');
    Route::delete('/tweets/{tweet}/delete', 'TweetController@destroy')->middleware('can:delete,tweet');
    Route::post('/profiles/{user:username}/follow', 'FollowController@store')->name('follow');
    Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfileController@update')->middleware('can:edit,user');
    Route::get('/explore', 'ExploreController');
});
Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile');
