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
        $response->assertStatus(200);
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


}
