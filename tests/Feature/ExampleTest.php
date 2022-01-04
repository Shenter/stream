<?php

namespace Tests\Feature;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(302);
    }
    public function test_an_action_that_requires_authentication()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)
            ->get('dashboard');
        $response->assertStatus(200);
        $response->assertSee('Simple e-commerce');
    }

    public function test_product_can_be_created()
    {
        $user = User::factory()->create();
        Product::create(['title'=>'test product','price'=>109]);
        $response = $this->actingAs($user)
            ->get('product');
        $response->assertSee('test product');
    }

    public function test_product_can_be_added_to_cart()
    {
        $user = User::factory()->create();
        $product = Product::create(['title'=>'second test product','price'=>110]);
        Cart::create(['product_id'=>$product->id, 'user_id'=>$user->id]);
        $response = $this->actingAs($user)
            ->get('cart');
        $response->assertSee('second test product');
    }


}
