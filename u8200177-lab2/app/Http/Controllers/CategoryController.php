<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;  

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
        $result = Category::query()->where('symbol_code', '=', $symbol_code)->get();//->products;

        try
        {
            foreach($result as $temp){
                if($temp['activity']==false)
                    throw new ModelNotFoundException;
                }
        
            $min_price = $request->query('min_price');

            if ($min_price != NULL) {
                $filtered_objects = array();

                foreach($result->products as $temp_obj)
                    if ($temp_obj->price > $min_price)
                        array_push($filtered_objects, $temp_obj);

                $result = $filtered_objects;
            }   
        
        
            return view('products.all_products', [
                'products' => $result,
            ]);
        }
        catch(ModelNotFoundException $e)
        {
            abort(404);
        }
    }


}
