<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where([
            'user_id' => Auth::id(),
            'status' => Order::PAIL
        ])->paginate(10);
        return view('account.orders.index', compact('orders'));
    }

    public function show($id)
    {
        dd($id);
    }
}
