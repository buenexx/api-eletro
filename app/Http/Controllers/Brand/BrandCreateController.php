<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BrandCreateController extends Controller
{
    public function __invoke()
    {
        Brand::query()->create([
            'name' => request('name'),
            'description' => request('description'),
        ]);

        return response()->json([
            'message' => 'Successfully created brand!'
        ], Response::HTTP_CREATED);
    }
}
