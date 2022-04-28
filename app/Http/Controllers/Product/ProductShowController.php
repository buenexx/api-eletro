<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductShowController extends Controller
{
    public function __invoke(Product $product)
    {
        return response()->json(['product' => $product], Response::HTTP_OK);
    }
}
