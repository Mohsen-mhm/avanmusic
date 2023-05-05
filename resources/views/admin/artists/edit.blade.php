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

            <form action="{{ route('admin.artists.update', $artist->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="name" class="text-muted">نام:</label>
                        <input id="name" type="text"
                               class="border-secondary bg-dark text-light form-control @error('name') is-invalid @enderror mt-2"
                               name="name" value="{{ old('name', $artist->name) }}" required autocomplete="name"
                               autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="image" class="text-muted">عکس آرتیست:</label>
                        <input id="image" type="file" accept="image/*" data-browse="Select image"
                               class="border-secondary bg-dark text-light form-control @error('image') is-invalid @enderror mt-2"
                               name="image" autocomplete="image"
                               autofocus>
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="bio" class="text-muted">بیوگرافی:</label>
                        <textarea name="bio" id="bio" cols="30" rows="5"
                                  class="border-secondary bg-dark text-light form-control @error('bio') is-invalid @enderror mt-2"
                                  required autocomplete="bio"
                                  autofocus>{{ old('bio', $artist->bio) }}</textarea>
                        @error('bio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ویرایش آرتیست</button>
            </form>
        </div>
    </div>
@endsection
