<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Treatment;

class TreatmentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function testFromString()
    {
        //Create a new instance of a treatment called "check"
        $result = Treatment::fromString("check"); 
        //Make sure "check" is an instance of "treatment"
        $this->assertInstanceOf(Treatment::class, $result); 
        //Make sure that the names are the same
        $this->assertSame("check", $result->name);

        //Create a new instance of a treatment called "check"
        $result = Treatment::fromString("one"); 
        //Make sure "check" is an instance of "treatment"
        $this->assertInstanceOf(Treatment::class, $result); 
        //Make sure that the names are the same
        $this->assertSame("one", $result->name);

        $result = Treatment::fromString("check"); 
        $treatmentFromDB = Treatment::all()->first(); 
        $this->assertInstanceOf(Treatment::class, $treatmentFromDB); 
        $this->assertSame("check", $treatmentFromDB->name);
 
        $result = Treatment::fromString("check"); 
        $allTreatments = Treatment::where("name", "check");
        $this->assertSame(1, $allTreatments->count());
    }

    public function testFromStrings() {
        // call the fromStrings method
    $result = Treatment::fromStrings(["check", "one"]); 
    // check it's a Collection
    $this->assertInstanceOf(Collection::class, $result); 
    // check the first item is "check"
    $this->assertSame("check", $result[0]->name);
    // check the second item is "one"
    $this->assertSame("one", $result[1]->name); }
    
}
