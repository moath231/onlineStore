<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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

    function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Discrption' => 'required|min:45|max:70|unique:products,shortDescription',
            'longDiscrption' => 'required|min:200',
            'Stock' => 'required',
            'Model' => 'required',
            'Color' => 'required',
            'Size' => 'required',
            'image1' => 'required|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'mimes:jpeg,png,jpg|max:2048',
            'image3' => 'mimes:jpeg,png,jpg|max:2048',
            'image4' => 'mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|numeric',
            'category' => 'required',
            'brand' => 'required',
        ]);
        $product = new Product();
        if (request()->file('image1')) {
            $image1 = $request->file('image1');
            $filename = $image1->getCTime() . '.' . $image1->getClientOriginalExtension();
            $path = $image1->storeAs('public/images', $filename);
            $path = str_replace('public', 'storage', $path);
            $product->mainImage = $path;
        }
        if (request()->file('image2')) {
            $image2 = request()->file('image2');
            $filename = $image2->getCTime() . '.' . $image2->getClientOriginalExtension();
            $path = $image2->storeAs('public/images', $filename);
            $path = str_replace('public', 'storage', $path);
            $product->image1 = $path;
        }
        if (request()->file('image3')) {
            $image3 = request()->file('image3');
            $filename = $image3->getCTime() . '.' . $image3->getClientOriginalExtension();
            $path = $image3->storeAs('public/images', $filename);
            $path = str_replace('public', 'storage', $path);
            $product->image2 = $path;
        }
        if (request()->file('image4')) {
            $image4 = request()->file('image4');
            $filename = $image4->getCTime() . '.' . $image4->getClientOriginalExtension();
            $path = $image4->storeAs('public/images', $filename);
            $path = str_replace('public', 'storage', $path);
            $product->image3 = $path;
        }

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

    function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $validatedData = $request->validate([
            'Name' => 'required',
            'Discrption' => ['required', 'min:45', 'max:70', Rule::unique('products', 'shortDescription')->ignore($product)],
            'longDiscrption' => 'required|min:200',
            'Stock' => 'required',
            'Model' => 'required',
            'Color' => 'required',
            'Size' => 'required',
            'image1' => 'mimes:jpeg,png,jpg|max:2048',
            'image2' => 'mimes:jpeg,png,jpg|max:2048',
            'image3' => 'mimes:jpeg,png,jpg|max:2048',
            'image4' => 'mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|numeric',
            'category' => 'required',
            'brand' => 'required',
        ]);

        if (request()->file('image1')) {
            $image1 = $request->file('image1');
            $filename = $image1->getCTime() . '.' . $image1->getClientOriginalExtension();
            $path = $image1->storeAs('public/images', $filename);
            $path = str_replace('public', 'storage', $path);
            $product->mainImage = $path;
        }
        if (request()->file('image2')) {
            $image2 = request()->file('image2');
            $filename = $image2->getCTime() . '.' . $image2->getClientOriginalExtension();
            $path = $image2->storeAs('public/images', $filename);
            $path = str_replace('public', 'storage', $path);
            $product->image1 = $path;
        }
        if (request()->file('image3')) {
            $image3 = request()->file('image3');
            $filename = $image3->getCTime() . '.' . $image3->getClientOriginalExtension();
            $path = $image3->storeAs('public/images', $filename);
            $path = str_replace('public', 'storage', $path);
            $product->image2 = $path;
        }
        if (request()->file('image4')) {
            $image4 = request()->file('image4');
            $filename = $image4->getCTime() . '.' . $image4->getClientOriginalExtension();
            $path = $image4->storeAs('public/images', $filename);
            $path = str_replace('public', 'storage', $path);
            $product->image3 = $path;
        }

        $product->name = $validatedData['Name'];
        $product->shortDescription = $validatedData['Discrption'];
        $product->longDescription = $validatedData['longDiscrption'];
        $product->stock = $validatedData['Stock'];
        $product->model = $validatedData['Model'];
        $product->color = $validatedData['Color'];
        $product->size = $validatedData['Size'];
        $product->price = $validatedData['price'];
        $product->category_id = $validatedData['category'];
        $product->brand_id = $validatedData['brand'];

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
