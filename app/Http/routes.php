<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('pages.index');
    });

    // Authentication routes
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    // Registration routes
    Route::get('/register', 'Auth\AuthController@getRegister');
    Route::post('/register', 'Auth\AuthController@postRegister');

    // API routes
    // TODO: Secure API routes.
    Route::get('api/alga/index', 'AlgaController@index');
    Route::get('api/alga/show/{id}', 'AlgaController@show');
    Route::post('api/alga/store', 'AlgaController@store');
    Route::delete('api/alga/destroy/{id}', 'AlgaController@destroy');
});

// Protected routes
Route::group(['middleware' => ['web']], function () {
    Route::auth();

    Route::get('/dashboard', function() {
        return view('auth.dashboard');
    });

    Route::get('/details/{id}', 'AlgaController@showDetail');
});
