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

   public function testOwners()
   {
      $response = $this->get('/owners'); 
      $response->assertStatus(200);
      $response->assertViewIs('owners.owners');
   }

   public function testOwnerDisplay()
   {
      $response = $this->get('/owners/1'); 
      $response->assertStatus(200);
      $response->assertViewIs('display');
   }

   public function testOwners404()
   {
      $response = $this->get('/owners/99999'); 
      $response->assertStatus(404);
   }
}
