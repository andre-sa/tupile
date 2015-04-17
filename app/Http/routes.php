<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Server;

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/servers', function(){

    $s = new Server();


    $server = Server::findOrFail(3);
//    $server->name = "Homestead";
//    $server->save();
    return $server;

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);