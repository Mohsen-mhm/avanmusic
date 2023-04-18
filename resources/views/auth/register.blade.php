@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <div class="row justify-content-center">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <img class="mb-1" src="/images/phonograph-record-transprent-music-logo-png-hd.png" alt="logo"
                     width="120"
                     height="100">
                <h1 class="h3 mb-3 fw-normal text-light ">Avan Music</h1>
            </div>
            <div class="col-md-8">
                <div class="card bg-dark text-light opacity-75">
                    <h5 class="card-header text-center">ثبت نام</h5>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" class="text-white">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">نام</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control text-black @error('name') is-invalid @enderror"
                                           name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">ایمیل</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control text-black @error('email') is-invalid @enderror"
                                           name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">رمز عبور</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control text-black @error('password') is-invalid @enderror"
                                           name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">تکرار رمز عبور</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control text-black"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary w-25 opacity-100">
                                    عضویت
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .body {
            height: 100vh;
            background-image: url('/images/pexels-vishnu-r-nair-1105666.jpg');
            background-size: cover;
        }
    </style>
@endsection
