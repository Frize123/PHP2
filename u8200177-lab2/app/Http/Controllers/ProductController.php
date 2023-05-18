<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function products():View
    {
        return view('products.all', [
            'products' => Product::paginate(15),
        ]);
    }
    public function productsSymbol(string $symbol_code):View
    {
        $product = Product::query()->where('symbol_code', '=', $symbol_code)->firstOrFail();

        return view('products.product_info', [
            'product' => $product,
        ]);
    }

}
