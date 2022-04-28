<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductCreateController extends Controller
{
    public function __invoke(): JsonResponse
    {
        request()->validate([
            'name' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:255',
            'tension' => 'required|string|max:10',
            'brand_id' => 'required|integer',
        ]);

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
