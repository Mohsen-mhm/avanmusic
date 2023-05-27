<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

            return view('payment.index', compact('order'));
        }

        return back();
    }

    public function paymentSuccess($orderId)
    {
        $order = Order::find($orderId);

        $order->update(['status' => Order::PAIL]);

        $payment = Payment::create([
            'order_id' => $order->id,
            'resnumber' => Str::random(),
            'status' => 1,
        ]);

        $cartItem = Cart::all();
        foreach ($cartItem as $item)
            Cart::delete($item['id']);

        return redirect()->route('payment.callback', ['paymentRes' => $payment->resnumber]);
    }

    public function paymentFail($orderId)
    {
        $order = Order::find($orderId);

        $order->update(['status' => Order::UN_PAIL]);

        $payment = Payment::create([
            'order_id' => $order->id,
            'resnumber' => Str::random(),
            'status' => 0,
        ]);

        return redirect()->route('payment.callback', ['paymentRes' => $payment->resnumber]);
    }

    public function paymentCancel($orderId)
    {
        $order = Order::find($orderId);

        $order->update(['status' => Order::CANCELED]);

        $payment = Payment::create([
            'order_id' => $order->id,
            'resnumber' => Str::random(),
            'status' => 0,
        ]);

        return redirect()->route('payment.callback', ['paymentRes' => $payment->resnumber]);
    }

    public function callback($paymentRes)
    {
        return view('payment.callback', compact('paymentRes'));
    }
}
