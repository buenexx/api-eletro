<?php

namespace Tests\Feature\Brand;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class CreateTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_should_be_create_brand()
    {
        $this->withoutExceptionHandling();

        $this->postJson(route('brand.create'), [
            'name' => 'Eletrolux',
            'description' => 'Eletrolux description'
        ])->assertStatus(Response::HTTP_CREATED);

        $this->assertDatabaseHas('brands', [
            'name' => 'Eletrolux',
            'description' => 'Eletrolux description',
        ]);
    }

}
