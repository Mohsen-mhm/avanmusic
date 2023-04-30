@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.albums.index') }}" class="btn btn-sm btn-secondary w-auto">بازگشت</a>
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

            <form action="{{ route('admin.albums.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6 mb-3">
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
                    <div class="col-6 mb-3">
                        <label for="cover_image" class="text-muted">کاور:</label>
                        <input id="cover_image" type="file" accept="image/*" data-browse="Select image"
                               class="border-secondary bg-dark text-light form-control @error('cover_image') is-invalid @enderror mt-2"
                               name="cover_image" autocomplete="cover_image"
                               autofocus required>
                        @error('cover_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="artist_id" class="text-muted">آرتیست:</label>
                        <select id="artist_id" name="artist_id"
                                class="border-secondary bg-dark text-light form-select @error('artist_id') is-invalid @enderror mt-2"
                                required autocomplete="artist_id"
                                autofocus>
                            <option value="">یک آرتیست انتخاب کنید</option>
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
                    <div class="col-6 mb-3">
                        <label for="genre_id" class="text-muted">ژانر:</label>
                        <select id="genre_id" name="genre_id"
                                class="border-secondary bg-dark text-light form-select @error('genre_id') is-invalid @enderror mt-2"
                                required autocomplete="genre_id"
                                autofocus>
                            <option value="">یک ژانر انتخاب کنید</option>
                            @foreach (\App\Models\Genre::all() as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                            @endforeach
                        </select>
                        @error('genre_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="release_date" class="text-muted">تاریخ انتشار:</label>
                        <input id="release_date" type="text"
                               class="border-secondary bg-dark text-light form-control @error('release_date') is-invalid @enderror mt-2"
                               name="release_date" value="{{ old('release_date') }}" required
                               autocomplete="release_date"
                               autofocus>
                        @error('release_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ایجاد آلبوم</button>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/dark.css">
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#release_date", {
            theme: "dark",
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            time_24hr: true,
            timezone: "Asia/Tehran",
            defaultDate: new Date(),
        });
    </script>
@endsection
