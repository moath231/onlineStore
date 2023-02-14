<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:16|unique:brands,description',
            'logo' => 'required|image|mimes:png,jpg,svg|max:2048|dimensions:max_width=560,max_height=400',
        ]);

        $brands = new Brand();

        $slug = Str::slug($request->description, '-');


        $brands->name = $request->name;
        $brands->slug = $slug;
        $brands->description = $request->description;

        if (request()->file('logo')) {
            $image1 = $request->file('logo');
            $filename = uniqid() . '.' . $image1->getClientOriginalExtension();
            $path = $image1->storeAs('public/images/brand', $filename);
            $path = str_replace('public', 'storage', $path);
            $brands->logo = $path;
        }
        $brands->save();

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
        $category = Brand::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'description' => ['required','min:16',Rule::unique('brands','description')->ignore($category)],
            'logo' => 'image|mimes:png,jpg,svg|max:2048|dimensions:max_width=560,max_height=400',
        ]);

        $category->name = $request->name;
        $category->description = $request->description;

        if (request()->file('logo')) {
            $image1 = $request->file('logo');
            $filename = uniqid() . '.' . $image1->getClientOriginalExtension();
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
