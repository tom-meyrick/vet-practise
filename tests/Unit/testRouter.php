<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class testRouter extends TestCase
{
   public function testRoutes()
   {
       $response = $this->get('/');
       $response->assertStatus(200);
   }
}
