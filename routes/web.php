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

Route::get('/', "Home@index");

Route::get('/owners', "Owners@index");

// Route::group(["prefix" => "owners"], function () {
//     Route::get('/owners/create', "Owners@create");
//     Route::post('create', "Owners@createPost");
//     Route::get('/owners/{owner}', "Owners@show"); 
// });
    

Route::get('/owners/create', "Owners@create");
Route::post('owners/create', "Owners@createPost");
Route::get('/owners/{owner}', "Owners@show");



