<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\AnimalRequest;
use App\Http\Resources\API\AnimalResource;
use App\Http\Resources\API\AnimalListResource;
use Illuminate\Http\Request;
use App\Animal; 
use App\Treatment;

class Animals extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AnimalListResource::collection(Animal::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return new AnimalResource($animal);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $owner
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Request
     */
    public function store(AnimalRequest $request, Animal $animal)
    {
        $data = $request->only(["owner_id", "name", "type", "dob", "weight", "height", "biteyness"]); // use the new method
        $animal = Animal::create($data)->setTreatments($request->get("treatments"));
        return new AnimalResource($animal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(AnimalRequest $request, Animal $animal)
    {
        $data = $request->only(["name", "type", "dob", "weight", "height", "biteyness"]); 
        $animal->fill($data)->save(); 
        $animal->setTreatments($request->get("treatments")); 
        return new AnimalResource($animal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->delete(); 
        return response(null, 204);
    }
}
