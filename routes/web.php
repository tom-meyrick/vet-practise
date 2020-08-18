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

Route::get('/search', "Search@searchControl");



Route::group(["prefix" => "owners"], function () {
    Route::get('/', "Owners@index");
    Route::get('edit/{owner}', "Owners@edit");
    Route::post('edit/{owner}', "Owners@editPost");
    Route::get('/addpet/{owner}', "Owners@addPet");
    Route::post('/addpet/{owner}', "Owners@createPetEntry"); 
    Route::get('create', "Owners@create");
    Route::post('create', "Owners@createPost");
    Route::get('{owner}', "Owners@show"); 
});
    

