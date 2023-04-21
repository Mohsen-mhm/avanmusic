@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <div class="row justify-content-center">
            <div class="w-100 d-flex justify-content-center align-items-center mb-3">
                <img src="/storage/avatars/{{ $user->avatar ? : 'default-avatar.png' }}" alt="آواتار"
                     style="width: 120px; height: 120px; border-radius: 100%">
            </div>

            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <ul class="list-group p-2">
                            <li>{{ $error }}</li>
                        </ul>
                    </div>
                @endforeach
            @endif

            <form action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data" method="POST">
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
                        <label for="avatar" class="text-muted">آواتار:</label>
                        <input id="avatar" type="file" accept="image/*" data-browse="Select image"
                               class="border-secondary bg-dark text-light form-control @error('avatar') is-invalid @enderror mt-2"
                               name="avatar" value="{{ old('avatar', $user->avatar) }}" autocomplete="avatar"
                               autofocus>
                        @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ویرایش</button>
            </form>

            <hr class="text-light my-5">
            <h5 class="text-light text-center mb-5">-تغییر رمز عبور-</h5>

            <form action="{{ route('profile.change.password') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="current_password" class="text-muted">رمز عبور فعلی:</label>
                        <input id="current_password" type="password"
                               class="border-secondary bg-dark text-light form-control @error('current_password') is-invalid @enderror mt-2"
                               name="current_password" required autocomplete="current_password"
                               autofocus>
                        @error('current_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="password" class="text-muted">رمز عبور جدید:</label>
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
                    <div class="col-6 mb-3">
                        <label for="password_confirmation" class="text-muted">تکرار رمز عبور جدید:</label>
                        <input id="password_confirmation" type="password"
                               class="border-secondary bg-dark text-light form-control @error('password_confirmation') is-invalid @enderror mt-2"
                               name="password_confirmation" required autocomplete="password_confirmation"
                               autofocus>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">ویرایش</button>
            </form>
        </div>
    </div>
@endsection
