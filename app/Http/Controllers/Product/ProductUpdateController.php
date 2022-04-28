<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductUpdateController extends Controller
{
    public function __invoke(Product $product): RedirectResponse
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'description' => ['required', 'string', 'max:255'],
            'tension' => ['required', 'string', 'max:10'],
            'brand_id' => ['required', 'integer'],
        ]);

        $product->fill([
            'name' => request('name'),
            'description' => request('description'),
            'tension' => request('tension'),
            'brand_id' => request('brand_id'),
        ]);

        $product->save();

        return redirect()->route('product.show', $product);
    }
}
