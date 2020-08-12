<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class RouterTest extends TestCase
{
   use RefreshDatabase; 

   public function testRoot()
   {
       $response = $this->get('/');
       $response->assertStatus(200);
       $response->assertViewIs('welcome');
   }

   public function test404()
   {
      $response = $this->get('/about'); 
      $response->assertStatus(404);
   }

//    public function testWelcome()
//    {
//        $response = $this->get('/');
//        $response->assertViewIs('welcome');
//    }
}
