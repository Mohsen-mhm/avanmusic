@extends('layouts.master')

@section('content')

    <div class="container px-3 my-5 clearfix">
        <div class="row">
            <div class="col-lg-12 p-5 rounded shadow-sm mb-5 text-light" style="background-color: #131313;">

                <div class="table-responsive">
                    <table class="table text-light">
                        <thead>
                        @if(session()->get('cart') != null)
                            @if(!session()->get('cart')->isEmpty())
                                <tr>
                                    <th scope="col" class="border-0 bg-dark">
                                        <div class="p-2 px-3 text-uppercase">نام محصول</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-dark">
                                        <div class="py-2 text-uppercase text-center">قیمت واحد</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-dark">
                                        <div class="py-2 text-uppercase text-center">تعداد</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-dark">
                                        <div class="py-2 text-uppercase text-center">قیمت نهایی</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-dark">
                                        <div class="py-2 text-uppercase text-center">حذف از سبد خرید</div>
                                    </th>
                                </tr>
                            @else
                                <div class="alert alert-danger" role="alert">
                                    <b>سبد خرید شما خالی است.</b>
                                </div>
                            @endif
                        @else
                            <div class="alert alert-danger" role="alert">
                                <b>سبد خرید شما خالی است.</b>
                            </div>
                        @endif
                        </thead>

                        <tbody>
                        @foreach(\App\Helpers\Cart\Cart::all() as $cart)
                            @if(isset($cart['product']))
                                @php
                                    $product = $cart['product'];
                                @endphp
                                <tr>
                                    <th scope="row" class="border-0">
                                        <div class="p-2">
                                            <div class="ml-3 d-inline-block align-middle">
                                                <h5 class="mb-0">{{ $product->title }}</h5>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="border-0 align-middle text-center">
                                        <strong>{{ $product->price }} تومان</strong></td>
                                    <td class="border-0 align-middle text-center d-flex justify-content-center">
                                        <select onchange="changeQuantity(event,'{{ $cart['id'] }}')" name="quantity"
                                                id="quantity" class="form-select w-50 mt-1 bg-dark text-light">
                                            @foreach(range(1, $product->inventory) as $item)
                                                <option
                                                    value="{{ $item }}" {{ $cart['quantity'] == $item ? 'selected' : '' }}>{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="border-0 align-middle  text-center">
                                        <strong>{{ $product->price * $cart['quantity'] }} تومان</strong></td>
                                    <td class="border-0 align-middle">
                                        <form action="{{ route('cart.destroy', $cart['id']) }}" method="post"
                                              id="delete-product-{{ $product->id }}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        <h4 href="#" class="text-center"><a href="#"
                                                                            onclick="event.preventDefault(); document.getElementById('delete-product-{{ $product->id }}').submit()"
                                                                            class="text-danger mt-2"><i
                                                    class="fa fa-plus mt-2" style="transform: rotate(45deg)"></i></a></h4>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>

                @if(session()->get('cart') != null)
                    @if(!session()->get('cart')->isEmpty())
                        <hr>
                        <div class="d-flex justify-content-between">
                            @php
                                $totalPrice = \App\Helpers\Cart\Cart::all()->sum(function ($cart){
                                    return $cart['product']->price * $cart['quantity'];
                                });
                            @endphp
                            <span>قیمت نهایی : &nbsp; <b>{{ $totalPrice }} تومان</b></span>

                            <form action="{{ route('cart.payment') }}" method="POST" id="cart-payment">@csrf</form>
                            <button onclick="$('#cart-payment').submit()" class="btn btn-outline-warning">پرداخت سبد خرید
                            </button>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        function changeQuantity(event, id, cartName) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json'
                },
                type: 'patch',
                url: 'cart/quantity/change',
                data: JSON.stringify({
                    id: id,
                    quantity: event.target.value,
                    cart: cartName,
                }),
                success: function (res) {
                    location.reload();
                }
            });
        }
    </script>
@endsection
