<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopPage extends Controller
{
    public function index()
    {
        $title = "shoping";
        $category = Category::all();
        $brands = Brand::all();

        $searchValue = request('search');
        $max = request('max');
        $min = request('min');

        $Product = Product::where('is_delete', '0')
            ->filter(request(['search', 'category', 'brand','min','max']))
            ->paginate(9);


        return view('front.shop', compact('title', 'Product','category','searchValue','brands','max','min'));
    }

    public function quickview($id){
        $productview = Product::findOrFail($id);
        return view('front.quickview', compact('productview'));
    }
}
