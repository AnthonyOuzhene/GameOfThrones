<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/



$router->get('/', [
    'as' => 'homepage',
    'uses' => 'AppController@homepage'
]);

$router->get('character/{id}', [
    'as' => 'character-page',
    'uses' => 'AppController@characterPage'
]);

$router->get('houses', [
    'as' => 'houses',
    'uses' => 'AppController@houses'
]);


$router->get('house/{id}', [
    'as' => 'house',
    'uses' => 'AppController@house'
]);