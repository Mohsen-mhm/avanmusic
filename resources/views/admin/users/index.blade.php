@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-success ms-2 me-2 w-auto">ایجاد کاربر</a>
            <a href="{{ route('admin.home') }}" class="btn btn-sm btn-secondary ms-2 me-2 w-auto">بازگشت</a>
        </div>
        <div class="row justify-content-center">
            <table class="table table-dark table-striped table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام</th>
                    <th scope="col">ایمیل</th>
                    <th scope="col">ادمین</th>
                    <th scope="col">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td><small>{{ $user->email }}</small></td>
                        <td>
                            @if($user->superuser)
                                <small class="text-success">بله</small>
                            @else
                                <small class="text-danger">خیر</small>
                            @endif
                        </td>
                        <td><a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary">ویرایش</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
    </div>
@endsection
