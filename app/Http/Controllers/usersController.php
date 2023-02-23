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

    public function indexlogin()
    {
        $title = 'login';
        return view('auth.login', compact('title'));
    }

    public function store(userRequest $request)
    {
        $user = new User;

        $user->first_name = $request['FirstName'];
        $user->last_name = $request['FirstName'];
        $user->email = $request['email'];
        $user->gender = $request['gender'];
        $user->address = $request['address'];
        $user->country = $request['country'];
        $user->city = $request['city'];
        $user->password = bcrypt($request['password']);

        $user->save();

        // auth()->login($user);
        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed ...
            $user = User::where(['email' => $request->email])->first();
            $request->session()->put('user', $user);
            return redirect('/');
        } else {
            // Authentication failed...
            return back()
                ->withErrors(['email' => 'The email or password is incorrect.'])
                ->withInput();
        }
    }

    public function logout()
    {
        auth()->logout();
        session()->forget('user');
        return redirect('/');
    }
}
