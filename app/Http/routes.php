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

// Route::get('/', function () {
//     return view('page.home');
// });
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('/admin/list', 'AdminController@listAdmin');

    Route::get('/tempatmakan/list', 'FoodController@listMenu');
    Route::get('/tempatmakan/tambah/data', 'FoodController@tambahData');
});

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');
