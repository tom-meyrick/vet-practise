<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Owner;
use App\Animal;

class Animals extends Controller
{
    public function index()
    {
       return view("/animals", ["animals" => Animal::all()]);
    }
}
