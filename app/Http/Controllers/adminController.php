<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index()
    {
        $title = 'dashbord';
        return view('admin.index',compact('title'));
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
