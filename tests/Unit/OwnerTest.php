<?php

namespace Tests\Unit;

use App\Owner;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerTest extends TestCase
{   
    use RefreshDatabase;

    public function testName() 
    {
        Owner::create([
            "first_name" => "Jom",
            "last_name" => "Jeyrick",
            "email" => "jom-jeyrick@ret.com",
            "address_1" => "5",
            "address_2" => "New Jueen Sjreet", 
            "town" => "Chiswick", 
            "postcode" => "CH12 3RE",
            "telephone" => "0112989765"
        ]);

        $ownersFromDB = Owner::all()->first(); 
        $this->assertSame("Jom", $ownersFromDB->first_name); 
    }

    public function testEmail() 
    {
        Owner::create([
            "first_name" => "Jom",
            "last_name" => "Jeyrick",
            "email" => "jom-jeyrick@ret.com",
            "address_1" => "5",
            "address_2" => "New Jueen Sjreet", 
            "town" => "Chiswick", 
            "postcode" => "CH12 3RE",
            "telephone" => "0112989765"
        ]);
        
        $ownersFromDB = Owner::all()->first(); 
        $this->assertSame("jom-jeyrick@ret.com", $ownersFromDB->email); 
        $this->assertSame("bom-beyrick@bet.com", $ownersFromDB->email); 
    }

    public function testPhone() 
    {
        Owner::create([
            "first_name" => "Jom",
            "last_name" => "Jeyrick",
            "email" => "jom-jeyrick@ret.com",
            "address_1" => "5",
            "address_2" => "New Jueen Sjreet", 
            "town" => "Chiswick", 
            "postcode" => "CH12 3RE",
            "telephone" => "01129897659229480900948"
        ]);
        
        //get owner
        //get phone
        //check that phone no is 14 digits long
        $ownersFromDB = Owner::all()->first(); 
        $phone = $ownersFromDB->telephone;
        $this->assertFalse(strlen($phone) === 14); 
    }
    
}
