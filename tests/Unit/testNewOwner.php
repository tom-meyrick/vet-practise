<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class testNewOwner extends TestCase
{   
   $newOwner->new Owner; 
   $newOwner->first_name = "rico"; 
   $newOwner->last_name = "gur"; 
   $newOwner->email = "rgbrg@test.com"; 
   $newOwner->address_1 = "3"; 
   $newOwner->address_2 = "Tuesday Road"; 
   $newOwner->town = "Whitton"; 
   $newOwner->postcode = "W12 3ER"; 
   $newOwner->telephone = "0744444444"; 
   $newOwner->save(); 

    public function testName() 
    {
        $ownerFromDB = Owner::find(1);
        $this->assertSame("rico", $OwnerfromDB->first_name);
    }
}
