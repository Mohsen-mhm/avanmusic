@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <a href="{{ route('admin.users.index') }}" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2"
               style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="text-success">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            <p class="card-text text-light text-decoration-none">کاربران: <b
                                    class="text-success">{{ \App\Models\User::count() }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('admin.genres.index') }}" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2"
               style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="bi bi-sort-alpha-down text-primary" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                            <path
                                d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            <p class="card-text text-light text-decoration-none">ژانر ها: <b
                                    class="text-primary">{{ \App\Models\Genre::count() }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('admin.artists.index') }}" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2"
               style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="bi bi-music-player text-danger" viewBox="0 0 16 16">
                            <path
                                d="M4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3zm1 0v3h6V3H5zm3 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            <path d="M11 11a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            <path
                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            <p class="card-text text-light text-decoration-none">آرتیست ها: <b
                                    class="text-danger">{{ \App\Models\Artist::count() }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="row justify-content-center">
            <a href="{{ route('admin.albums.index') }}" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2"
               style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg width="50" height="50" class="text-warning" stroke-width="1.5" viewBox="0 0 24 24"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 17.4V2.6C2 2.26863 2.26863 2 2.6 2H17.4C17.7314 2 18 2.26863 18 2.6V17.4C18 17.7314 17.7314 18 17.4 18H2.6C2.26863 18 2 17.7314 2 17.4Z"
                                stroke="currentColor" stroke-width="1.5"/>
                            <path d="M8 22H21.4C21.7314 22 22 21.7314 22 21.4V8" stroke="currentColor"
                                  stroke-linecap="round"/>
                            <path
                                d="M11 12.5C11 13.3284 10.3284 14 9.5 14C8.67157 14 8 13.3284 8 12.5C8 11.6716 8.67157 11 9.5 11C10.3284 11 11 11.6716 11 12.5Z"
                                fill="currentColor"/>
                            <path
                                d="M11 12.5C11 13.3284 10.3284 14 9.5 14C8.67157 14 8 13.3284 8 12.5C8 11.6716 8.67157 11 9.5 11C10.3284 11 11 11.6716 11 12.5ZM11 12.5V6.6C11 6.26863 11.2686 6 11.6 6H13"
                                stroke="currentColor" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            <p class="card-text text-light text-decoration-none">آلبوم ها: <b
                                    class="text-warning">{{ \App\Models\Album::count() }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('admin.songs.index') }}" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2"
               style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="bi bi-music-note-beamed text-light" viewBox="0 0 16 16">
                            <path
                                d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
                            <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            <p class="card-text text-light text-decoration-none">موزیک ها: <b
                                    class="text-light">{{ \App\Models\Song::count() }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('admin.playlists.index') }}" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2"
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
                            <p class="card-text text-light text-decoration-none">پلی لیست ها: <b
                                    class="text-info">{{ \App\Models\Playlist::count() }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="row justify-content-center">
            <a href="{{ route('admin.orders.index') }}" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2"
               style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg width="50" height="50" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20.5" cy="41.5" r="3.5" fill="#0d6efd"/>
                            <circle cx="37.5" cy="41.5" r="3.5" fill="#0d6efd"/>
                            <path d="M5 6L14 12L19 34H39L44 17H25" stroke="#0d6efd" stroke-width="1"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M25 26L32.2727 26L41 26" stroke="#0d6efd" stroke-width="1" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            <p class="card-text text-light text-decoration-none">سفارشات: <b
                                    class="text-primary">{{ \App\Models\Order::count() }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('admin.podcasts.index') }}" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2"
               style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg width="50" height="50" class="text-danger" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.6361 20.364C4.00738 18.7353 3 16.4853 3 14C3 9.02944 7.02944 5 12 5C16.9706 5 21 9.02944 21 14C21 16.4853 19.9926 18.7353 18.364 20.3639L19.7782 21.7782C21.7688 19.7875 23 17.0376 23 14C23 7.92487 18.0751 3 12 3C5.92487 3 1 7.92487 1 14C1 17.0376 2.23124 19.7876 4.22189 21.7782L5.6361 20.364Z"
                                fill="currentColor"/>
                            <path
                                d="M16.9498 18.9497C18.2165 17.683 19 15.933 19 14C19 10.134 15.866 7 12 7C8.13401 7 5 10.134 5 14C5 15.933 5.78353 17.6831 7.05031 18.9498L8.46453 17.5356C7.55967 16.6308 7 15.3807 7 14C7 11.2386 9.23858 9 12 9C14.7614 9 17 11.2386 17 14C17 15.3807 16.4404 16.6307 15.5356 17.5355L16.9498 18.9497Z"
                                fill="currentColor"/>
                            <path
                                d="M14.1213 16.1213C14.6642 15.5784 15 14.8284 15 14C15 12.3431 13.6569 11 12 11C10.3431 11 9 12.3431 9 14C9 14.8285 9.33581 15.5785 9.87874 16.1214L11.293 14.7072C11.112 14.5262 11 14.2762 11 14C11 13.4477 11.4477 13 12 13C12.5523 13 13 13.4477 13 14C13 14.2761 12.8881 14.5261 12.7071 14.7071L14.1213 16.1213Z"
                                fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            <p class="card-text text-light text-decoration-none">پادکست ها: <b
                                    class="text-danger">{{ \App\Models\Podcast::count() }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
