<?php

resource('posts', 'PostController');

Route::group(['namespace' => 'Admin', 'as' => 'Admin::', 'prefix' => 'admin', 'middleware' => 'auth'], function() {
    get('/', function() {
        if(!Auth::user()->hasRole('user')) {
            return redirect()->route('Admin::dashboard');
        }

        return redirect()->route('Site::index');
    });

    get('/dashboard', [
        'as' => 'dashboard',
        'uses' => 'AdminController@index'
    ]);


});

Route::group(['namespace' => 'Site', 'as' => 'Site::'], function () {
    get('/', function() {
        return redirect()->route('Site::index');
    });

    get('/home', [
        'as' => 'index',
        'uses' => 'SiteController@index'
    ]);

    get('/github', [
        'as' => 'github',
        'uses' => 'SiteController@github'
    ]);

    get('/contribute', [
        'as' => 'contribute',
        'uses' => 'SiteController@contribute'
    ]);

    get('/about', [
        'as' => 'about',
        'uses' => 'SiteController@about'
    ]);

//    get('/chat', [
//        'as' => 'chat',
//        'uses' => 'ChatController@index'
//    ]);
});

Route::group(['namespace' => 'Support', 'as' => 'Support::', 'prefix' => 'support'], function() {
    get('/docs', [
        'as' => 'docs',
        'uses' => 'DocsController@index'
    ]);
});
//
//group(['namespace' => 'User', 'middleware' => 'auth', 'prefix' => 'user'], function () {
//    get('/', 'UserController@index');
//    get('{id}/profile', 'ProfileController@index');
//});

// Authentication routes...
Route::group(['namespace' => 'Auth', 'as' => 'Auth::', 'prefix' => 'auth'], function() {
    get('/login', [
        'as' => 'login',
        'uses' => 'AuthController@getLogin'
    ]);

    post('/login', [
        'as' => 'post_login',
        'uses' => 'AuthController@postLogin'
    ]);

    get('/logout', [
        'as' => 'logout',
        'uses' => 'AuthController@getLogout'
    ]);

    get('/register', [
        'as' => 'register',
        'uses' => 'AuthController@getRegister'
    ]);

    post('/register', [
        'as' => 'post_register',
        'uses' => 'AuthController@postRegister'
    ]);
});

// API ROUTES FOR VUE
Route::group(['prefix' => 'api'], function() {
    get('users-get', function() {
        return App\User::with('roles')->get();
    });

    get('roles-get', function() {
        return App\Role::all();
    });
});