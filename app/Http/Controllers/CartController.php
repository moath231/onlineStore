<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $title = 'cart';
        if (session()->has('user')) {
            $user = session()->get('user')['id'];
            $cartItem = Cart::where('user_id', $user)->get();
        }

        // dd($cartItem);
        return view('front.cart', compact('title','cartItem'));
    }

    public function addToCart(CartRequest $request)
    {
        if ($request->session()->has('user')) {
            $cart = new Cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->productId;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect()->route('login');
        }

        return redirect()
            ->back()
            ->with('success', 'Add to cart success');
    }

    public static function cartItem()
    {
        if (session()->has('user')) {
            $user = session()->get('user')['id'];
            return Cart::where('user_id', $user)->count();
        }
    }
}
