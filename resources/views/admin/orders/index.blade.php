@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.home') }}" class="btn btn-sm btn-secondary ms-2 me-2 w-auto">بازگشت</a>
        </div>
        <div class="row justify-content-center">
            <table class="table table-dark table-striped table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">کاربر</th>
                    <th scope="col">قیمت</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->price }}</td>
                        <td>
                            @switch($order->status)
                                @case(\App\Models\Order::PAIL)
                                    <small class="text-success">پرداخت شده</small>
                                    @break
                                @case(\App\Models\Order::UN_PAIL)
                                    <small class="text-danger">پرداخت نشده</small>
                                    @break
                                @case(\App\Models\Order::CANCELED)
                                    <small class="text-warning">لغو شده</small>
                                    @break
                            @endswitch
                        </td>
                        <td>
                            <a href="{{ route('admin.orders.show', $order->id) }}"
                               class="btn btn-sm btn-primary">نمایش سفارشات</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center align-items-center" dir="ltr">
            {{ $orders->links() }}
        </div>
    </div>
@endsection
