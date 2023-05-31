@extends('layouts.app')

@section('content')
    <h2 class="text-light text-center">اتصال به درگاه پرداخت</h2>
    <div class="row d-flex justify-content-center align-items-center text-light" dir="rtl">
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center mt-5">
            <p>قیمت نهایی: <b class="text-warning">{{ $order->price }}</b> تومان</p>
            <p>درگاه پرداخت:</p>
            <img src="/images/ssl-logo-1.png" alt="zarinpal logo" style="min-width: 200px; max-width: 300px">
        </div>

        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center mt-5">
            <p>عملیات:</p>
            <button class="btn btn-success mt-2 mb-2" onclick="document.querySelector('#payment-success').submit()">
                پرداخت
                موفق
            </button>
            <form action="{{ route('cart.payment.success', $order->id) }}" method="POST" id="payment-success"
                  class="d-none">@csrf</form>


            <button class="btn btn-danger mt-2 mb-2" onclick="document.querySelector('#payment-fail').submit()">پرداخت
                ناموفق
            </button>
            <form action="{{ route('cart.payment.fail', $order->id) }}" method="POST" id="payment-fail"
                  class="d-none">@csrf</form>


            <button class="btn btn-warning mt-2 mb-2" onclick="document.querySelector('#payment-cancel').submit()">لغو
                پرداخت
            </button>
            <form action="{{ route('cart.payment.cancel', $order->id) }}" method="POST" id="payment-cancel"
                  class="d-none">@csrf</form>
        </div>
    </div>
@endsection
