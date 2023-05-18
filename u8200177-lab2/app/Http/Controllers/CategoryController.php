<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function categories(): View
    {
        return view('categories.categories', [
            'categories' => Category::paginate(15),
        ]);
    }
    public function filterByPrice(string $symbol_code, Request $request) : View
    {
        $result = Category::query()->where('symbol_code', '=', $symbol_code)
            ->where('activity', '=', true)->firstOrFail()->products;


        $min_price = $request->query('min_price');

        if ($min_price != NULL) {
            $filtered_objects = array();

            foreach($result as $temp_obj)
                if ($temp_obj->price > $min_price)
                    array_push($filtered_objects, $temp_obj);
            
            $result = $filtered_objects;
        }
        

        return view('products.all_products', [
            'products' => $result,
        ]);
    }

    public function category_info(string $category_name): View
    {

        $category = Category::query()->where('category_name', '=', $category_name)->firstOrFail();
        //$products = $category->category_id;
        return view('categories.category_info', [
            'category' => $category,
        ]);
    }
}
