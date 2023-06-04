@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.podcasts.index') }}" class="btn btn-sm btn-secondary w-auto">بازگشت</a>
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

            <form action="{{ route('admin.podcasts.update', $podcast->id) }}" enctype="multipart/form-data"
                  method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="name" class="text-muted">نام:</label>
                        <input id="name" type="text"
                               class="border-secondary bg-dark text-light form-control @error('name') is-invalid @enderror mt-2"
                               name="name" value="{{ old('name', $podcast->name) }}" required autocomplete="name"
                               autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="artist_id" class="text-muted">آرتیست:</label>
                        <select id="artist_id" name="artist_id"
                                class="border-secondary bg-dark text-light form-select @error('artist_id') is-invalid @enderror mt-2"
                                required autocomplete="artist_id"
                                autofocus>
                            <option value="{{ $podcast->artist->id }}">{{ $podcast->artist->name }}</option>
                            @foreach (\App\Models\Artist::all() as $artist)
                                <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                            @endforeach
                        </select>
                        @error('artist_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="podcast" class="text-muted">پادکست:</label>
                        <input id="podcast" type="file" accept="audio/*" data-browse="Select podcast"
                               class="border-secondary bg-dark text-light form-control @error('podcast') is-invalid @enderror mt-2"
                               name="podcast" autocomplete="podcast"
                               autofocus>
                        @error('podcast')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="cover" class="text-muted">کاور پادکست:</label>
                        <input id="cover" type="file" accept="image/*" data-browse="Select image"
                               class="border-secondary bg-dark text-light form-control @error('cover') is-invalid @enderror mt-2"
                               name="cover" autocomplete="cover"
                               autofocus>
                        @error('cover')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ویرایش پادکست</button>
            </form>
        </div>
    </div>
@endsection
