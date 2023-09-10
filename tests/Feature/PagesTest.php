<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class PagesTest extends TestCase
{
    
    public function test_landing(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_dashboard(): void
{
    $user = User::factory()->create(['id_rol' => 3]);
    $this->actingAs($user);

    $response = $this->get('/user/dashboard');

    $response->assertStatus(200);
}

    public function test_admin_dashboard(): void
    
    {
        $user = User::factory()->create(['id_rol' => 1]);
        $this->actingAs($user);
        $response = $this->get('/admin/dashboard');

        $response->assertStatus(200);
    }
}
