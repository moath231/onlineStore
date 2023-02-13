<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $title = 'home';
        $brands = Brand::all();
        return view('front.index', compact('title','brands'));
    }
}
