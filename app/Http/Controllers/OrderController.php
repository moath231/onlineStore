<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if (!count(json_decode($request->cartitem, true))) {
            return redirect()
                ->back()
                ->with('errorcart', 'Cart is empty');
        }
        $title = 'checkout';
        $data = $request->cartitem;
        $totalamount = $request->totalamount;
        $country = DB::table('lc_countries_translations')
            ->where('locale', 'en')
            ->get();
        return view('front.checkout', compact('title', 'country', 'data', 'totalamount'));
    }

    public function placeorder(Request $request)
    {
        $data = json_decode($request->cartitem);

        $order = new Order();
        $order->user_id = session()->get('user')->id;
        $order->total_amount = $request->totalPrice;
        $order->save();

        foreach ($data as $car) {
            OrderDetails::create([
                'order_id' => $order->id,
                'product_id' => $car->product->id,
                'quantity' => $car->quantity,
                'price' => $car->product->price,
            ]);
        }

        Shipping::create([
            'order_id' => $order->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'addressO' => $request->addressO,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'city' => $request->city,
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email,
            'note' => $request->notes,
        ]);

        $cart = Cart::where('user_id', Auth::id())->get();
        foreach ($cart as $car) {
            $car->delete();
        }

        session()->forget('coupon');

        return redirect()->route('payment');
    }


    public function payment()
    {
        $title = "";
        $order = Order::where('user_id',Auth::id())->get();
        $orderdetils = OrderDetails::where('order_id',$order[0]->id)->get();

        return view('front.payment',compact('title','order','orderdetils'));
    }

    
}
