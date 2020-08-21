<?php

namespace Tests\Feature;
use App\Adder;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function setUp() : void
    {
        $this->adder = new Adder();
    }

    public function testOnePlus0()
    {
        $this->assertSame(1, $this->adder->add(1,0)); 
    }

    public function testOnePlusOne()
    {
    $this->assertSame(2, $this->adder->add(1, 1));
    }

    public function testTenPlus5()
    {
    $this->assertSame(15, $this->adder->add(10, 5));
    }   
}