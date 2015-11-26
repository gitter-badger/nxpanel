<?php
Route::group(['namespace' => 'Site', 'as' => 'Site::'], function () {
    Route::get('/', function() {
        return redirect()->route('Site::index');
    });

    Route::get('/home', [
        'as' => 'index',
        'uses' => 'SiteController@index'
    ]);

    Route::get('/github', [
        'as' => 'github',
        'uses' => 'SiteController@github'
    ]);

    Route::get('/contribute', [
        'as' => 'contribute',
        'uses' => 'SiteController@contribute'
    ]);

    Route::get('/about', [
        'as' => 'about',
        'uses' => 'SiteController@about'
    ]);

    Route::get('/chat', [
        'as' => 'chat',
        'uses' => 'ChatController@index'
    ]);
});

Route::group(['namespace' => 'Support', 'as' => 'Support::', 'prefix' => 'support'], function() {
    Route::get('/docs', [
        'as' => 'docs',
        'uses' => 'DocsController@index'
    ]);
});

Route::group(['namespace' => 'User', 'middleware' => 'auth', 'prefix' => 'user'], function () {
    Route::get('/', 'UserController@index');
    Route::get('{id}/profile', 'ProfileController@index');
});
