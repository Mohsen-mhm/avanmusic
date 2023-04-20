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
                        <ul class="list-group">
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
        </div>
    </div>
@endsection
