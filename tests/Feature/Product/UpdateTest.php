<?php

namespace Tests\Feature\Product;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class UpdateTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_should_be_able_update_product()
    {
        $product = Product::factory()->createOne();

        $this->putJson(route('product.update', $product), [
            'name' => 'New Product Name',
            'description' => 'New Product Description',
            'tension' => '330v',
            'brand_id' => $product->brand_id,
        ])->assertRedirect(route('product.show', $product));

        $product->refresh();

        $this->assertEquals('New Product Name', $product->name);
        $this->assertEquals('New Product Description', $product->description);
        $this->assertEquals('330v', $product->tension);
    }

    public function test_must_validate_the_name_field()
    {
        $product = Product::factory()->createOne();

        $this->putJson(route('product.update', $product), [
            'name' => 'v',
            'description' => 'New Product Description',
            'tension' => '330v',
            'brand_id' => $product->brand_id,
        ])->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY)
            ->assertJsonValidationErrors(['name']);
    }
}
