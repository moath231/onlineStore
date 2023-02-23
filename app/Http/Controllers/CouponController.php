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
        $title = "";
        return view('admin.coupon.addcoupon',compact('title'));
    }

    public function store(Request $request)
    {
    }

    public function distroy($id)
    {
    }

    public function applycoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            return redirect()
                ->back()
                ->withErrors(['Coupon code is invalid.']);
        }

        if ($coupon->expiration_date < Carbon::now()) {
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
