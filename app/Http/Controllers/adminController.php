<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $title = 'dashbord';
        $ProductCount = Product::count('id');
        $categoryCount = Category::count('id');
        $UserCount = User::count('id');
        $orderCount = Order::count('id');
        return view('admin.index', compact('title', 'ProductCount', 'categoryCount', 'UserCount', 'orderCount'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
