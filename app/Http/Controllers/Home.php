<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
       return view("welcome", ["message" => Home::greeting()]);
    }

    public static function greeting()
    {
       $now = date("H"); 
       $salutation; 

       if($now < 12 && $now > 02) {
           $salutation = "Good Morning"; 
       } 
       else if($now >= 12 && $now < 17) 
       {
           $salutation = "Good Afternoon"; 
       } 
       else if($now >= 17) 
       {
           $salutation = "Good evening";
       }
       return $salutation;
    }
}

