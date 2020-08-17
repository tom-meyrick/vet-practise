<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class Search extends Controller
{
    public function searchControl(Request $request)
    {
        $term = $request->input();
        $name = $term["search"];

        $collection = Owner::where('first_name','LIKE', $name)
        ->orWhere('last_name', 'LIKE', $name)
        ->get();

        foreach($collection as $owner) {
            return view("/owners/result", ["owner" => $owner]);
        }
    }
}
