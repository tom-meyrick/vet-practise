<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class Owners extends Controller
{
    public function index()
    {
       return view("owners/owners", ["owners" => Owner::all()]);
    }

    public function show(Owner $owner)
    {
        return view("owners/display", ["owner" => $owner]);
    }

    public function create()
    {
        return view("owners/create");
    }

    public function createPost(Request $request)
    {
        $data = $request->all();
        
        $owner = Owner::create($data); 

        return redirect("/owners/{$owner->id}");
    }
}
