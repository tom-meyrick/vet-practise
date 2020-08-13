<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Owner;

class ownerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testOwnerRoute()
    {
        $response = $this->get('/owner');
        $response->assertStatus(200);
        $response->assertSeeText('Our Happy Customers'); 
    }
}
