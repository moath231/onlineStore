<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {

        $title = 'checkout';
        $data = json_decode($request->cartitem, true);

        $totalamount = $request->totalamount;

        if (!count($data)) {
            return redirect()
                ->back()
                ->with('errorcart', 'Cart is empty');
        }

        $order = new Order();
        $order->user_id = session()->get('user')->id;
        $order->total_amount = $request->totalamount;
        $order->save();

        foreach ($data as $car) {
            OrderDetails::create([
                'order_id' => $order->id,
                'product_id' => $car['product']['id'],
                'quantity' => $car['quantity'],
                'price' => $car['product']['price'],
            ]);
        }

        $country = DB::table('lc_countries_translations')
            ->where('locale', 'en')
            ->get();

        return view('front.checkout', compact('title', 'country', 'data','totalamount'));
    }
}
