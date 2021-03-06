<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Owner;

class WelcomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testWelcomeRoute()
    {
        $response = $this->get('/owner');
        $response->assertStatus(200);
        $response->assertSeeText('Welcome welcome welcome welcome'); 
    }
}

