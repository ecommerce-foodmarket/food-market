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
    use RefreshDatabase;
    
    public function test_admin_can_add_product():void
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

    public function test_admin_can_edit_product()
    {
        // Crea un usuario administrador
        $adminUser = User::factory()->create(['id_rol' => 1]);
        $this->actingAs($adminUser);
    
        // Crea un producto de ejemplo en la base de datos con id_category predeterminado 6
        $product = Product::factory()->create();
    
        // Realiza una solicitud GET para editar el producto
        $response = $this->get(route('admin.products.edit', $product));
    
        // Verifica que la respuesta sea exitosa (código 200)
        $response->assertStatus(200);
    
        // Realiza una solicitud PUT para actualizar el producto
        $response = $this->put(route('admin.products.update', $product), [
            'name_product' => 'Producto Modificado',
            'description' => 'Nueva descripción',
            'id_category' => 1, 
            'price' => 15.99, 
        ]);
    
        // Verifica que la respuesta sea exitosa (código 302 para redirección)
        $response->assertStatus(302);
    
        // Verifica que el producto se haya actualizado en la base de datos
        $this->assertDatabaseHas('products', [
            'name_product' => 'Producto Modificado',
            // Agrega otros campos que desees verificar
        ]);
    }
    

    

    // public function test_admin_can_delete_product()
    // {
        
    //     $adminUser = User::factory()->create(['id_rol' => 1]);
    //     $this->actingAs($adminUser);

        
    //     $product = Product::factory()->create();

        
    //     $response = $this->delete(route('products.destroy', $product));

        
    //     $response->assertStatus(302);

       
    //     $this->assertDatabaseMissing('products', [
    //         'id' => $product->id,
    //     ]);
    // }
}
