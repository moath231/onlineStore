<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class usersController extends Controller
{
    public function index()
    {
        $title = 'register';
        $country = DB::table('lc_countries_translations')
            ->where('locale', 'en')
            ->get();
        return view('auth.signUp', compact('title', 'country'));
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'email' => 'required|email',
            'gender' => ['required',Rule::in(['male','female'])],
            'address' => 'required',
            'city' => ['required','regex:/^\b\w+\b$/'],
            'country' => ['required'],
            'password' => 'required|confirmed',
        ]);

        $attributes['password'] = Hash::make($attributes['password']);

        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/');
    }

    public function login(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/');
        } else {
            // Authentication failed...
            return back()->withErrors(['email' => 'The email or password is incorrect.']);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
