<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeAdmin extends Controller
{
    public function index()
    {
        $title = 'home';
        $slider = DB::table('slider_Image')->first();
        return view('admin.home.index', compact('title', 'slider'));
    }

    public function storeimage(Request $request)
    {
        $validatedData = $request->validate([
            'image1' => 'required|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1900,min_height=720',
            'image2' => 'required|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1900,min_height=720',
            'image3' => 'required|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1900,min_height=720',
        ]);

        if (request()->file('image1')) {
            $image1 = $request->file('image1');
            $filename = uniqid() . '.' . $image1->getClientOriginalExtension();
            $path1 = $image1->storeAs('public/images/slider', $filename);
            $path1 = str_replace('public', 'storage', $path1);
        }
        if (request()->file('image2')) {
            $image2 = $request->file('image2');
            $filename = uniqid() . '.' . $image2->getClientOriginalExtension();
            $path2 = $image2->storeAs('public/images/slider', $filename);
            $path2 = str_replace('public', 'storage', $path2);
        }
        if (request()->file('image3')) {
            $image3 = $request->file('image3');
            $filename = uniqid() . '.' . $image3->getClientOriginalExtension();
            $path3 = $image3->storeAs('public/images/slider', $filename);
            $path3 = str_replace('public', 'storage', $path3);
        }

        DB::table('slider_Image')->insert([
            'image1' => $path1,
            'image2' => $path2,
            'image3' => $path3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->back()
            ->with('success', 'Image uploaded successfully!');
    }

    public function updateimage(Request $request, $id)
    {
        $request->validate([
            'image01' => 'mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1900,min_height=720',
            'image02' => 'mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1900,min_height=720',
            'image03' => 'mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1900,min_height=720',
        ]);

        if (request()->file('image01')) {
            $image01 = $request->file('image01');
            $filename = uniqid() . '.' . $image01->getClientOriginalExtension();
            $path1 = $image01->storeAs('public/images/slider', $filename);
            $path1 = str_replace('public', 'storage', $path1);

            DB::table('slider_Image')
                ->where('id', $id)
                ->update([
                    'image1' => $path1,
                ]);
        }
        if (request()->file('image02')) {
            $image02 = $request->file('image02');
            $filename = uniqid() . '.' . $image02->getClientOriginalExtension();
            $path2 = $image02->storeAs('public/images/slider', $filename);
            $path2 = str_replace('public', 'storage', $path2);

            DB::table('slider_Image')
                ->where('id', $id)
                ->update([
                    'image1' => $path2,
                ]);
        }
        if (request()->file('image03')) {
            $image03 = $request->file('image03');
            $filename = uniqid() . '.' . $image03->getClientOriginalExtension();
            $path3 = $image03->storeAs('public/images/slider', $filename);
            $path3 = str_replace('public', 'storage', $path3);

            DB::table('slider_Image')
                ->where('id', $id)
                ->update([
                    'image1' => $path3,
                ]);
        }

        DB::table('slider_Image')
            ->where('id', $id)
            ->update([
                'updated_at' => now(),
            ]);

        return redirect()
            ->back()
            ->with('success', 'Image uploaded successfully!');
    }
}
