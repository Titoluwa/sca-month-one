<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('z_welcome');
// });

Route::get('/', 'HomeController@welcome');
Route::get('/index', 'HomeController@index'); //READ
Route::post('/add_reservation', 'ReservationController@store'); //CREATE
Route::get('/edit_reservation/{id}', 'ReservationController@edit');

Route::put('/update_reservation', 'ReservationController@update');  //UPDATE
Route::delete('/delete_reservation/{id}', 'ReservationController@destroy'); //DELETE

// and push
