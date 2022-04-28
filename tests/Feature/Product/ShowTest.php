<?php

namespace Tests\Feature\Product;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ShowTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_should_be_show_the_product()
    {
        $product = Product::factory()->createOne();

        $this->getJson(route('product.show', ['product' => $product->id]))
            ->assertStatus(Response::HTTP_OK)
            ->assertJson([
                'product' => [
                    'id' => $product->id,
                    'name' => $product->name,
                    'description' => $product->description
                ],
            ]);
    }

    public function test_it_should_return_404_if_product_not_found()
    {
        $this->getJson(route('product.show', ['product' => 1]))
            ->assertStatus(Response::HTTP_NOT_FOUND);
    }
}
