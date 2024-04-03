<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('api/hospital/{id}', ['as' => 'hospital', 'uses' => 'HospitalController@get']);
$router->put('api/hospital/{id}', ['as' => 'hospital', 'uses' => 'HospitalController@put']);
$router->get('api/hospitals', ['as' => 'hospitals', 'uses' => 'HospitalsController@get']);
$router->post('api/hospital', ['as' => 'hospital', 'uses' => 'HospitalController@post']);
$router->post('api/room', ['as' => 'room', 'uses' => 'RoomController@post']);
$router->put('api/room/{id}', ['as' => 'room', 'uses' => 'RoomController@put']);
$router->get('api/room/{id}', ['as' => 'room', 'uses' => 'RoomController@get']);
$router->get('api/rooms', ['as' => 'rooms', 'uses' => 'RoomsController@get']);
$router->post('api/roompatient', ['as' => 'roompatient', 'uses' => 'RoomPatientController@post']);
$router->patch('api/roompatient/{id}', ['as' => 'roompatient', 'uses' => 'RoomPatientController@patch']);