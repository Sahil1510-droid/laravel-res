<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Res;
use App\Models\Foods;
use App\Mail\DemoMail;
use App\Models\Orders;
use App\Models\Timer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function order($id)
    {
        //
        $data = Res::find($id);
        $food = Foods::find($id);
        return view('order', compact('food', 'data'));
    }

    public function send_mail(Request $request)
    {

        $data = new Orders();

        $data->name = $request->input('name');
        $data->place = $request->input('place');
        $data->food = $request->input('food');
        $data->code = $request->input('code');
        $data->price = $request->input('price');
        $data->address = $request->input('address');

        $data->save();

        $mailData = [
            'title' => 'Thank You For Placing the Order',
            'body' => 'Dear User,',
            'food' => 'Noodles, Rice, Maggie',

        ];

        Mail::to('sahilbansal152001@gmail.com')->send(new DemoMail($mailData));

        return back()->with('success', 'An order mail has been sent');
    }

    function show()
    {
        $data = Orders::paginate(5);
        return view('superadmin.all_orders', compact('data'));
    }

    function show2(DB $DB)
    {
        $data = DB::table('orders')
            ->where('name', 'Pizza Hut')
            ->paginate(3);
        return view('admin.view_all_orders', compact('data'));
    }

    public function delete3($id)
    {
        $data = Orders::find($id);

        $data->delete();
        return back();
    }

    function store_time(Request $request)
    {
        $time = new Timer();

        $time->order_id = $request->input('order_id');
        $time->timer = $request->input('timer');

        $time->save();
        return back();
    }
}
