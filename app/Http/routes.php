<?php

// TODO: Create IndexController
$app->get('/', function () {
    return view('pages.index');
});

// TODO: Create route group.
$app->get('/alga/all', 'AlgaController@getAll');
$app->get('/alga/{id}', 'AlgaController@getSingle');
$app->post('/alga', 'AlgaController@saveAlga');