<?php

namespace App\Http\Controllers;
use App\Http\Requests\OwnerRequest;
use App\Http\Requests\PetRequest;
use Illuminate\Http\Request;
use App\Owner;
use App\Animal;

class Owners extends Controller
{
    //returns all owners in db
    public function index()
    {
       return view("owners/owners", ["owners" => Owner::all()]);
    }
    
    public function show(Owner $owner)
    {
        return view("owners/display", ["owner" => $owner]);
    }

    // Returns the entry form view
    public function create()
    {
        return view("owners/create");
    }

    // Passes new form data into the database
    public function createPost(OwnerRequest $request)
    {
        $data = $request->all();
        
        $owner = Owner::create($data); 

        return redirect("/owners/{$owner->id}");
    }

    // Returns the view for form to edit the database
    public function edit(Owner $owner)
    {
        return view("owners/edit", ["owner" => $owner]);
    }

    // Makes an edit to an existing owner in the db
    public function editPost(Owner $owner, OwnerRequest $request)
    {           
        $owner->fill($request->input())->save(); 

        return redirect("/owners/{$owner->id}");
    }
    // Returns the pet form view
    public function addPet()
    {
        return view("pets/create");
    }
    // Ties a pet entry to an owner and adds to db
    public function createPetEntry(PetRequest $request, Owner $owner) 
    {
      $animal = new Animal($request->all());
      $owner->animals()->save($animal);
      return redirect("/owners/{$owner->id}"); 
    }
}
