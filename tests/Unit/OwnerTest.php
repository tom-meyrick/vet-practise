<?php

namespace Tests\Unit;

use App\Owner;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerTest extends TestCase
{   
    use RefreshDatabase;

    private $article;

    public function setUp() : void 
    {
        parent::setUp();
        // setup the article
        $this->owner = new Owner([ 
            "first_name" => "Jom",
            "last_name" => "Jeyrick",
            "email" => "jom-jeyrick@ret.com",
            "address_1" => "5",
            "address_2" => "New Jueen Sjreet", 
            "town" => "Chiswick", 
            "postcode" => "CH12 3RE",
            "telephone" => "0112989765"
        ]); 
    }

    public function testName() 
    {
        $this->assertSame("Jom", $this->owner->first_name); 
    }

    public function testEmail() 
    {
        $this->assertSame("jom-jeyrick@ret.com", $this->owner->email); 
        $this->assertDifferent("bom-beyrick@bet.com", $this->owner->email); 
    }    
}
