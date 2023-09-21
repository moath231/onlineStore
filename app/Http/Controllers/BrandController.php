<?php

namespace App\Http\Controllers;

use App\Http\Requests\brandRequest;
use App\Models\Brand;
use App\Models\photos;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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

    public function store(brandRequest $request)
    {
        $brands = new Brand();

        $slug = Str::slug($request->description, '-');

        $brands->name = $request->name;
        $brands->slug = $slug;
        $brands->description = $request->description;

        $brands->save();

        photos::storeimage($request,$brands,"logo","brand",false);

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

    public function update(brandRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $brand->name = $request->name;
        $brand->description = $request->description;
        photos::storeimage($request,$brand,"logo","brand",true);

        $brand->save();

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
