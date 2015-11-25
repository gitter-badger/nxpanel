<?php
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@index');
    Route::get('/home', 'SiteController@index');
    Route::get('/github', 'SiteController@github');
    Route::get('/contribute', 'SiteController@contribute');
    Route::get('/about', 'SiteController@about');
    Route::get('/chat', 'ChatController@index');
});

Route::group(['namespace' => 'User', 'middleware' => 'auth', 'prefix' => 'user'], function () {
    Route::get('/', 'UserController@index');
    Route::get('/profile', 'ProfileController@index');
});
