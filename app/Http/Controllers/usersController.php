<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
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

    public function store(userRequest $request)
    {
        $request['password'] = Hash::make($request['password']);
        $user = User::create([
            'FirstName' => $request['FirstName'],
            'LastName' => $request['LastName'],
            'email' => $request['email'],
            'gender' => $request['gender'],
            'address' => $request['address'],
            'country' => $request['country'],
            'city' => $request['city'],
            'password' => Hash::make($request['password']),
        ]);
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
