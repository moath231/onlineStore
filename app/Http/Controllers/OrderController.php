<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if (!count(json_decode($request->cartitem, true))) {
            return redirect()->back()->with('errorcart', 'Cart is empty');
        }
        $title = 'checkout';
        $data = $request->cartitem;
        $totalamount = $request->totalamount;
        $country = DB::table('lc_countries_translations')->where('locale', 'en')->get();
        return view('front.checkout', compact('title', 'country', 'data','totalamount'));
    }

    public function placeorder(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'address' => 'required|string|max:255',
        //     'addressO' => 'nullable|string|max:255',
        //     'state' => 'required|string|max:255',
        //     'zipcode' => 'required|string|size:5',
        //     'city' => 'required|string|max:255',
        //     'country' => 'required|string|max:255',
        //     'phone' => ['required', 'regex:/^[2-9]\d{2}-\d{3}-\d{4}$/'],
        //     'email' => 'required|email|max:255',
        //     'notes' => 'required|string|max:255',
        // ]);
        $data = json_decode($request->cartitem);
        // dd($data);


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
            'notes' => $request->notes,
        ]);
        

        return redirect('/');
    }
}
