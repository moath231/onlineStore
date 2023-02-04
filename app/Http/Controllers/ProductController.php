<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'admin product';
        $product = Product::all();
        return view('admin.product.index', compact('title', 'product'));
    }

    public function create()
    {
        $title = 'admin product';
        return view('admin.product.create', compact('title'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        // 'Name'=>'required',
        // 'Discrption'=>'required',
        // 'longDiscrption'=>'required',
        // 'Stock'=>'required',
        // 'Model'=>'required',
        // 'Color'=>'required',
        // 'Size'=>'required',
        // 'image1'=>'required|mimes:jpeg,png,jpg|max:2048',
        // 'price'=>'required',
        // 'category'=>'required',
        // 'brand'=>'required',
        // ]);

        // $image1 = request()->file('image1');
        // $filename = $image1->getCTime().$image1->getClientOriginalName();
        // $path = 'storage/app/'.$image1->storeAs('images', $filename);

        // return 's';
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
