<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        $title = 'admin brand';
        $brand = Brand::all();
        return view('admin.brand.index', compact('title','brand'));
    }

    public function create()
    {
        $title = 'add brand';
        return view('admin.brand.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:16',
            'logo' => 'required|image|mimes:png,jpg|max:2048',
        ]);

        $category = new Brand();

        $category->name = $request->name;
        $category->description = $request->description;

        if (request()->file('logo')) {
            $image1 = $request->file('logo');
            $filename = $image1->getCTime() . '.' . $image1->getClientOriginalExtension();
            $path = $image1->storeAs('public/images/brand', $filename);
            $path = str_replace('public', 'storage', $path);
            $category->logo = $path;
        }
        $category->save();

        return redirect()
            ->route('brand.index')
            ->with('success', 'Product created successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $title = 'edit brand';
        $brand = Brand::findOrFail($id);
        return view('admin.brand.edit', compact('title','brand'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:16',
            'logo' => 'image|mimes:png,jpg|max:2048',
        ]);

        $category = Brand::findOrFail($id);

        $category->name = $request->name;
        $category->description = $request->description;

        if (request()->file('logo')) {
            $image1 = $request->file('logo');
            $filename = $image1->getCTime() . '.' . $image1->getClientOriginalExtension();
            $path = $image1->storeAs('public/images/brand', $filename);
            $path = str_replace('public', 'storage', $path);
            $category->logo = $path;
        }
        $category->save();

        return redirect()
            ->route('brand.index')
            ->with('success', 'Product created successfully');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()
            ->route('brand.index')
            ->with('success', 'brand deleted successfully');
    }
}
