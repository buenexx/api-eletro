<?php

namespace Tests\Feature\Product;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class DeleteTest extends TestCase
{
    use RefreshDatabase;

    public function test_should_be_able_to_delete_a_product()
    {
        $product = Product::factory()->createOne();

        $this->deleteJson(route('product.destroy', $product))
            ->assertStatus(Response::HTTP_OK)
            ->assertJson(['success' => 'Product deleted successfully.']);
    }
}
