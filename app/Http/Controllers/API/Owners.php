<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\OwnerRequest;
use App\Http\Requests\API\OwnerStoreRequest;
use App\Http\Resources\API\OwnerResource;
use App\Http\Resources\API\OwnerListResource;
use Illuminate\Http\Request;
use App\Owner;

class Owners extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OwnerListResource::collection(Owner::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerStoreRequest $request)
    {
        $data = $request->all(); 
        $owner = Owner::create($data); 
        return new OwnerResource($owner); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        return new OwnerResource($owner); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OwnerRequest $request, Owner $owner)
    {
        $data = $request->all(); 
        $owner->fill($data)->save(); 
        return new OwnerResource($owner);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        $owner->delete(); 
        return response(null, 204); 
    }
}
