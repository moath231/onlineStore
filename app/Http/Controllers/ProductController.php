<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\photos;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Http\Requests\productRequest;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function index()
    {
        $title = 'admin product';
        $product = Product::all();
        return view('admin.product.index', compact('title', 'product'));
    }

    function create()
    {
        $title = 'admin product';
        return view('admin.product.create', compact('title'));
    }

    function store(productRequest $request)
    {
        $product = new Product();

        $slug = Str::slug($request->Discrption, '-');

        $product->name = $request->Name;
        $product->slug = $slug;
        $product->shortDescription = $request->Discrption;
        $product->longDescription = $request->longDiscrption;
        $product->stock = $request->Stock;
        $product->model = $request->Model;
        $product->color = $request->Color;
        $product->size = $request->Size;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;

        $product->save();

        Photos::storeimage($request, $product, 'image1',"product",false);
        Photos::storeimage($request, $product, 'image2',"product",false);
        Photos::storeimage($request, $product, 'image3',"product",false);
        Photos::storeimage($request, $product, 'image4',"product",false);

        return redirect()
            ->route('product.index')
            ->with('success', 'Product created successfully');
    }

    function show($id)
    {
        //
    }

    function edit($id)
    {
        $title = 'edit product';
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('title', 'product'));
    }

    function update(productRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        Photos::storeimage($request, $product, 'image1',"product",true);
        Photos::storeimage($request, $product, 'image2',"product",true);
        Photos::storeimage($request, $product, 'image3',"product",true);
        Photos::storeimage($request, $product, 'image4',"product",true);

        $product->name = $request['Name'];
        $product->shortDescription = $request['Discrption'];
        $product->longDescription = $request['longDiscrption'];
        $product->stock = $request['Stock'];
        $product->model = $request['Model'];
        $product->color = $request['Color'];
        $product->size = $request['Size'];
        $product->price = $request['price'];
        $product->category_id = $request['category'];
        $product->brand_id = $request['brand'];

        $product->save();

        return redirect()
            ->route('product.index')
            ->with('success', 'Product update successfully');
    }

    function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()
            ->route('product.index')
            ->with('success', 'Product deleted successfully');
    }

    function approve($id)
    {
        $product = Product::findOrFail($id);

        $product->is_delete = 0;
        $product->save();

        return redirect()->route('product.index');
    }

    function hide($id)
    {
        $product = Product::findOrFail($id);

        $product->is_delete = 1;
        $product->save();

        return redirect()->route('product.index');
    }


}
