<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Models\Song;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class CartController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function cart()
    {
        return view('cart');
    }


    public function addToCart(Song $song)
    {
        if (Cart::has($song)) {
            return back()->withErrors('این موزیک در سبد خرید شما وجود دارد');
        } else {
            Cart::put($song);
        }
        return redirect('/cart');
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function deleteFromCart($id)
    {
        Cart::delete($id);
        return back();
    }
}
