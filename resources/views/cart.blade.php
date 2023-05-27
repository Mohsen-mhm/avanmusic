@extends('layouts.app')

@section('content')

    <div class="container px-3 my-5 clearfix" dir="rtl">
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
                            @if(isset($cart['song']))
                                @php
                                    $song = $cart['song'];
                                @endphp
                                <tr>
                                    <th scope="row" class="border-0">
                                        <div class="p-2">
                                            <div class="ml-3 d-inline-block align-middle">
                                                <h6 class="mb-0">{{ $song->name }}</h6>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="border-0 align-middle  text-center">
                                        <strong>{{ $song->price }} تومان</strong></td>
                                    <td class="border-0 align-middle">
                                        <form action="{{ route('cart.destroy', $cart['id']) }}" method="post"
                                              id="delete-song-{{ $song->id }}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        <h4 class="text-center"><a href="javascript:void(0)"
                                                                   onclick="event.preventDefault(); document.getElementById('delete-song-{{ $song->id }}').submit()"
                                                                   class="text-danger mt-2"><i
                                                    class="bi bi-trash3-fill mt-2"></i></a></h4>
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
                                    return $cart['song']->price;
                                });
                            @endphp
                            <span>قیمت نهایی : &nbsp; <b>{{ $totalPrice }} تومان</b></span>

                            <form action="{{ route('cart.payment') }}" method="POST" id="cart-payment">@csrf</form>
                            <button onclick="document.querySelector('#cart-payment').submit()"
                                    class="btn btn-outline-warning">پرداخت سبد خرید
                            </button>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
          integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endsection
