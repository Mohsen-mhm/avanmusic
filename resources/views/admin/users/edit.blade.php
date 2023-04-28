@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-secondary w-auto">بازگشت</a>
        </div>
        <div class="row justify-content-center">
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <ul class="list-group p-2">
                            <li>{{ $error }}</li>
                        </ul>
                    </div>
                @endforeach
            @endif

            <form action="{{ route('admin.users.update', $user->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="name" class="text-muted">نام:</label>
                        <input id="name" type="text"
                               class="border-secondary bg-dark text-light form-control @error('name') is-invalid @enderror mt-2"
                               name="name" value="{{ old('name', $user->name) }}" required autocomplete="name"
                               autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="email" class="text-muted">ایمیل:</label>
                        <input id="email" type="email"
                               class="border-secondary bg-dark text-light form-control @error('email') is-invalid @enderror mt-2"
                               name="email" value="{{ old('email', $user->email) }}" required autocomplete="email"
                               autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="avatar" class="text-muted">آواتار:</label>
                        <input id="avatar" type="file" accept="image/*" data-browse="Select image"
                               class="border-secondary bg-dark text-light form-control @error('avatar') is-invalid @enderror mt-2"
                               name="avatar" autocomplete="avatar" value="{{ old('avatar', $user->avatar) }}"
                               autofocus>
                        @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="superuser" class="text-muted">ادمین:</label>
                        <select name="superuser" id="superuser" class="border-secondary bg-dark text-light form-select @error('avatar') is-invalid @enderror mt-2" required>
                            <option value="0">خیر</option>
                            <option value="1" {{ $user->superuser ? 'selected' : '' }}>بله</option>
                        </select>
                        @error('superuser')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="password" class="text-muted">رمزعبور:</label>
                        <input id="password" type="password"
                               class="border-secondary bg-dark text-light form-control @error('password') is-invalid @enderror mt-2"
                               name="password" required autocomplete="password"
                               autofocus>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ویرایش کاربر</button>
            </form>
        </div>
    </div>
@endsection
