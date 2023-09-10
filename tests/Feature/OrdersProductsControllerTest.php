<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class OrdersProductsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_confirm_order_with_products()
    {

        $user = User::factory()->create(['id_rol' => 3]);
        $this->actingAs($user);


        $order = Order::factory()->create([
            'id_user' => $user->id,
            'id_status' => 0,
        ]);


        $product1 = Product::factory()->create();
        $product2 = Product::factory()->create();
        $order->products()->attach([
            $product1->id => ['amount' => 2],
            $product2->id => ['amount' => 3],
        ]);


        $response = $this->get(route('cart.confirm'));


        $response->assertStatus(200);


        $response->assertSeeText($product1->name_product);
        $response->assertSeeText($product2->name_product);
    }



    public function testIndex()
    {

        $user = User::factory()->create(['id_rol' => 3]);
        $this->actingAs($user);


        $order = Order::factory()->create([
            'id_user' => $user->id,
            'id_status' => 0,
        ]);


        $product1 = Product::factory()->create();
        $product2 = Product::factory()->create();
        $order->products()->attach($product1, ['amount' => 2]);
        $order->products()->attach($product2, ['amount' => 3]);


        $response = $this->get(route('cart.index'));


        $response->assertStatus(200);


        $response->assertSeeText($product1->name);
        $response->assertSeeText($product2->name);
    }


    public function testUpdate()
    {

        $user = User::factory()->create(['id_rol' => 3]);
        $this->actingAs($user);


        $order = Order::factory()->create([
            'id_user' => $user->id,
            'id_status' => 0,
        ]);


        $product = Product::factory()->create();
        $order->products()->attach($product, ['amount' => 2]);


        $response = $this->post(route('cart.update'), [
            'order_id' => $order->id,
            'product_id' => $product->id,
            'increment' => 1,
        ]);


        $response->assertRedirect(route('cart.index'));


        $this->assertEquals(3, $order->products->first()->pivot->amount);
    }
}
