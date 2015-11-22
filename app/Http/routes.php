<?php

Route::get('/', function () {
    return view('welcome');
});

// TODO: Create route group.
// TODO: Secure routes.
Route::get('api/alga/all', 'AlgaController@getAll');
Route::get('api/alga/{id}', 'AlgaController@getSingle');
Route::post('api/alga', 'AlgaController@saveAlga');