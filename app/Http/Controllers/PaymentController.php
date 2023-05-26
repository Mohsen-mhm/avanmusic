<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {
        $cartItem = Cart::all();
        if ($cartItem->count()) {
            $price = $cartItem->sum(function ($cart) {
                return $cart['song']->price;
            });

            $orderItems = $cartItem->map(function ($cart) {
                return $cart['song']->id;
            });

            $order = auth()->user()->orders()->create([
                'status' => 'unpaid',
                'price' => $price
            ]);

            $order->songs()->attach($orderItems);

            return view('payment.index');
        }

        return back();
    }

    public function paymentSuccess()
    {
        dd('success');
    }

    public function paymentFail()
    {
        dd('fail');
    }
}
