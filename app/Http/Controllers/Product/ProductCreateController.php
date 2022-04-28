<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductCreateController extends Controller
{
    public function __invoke()
    {
        Product::query()->create([
            'name' => request('name'),
            'description' => request('description'),
            'tension' => request('tension'),
            'brand_id' => request('brand_id')
        ]);

        return response()->json([
            'message' => 'Successfully created product!'
        ], Response::HTTP_CREATED);
    }
}
