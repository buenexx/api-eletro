<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductDeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        $product->delete();

        //return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
        return request()->json(Response::HTTP_OK, ['success' => 'Product deleted successfully.']);
    }
}
