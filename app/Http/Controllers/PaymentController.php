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
                return $cart['product']->price * $cart['quantity'];
            });

            $orderItems = $cartItem->mapWithKeys(function ($cart) {
                return [$cart['product']->id => ['quantity' => $cart['quantity']]];
            });

            $order = auth()->user()->orders()->create([
                'status' => 'unpaid',
                'price' => $price
            ]);

            $order->products()->attach($orderItems);

            return view('payment.index');
        }

        return back();
    }
}
