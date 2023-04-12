<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\SearchData;

use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{


    public function checkout()
    {

        return view('search.index');
    }



    public function place_order(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->name = $request->input('name');
        $order->email = $request->input('email');

        $order->payment_mode = $request->input('payment_mode');
        $order->payment_type = $request->input('payment_type');
        $order->payment_id = $request->input('payment_id');

    
        $order->total_price = '1';

        $order->save();

        if($request->input('payment_mode') == 'Paypal'){

            return response()->json(['status' => 'Order placed successfully']);

        }

        return redirect('/')->with('status', 'Order has been placed successfully');

    }

}
