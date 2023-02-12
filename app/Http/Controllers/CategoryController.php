<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'category';
        $category = Category::all();
        return view('admin.category.index', compact('title', 'category'));
    }

    public function create()
    {
        $title = 'category';
        return view('admin.category.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:16|unique:categories,description',
            'logo' => 'required|image|mimes:png,jpg|max:2048',
        ]);

        $category = new Category();

        $slug = Str::slug($request->description, '-');

        $category->name = $request->name;
        $category->slug = $slug;
        $category->description = $request->description;
        if (request()->file('logo')) {
            $image1 = $request->file('logo');
            $filename = uniqid() . '.' . $image1->getClientOriginalExtension();
            $path = $image1->storeAs('public/images/category', $filename);
            $path = str_replace('public', 'storage', $path);
            $category->logo = $path;
        }
        $category->save();

        return redirect()
            ->route('category.index')
            ->with('success', 'Product created successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $title = 'edit category';
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('title', 'category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'description' => ['required','min:16',Rule::unique('categories','description')->ignore($category)],
            'logo' => 'image|mimes:png,jpg|max:2048',
        ]);

        $category->name = $request->name;
        $category->description = $request->description;
        if (request()->file('logo')) {
            $image1 = $request->file('logo');
            $filename = uniqid() . '.' . $image1->getClientOriginalExtension();
            $path = $image1->storeAs('public/images/category', $filename);
            $path = str_replace('public', 'storage', $path);
            $category->logo = $path;
        }
        $category->save();

        return redirect()
            ->route('category.index')
            ->with('success', 'Product update successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()
            ->route('category.index')
            ->with('success', 'Product deleted successfully');
        
    }
}
