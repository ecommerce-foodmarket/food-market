<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Database\Eloquent\Factories\Factory; // Importa la clase Factory
use App\Models\User;
use App\Models\Product;

class ProductTest extends TestCase
{


    public function test_admin_can_add_product(): void
    {

        $adminUser = User::factory()->create(['id_rol' => 1]);

        $this->actingAs($adminUser);


        $response = $this->post(route('admin.products.store'), [
            'name_product' => 'Nuevo Producto',
            'description' => 'Descripción del producto',
            'id_category' => 1,
            'price' => 10.99,

        ]);


        $response->assertStatus(302);


        $this->assertDatabaseHas('products', [
            'name_product' => 'Nuevo Producto',

        ]);
    }
}
