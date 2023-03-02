<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoryRequest;
use App\Models\Category;
use App\Models\photos;
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

    public function store(categoryRequest $request)
    {

        $category = new Category();

        $slug = Str::slug($request->description, '-');

        $category->name = $request->name;
        $category->slug = $slug;
        $category->description = $request->description;

        
        $category->save();

        photos::storeimage($request ,$category ,"logo","category" ,false);

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

    public function update(categoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->name = $request->name;
        $category->description = $request->description;

        photos::storeimage($request ,$category ,"logo","category" ,true);

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
