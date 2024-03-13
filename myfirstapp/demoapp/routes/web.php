<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'greet');

/*
Route::get('/', function () {                 
    return view('home');
});

is the same as 

Route::view('/', 'home' );

home can be changed to 'greet',  


*/
