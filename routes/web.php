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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/first', function () {
//     return view('first');
// });

// Simple Form of calling a view
Route::view('first','first');

// Calling Url Parameter
Route::get('/second/{id}', function ($id) {
	echo $id;
    return view('second');
});

// Calling a controller
Route::get('home', 'App\Http\Controllers\User@index');

Route::get('home/{id}', 'App\Http\Controllers\User@index');

Route::get('about', 'App\Http\Controllers\User@about');

Route::get('survice', 'App\Http\Controllers\User@survice');


