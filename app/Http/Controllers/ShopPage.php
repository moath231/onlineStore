<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopPage extends Controller
{
    
    public function index(){
        $title = 'shoping';
        $Product = Product::where('is_delete','0')->paginate(9);
        return view('front.shop',compact('title','Product'));
    }
}
