<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::any('/home', 'HomeController@index')->name('home');;

Route::any('/addid', 'HomeController@addid');


Route::get('/receipt', function(){
  HomeController::receipt();
  return redirect()->route('home');
});

Route::post('/voegToe', array('uses'=> 'HomeController@voegToe' ));

Route::post('/voegIdToe', array('uses'=> 'HomeController@voegIdToe' ));


Route::get('add', function(){
  return view("add");
});

//all info from all beers
Route::get('/api/all', 'ApiController@show');

//get beer info with the beer ID
Route::get('/api/{id}', 'ApiController@index');

//parsed data for the coaster(s), with RFID data
//Route::get('/api/tag/{id}', 'ApiController@tag');

Route::get('/api/tag/{id}', 'ApiController@tag');

//all data , with RFID data
Route::get('/api/tag/full/{id}', 'ApiController@fullTag');

Route::get('/api/coaster/{id}', 'ApiController@coaster');

Route::get('/coaster/{id}/state/{state}', 'BeerController@updateState');

Route::get('/coaster/{id}/add/{tag_id}', 'BeerController@updateCount');
