<?php

namespace Tests\Unit;

use Test\TestCase;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Animal;

class AnimalTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase; 

    public function test1()
    {
        $this->assertTrue(true);
    }
}
