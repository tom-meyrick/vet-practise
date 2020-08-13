<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Owner;

class OwnerDisplayTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testOwnerDisplayRoute()
    {
        $response = $this->get('/owner/1');
        $response->assertStatus(200);
        $response->assertSeeText('Cassandra'); 
    }
}
