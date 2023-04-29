@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.artists.index') }}" class="btn btn-sm btn-secondary w-auto">بازگشت</a>
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

            <form action="{{ route('admin.artists.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="name" class="text-muted">نام:</label>
                        <input id="name" type="text"
                               class="border-secondary bg-dark text-light form-control @error('name') is-invalid @enderror mt-2"
                               name="name" value="{{ old('name') }}" required autocomplete="name"
                               autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="bio" class="text-muted">بیوگرافی:</label>
                        <textarea name="bio" id="bio" cols="30" rows="5" class="border-secondary bg-dark text-light form-control @error('bio') is-invalid @enderror mt-2" required autocomplete="bio"
                                  autofocus>{{ old('bio') }}</textarea>
                        @error('bio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ایجاد ژانر</button>
            </form>
        </div>
    </div>
@endsection
