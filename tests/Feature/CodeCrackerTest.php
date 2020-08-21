<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\CodeCracker; 

class CodeCrackerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    private $codecracker;

    public function setUp() : void
    {
        $this->codecracker = new CodeCracker("! ) # ( . * % & > < @ a b c d e f g h i j k l m n o");
    }

    public function test1()
    {
        $this->assertSame("acatonthemat", $this->codecracker->stripSpaces("a cat on the mat")); 
    }

    public function test2()
    {
        $this->assertSame("a", $this->codecracker->decrypt("!")); 
    }

    public function test3()
    {
        $this->assertSame("hi", $this->codecracker->decrypt("&>")); 
    }

    public function test4()
    {
        $this->assertSame("hello", $this->codecracker->decrypt("&.aad")); 
    }

    public function testFull()
    {
        $this->assertSame("hello mum", $this->codecracker->decrypt("&.aad bjb"));
    }
}
