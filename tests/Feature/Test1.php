<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class test1 extends TestCase
{
   
    public function test_landing(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
