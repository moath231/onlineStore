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
        $cartItems = [];

        if (session()->has('user')) {
            $userId = session()->get('user')['id'];
            $cartItems = Cart::where('user_id', $userId)
                ->with('product')
                ->get()
                ->groupBy('product_id')
                ->map(function ($items) {
                    $product = $items->first()->product;
                    $quantity = $items->sum('quantity');
                    $sumPrice = $items->sum(function ($item) {
                        return $item->quantity * $item->product->price;
                    });
                    return [
                        'product' => $product,
                        'quantity' => $quantity,
                        'sumPrice' => $sumPrice,
                    ];
                });
        }
        $totalPrice = $cartItems->sum('sumPrice');

        return view('front.cart', compact('title', 'cartItems','totalPrice'));
    }

    public function addToCart(CartRequest $request)
    {
        if ($request->session()->has('user')) {
            $userId = $request->session()->get('user')['id'];
            $productId = $request->productId;
            $existingCartItem = Cart::where('user_id', $userId)
                ->where('product_id', $productId)
                ->first();

            if ($existingCartItem) {
                $existingCartItem->quantity += 1;
                $existingCartItem->save();
            } else {
                $cart = new Cart();
                $cart->user_id = $userId;
                $cart->product_id = $productId;
                $cart->quantity = 1;
                $cart->save();
            }
            return redirect()
                ->back()
                ->with('success', 'Added to cart successfully.');
        } else {
            return redirect()->route('login');
        }
    }

    public static function cartItem()
    {
        if (session()->has('user')) {
            $user = session()->get('user')['id'];
            return Cart::where('user_id', $user)->count();
        }
    }

    public function updateQuantity(Request $request)
{
    $userId = session()->get('user')['id'];
    $cartItem = Cart::where('user_id', $userId)
        ->where('product_id', $request->productId)
        ->firstOrFail();
    $cartItem->quantity = $request->quantity;
    $cartItem->save();

    return response()->json(['success' => true]);
}

    public function distroy($id)
    {
        $userId = session()->get('user')['id'];
        $cartItem = Cart::where('user_id', $userId)
            ->where('product_id', $id)
            ->firstOrFail();

        if ($cartItem->quantity > 1) {
            $cartItem->quantity -= 1;
            $cartItem->save();
        } else {
            $cartItem->delete();
        }

        return redirect()->back();
    }
}
