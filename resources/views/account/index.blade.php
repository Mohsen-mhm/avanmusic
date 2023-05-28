@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <a href="{{ route('playlists.index') }}" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2"
               style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg width="50" height="50" class="text-info" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 17.5L18.5 20V15L22 17.5Z" fill="currentColor" stroke="currentColor"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 5L20 5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 11L20 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 17L14 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            @php
                                $user = \Illuminate\Support\Facades\Auth::user();
                            @endphp
                            <p class="card-text text-light text-decoration-none">پلی لیست ها: <b
                                    class="text-info">{{ $user->playlists->count() }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('orders.index') }}" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2"
               style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg width="50" height="50" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20.5" cy="41.5" r="3.5" fill="#ffc107"/>
                            <circle cx="37.5" cy="41.5" r="3.5" fill="#ffc107"/>
                            <path d="M5 6L14 12L19 34H39L44 17H25" stroke="#ffc107" stroke-width="1" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M25 26L32.2727 26L41 26" stroke="#ffc107" stroke-width="1" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            <p class="card-text text-light text-decoration-none">خرید ها: <b
                                    class="text-warning">{{ $user->orders->count() }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('setting.index') }}" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2"
               style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-settings text-danger">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            <p class="card-text text-light text-decoration-none">تنظیمات
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
