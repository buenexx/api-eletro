<?php

namespace Tests\Feature\Product;

use App\Models\Brand;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class CreateTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_should_be_create_product()
    {
        $this->withoutExceptionHandling();

        $brand = Brand::factory()->createOne();

        $this->postJson(route('product.create'), [
            'name' => 'Generic Product',
            'description' => 'Generic Product description',
            'tension' => '220v',
            'brand_id' => $brand->id,
        ])->assertStatus(Response::HTTP_CREATED);

        $this->assertDatabaseHas('products', [
            'name' => 'Generic Product',
            'description' => 'Generic Product description',
            'tension' => '220v',
            'brand_id' => $brand->id,
        ]);
    }
}
