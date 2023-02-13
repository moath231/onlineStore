<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopPage extends Controller
{
    public function index()
    {
        $title = 'shoping';
        $category = Category::all();
        $brands = Brand::all();

        $searchValue = request('search');

        $Product = Product::where('is_delete', '0')
            ->filter(request(['search', 'category', 'brand']))
            ->paginate(9);

        return view('front.shop', compact('title', 'Product', 'category', 'searchValue', 'brands'));
    }
}
