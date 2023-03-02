<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    public function index()
    {
        $title = "coupons";
        $coupons = Coupon::all();
        return view('admin.coupon.addcoupon',compact('title','coupons'));
    }

    public function store(Request $request)
    {
        $tomorrow = Carbon::now()->addDay()->format('Y-m-d');

        $attrubets = $request->validate([
            'code'=>'required|max:20',
            'discount_percentage'=>'required|numeric',
            'expiration_date' => 'required|date|after_or_equal:'.$tomorrow,
        ]);

        Coupon::create($attrubets);
        
        return redirect()->back();
    }

    public function distroy(Coupon $id)
    {
        $id->delete();

        return redirect()->back();
    }

    public function applycoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            Session::forget('coupon');
            return redirect()
                ->back()
                ->withErrors(['Coupon code is invalid.']);
        }
        if ($coupon->expiration_date < Carbon::now()) {
            Session::forget('coupon');
            return redirect()
            ->back()
            ->withErrors(['Coupon code has expired.']);
        }
        
        Session::put('coupon', [
            'code' => $coupon->code,
            'discount_percentage' => $coupon->discount_percentage,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Coupon applied successfully.');
    }
}
