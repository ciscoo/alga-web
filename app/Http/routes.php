<?php

$app->get('/', function () use ($app) {
    return $app->welcome();
});

// TODO: Create route group.
$app->get('/alga/all', 'AlgaController@getAll');
$app->get('/alga/{id}', 'AlgaController@getSingle');
$app->post('/alga', 'AlgaController@saveAlga');