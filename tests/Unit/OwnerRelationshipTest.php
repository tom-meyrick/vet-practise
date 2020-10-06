<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

use App\Animal;
use App\Owner;


class OwnerRelationshipTest extends TestCase
{
    
    use RefreshDatabase, WithFaker; 

    public function testAnimals()
    {
        $owner = factory(Owner::class)->create();
        $animal = factory(Animal::class)->create();

        $this->assertTrue($owner->animals->contains($animal));
    }
}
