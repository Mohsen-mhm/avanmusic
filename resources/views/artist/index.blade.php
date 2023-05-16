@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <div class="row justify-content-center">
            <div class="w-100 d-flex justify-content-center align-items-center mb-3">
                <img src="/storage/artist-images/{{ $artist->image }}" alt="آواتار"
                     style="width: 200px; height: 200px; border-radius: 100%">
            </div>
            <div class="card bg-dark text-light p-0 border-secondary">
                <h4 class="card-header text-center border-secondary">مشخصات</h4>

                <div class="card-body">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <p class="text-warning">نام:</p>
                        <h6>{{ $artist->name }}</h6>
                    </div>
                    <hr class="text-light m-4"/>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <p class="text-warning">بیوگرافی:</p>
                        <small>{{ $artist->bio }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
