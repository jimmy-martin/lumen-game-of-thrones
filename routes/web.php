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

$router->get(
    '/',
    [
        'uses' => 'CharacterController@list',
        'as' => 'character-list'
    ]
);

$router->get(
  'characters/{id}',
    [
        'uses' => 'CharacterController@item',
        'as' => 'character-item'
    ]
);

$router->get(
    'houses/',
    [
        'uses' => 'HouseController@list',
        'as' => 'house-list'
    ]
);


