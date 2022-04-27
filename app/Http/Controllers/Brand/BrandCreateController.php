<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BrandCreateController extends Controller
{
    public function __invoke(): JsonResponse
    {
        request()->validate([
            'name' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:255',
        ]);

        Brand::query()->create([
            'name' => request('name'),
            'description' => request('description'),
        ]);

        return response()->json([
            'message' => 'Successfully created brand!'
        ], Response::HTTP_CREATED);
    }
}
