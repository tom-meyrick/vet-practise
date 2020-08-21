<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Owners;
use App\Http\Controllers\API\Animals;
use App\Http\Controllers\API\Owners\Animals as OwnerAnimals;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Owner API routes


Route::group(["prefix" => "owners", "middleware" =>['auth:api']
], function () { 
    //Get the index
    Route::get("", [Owners::class, "index"]); 
    //Store a newly created Owner 
    Route::post("", [Owners::class, "store"]);
    //Secondary prefix refers to owner id
    Route::group(["prefix" => "{owner}"], function () {
        //Show the owner
        Route::get("", [Owners::class, "show"]); 
        // Update owner details
        Route::put("", [Owners::class, "update"]);
        //Delete owner
        Route::delete("", [Owners::class, "destroy"]); 
        //Get the owner's pets
        Route::get("animals", [OwnerAnimals::class, "index"]);
        //Create a new pet for the owner
        Route::post("animals", [OwnerAnimals::class, "store"]);  
    });
});

// Animal API routes

Route::group(["prefix" => "animals"], function () { 
    Route::get("", [Animals::class, "index"]); 
    Route::post("", [Animals::class, "store"]);
    Route::group(["prefix" => "{animal}"], function () {
        //Show the animal
        Route::get("", [Animals::class, "show"]); 
        // Update animal details
        Route::put("", [Animals::class, "update"]);
        //Delete animal
        Route::delete("", [Animals::class, "destroy"]); 
    });
});
