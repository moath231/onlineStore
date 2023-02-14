<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function index()
    {
        $title = 'home';
        $brands = Brand::all();
        $categorys = Category::all();
        $slider = DB::table('slider_Image')->first();
        return view('front.index', compact('title','brands','slider','categorys'));
    }
}
