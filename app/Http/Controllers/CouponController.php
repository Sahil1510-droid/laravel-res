<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        return view('admin.coupon.coupon');
    }

    public function store(Request $request)
    {
        $data = new Coupon();

        $data->code = $request->input('code');
        $data->name = $request->input('name');
        $data->type = $request->input('type');
        $data->discount_amount = $request->input('discount_amount');
        $data->min_amount = $request->input('min_amount');
        $data->status = $request->input('status');

        $data->save();
        return back();
    }

    public function coupon()
    {
        $data = Coupon::all();
        return view('admin.coupon.all_coupons', compact('data'));
    }

    public function apply_coupon_code(Request $request)
    {
        $price = 200;
        $result = DB::table('coupons')
            ->where(['code' => $request->coupon_code])
            ->get();
        // prx($result);
        if (isset($result[0])) {
            $discount_amount = $result[0]->discount_amount;
            $type = $result[0]->type;
            if ($result[0]->status == 1) {
                $status = "success";
                $msg = "Coupon Code Applied";
            } else {
                $status = "error";
                $msg = "Coupon Code deactivated";
            }
        } else {
            $status = "error";
            $msg = "Error";
        }

        if ($status == 'success') {
            if ($type == 'fixed') {
                $price = $price - $discount_amount;
            }
            if ($type == 'percent') {
                $newprice = ($discount_amount / 100) * $price;
                $price =  round($price - $newprice);
            }
        }
        return response()->json(['ststus' => $status, 'msg' => $msg, 'price'=>$price]);
    }
}
