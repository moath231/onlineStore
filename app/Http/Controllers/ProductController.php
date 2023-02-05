<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $request->validate([
            // 'Name' => 'required',
            // 'Discrption' => 'required|min:45|max:70',
            // 'longDiscrption' => 'required|min:200',
            // 'Stock' => 'required',
            // 'Model' => 'required',
            // 'Color' => 'required',
            // 'Size' => 'required',
            // 'image1' => 'required|mimes:jpeg,png,jpg|max:2048',
            // 'image2' => 'mimes:jpeg,png,jpg|max:2048',
            // 'image3' => 'mimes:jpeg,png,jpg|max:2048',
            // 'image4' => 'mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|numeric',
            // 'category' => 'required',
            // 'brand' => 'required',
        ]);

        // if ($image1 = request()->file('image1')) {
        //     $image1 = request()->file('image1');
        //     $filename = $image1->getCTime() . $image1->getClientOriginalName();
        //     $path = 'storage/app/' . $image1->storeAs('images', $filename);
        // }
        // if ($image2 = request()->file('image2')) {
        //     $image2 = request()->file('image2');
        //     $filename = $image2->getCTime() . $image2->getClientOriginalName();
        //     $path = 'storage/app/' . $image2->storeAs('images', $filename);
        // }
        // if ($image3 = request()->file('image3')) {
        //     $image3 = request()->file('image3');
        //     $filename = $image3->getCTime() . $image3->getClientOriginalName();
        //     $path = 'storage/app/' . $image3->storeAs('images', $filename);
        // }
        // if ($image4 = request()->file('image4')) {
        //     $image4 = request()->file('image4');
        //     $filename = $image4->getCTime() . $image4->getClientOriginalName();
        //     $path = 'storage/app/' . $image4->storeAs('images', $filename);
        // }

        // $slug = Str::slug($request->Discrption, '-');

        return  "<h1 style='color:$request->Color'>smsm</h1>";
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
