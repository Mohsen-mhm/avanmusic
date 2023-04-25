@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <a href="" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2" style="max-width: 300px;">
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
                                    class="text-success">{{ \App\Models\User::count() }}</b></p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2" style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="bi bi-chat-left-dots text-primary" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            <p class="card-text text-light text-decoration-none">پیام ها: <b
                                    class="text-primary"></b></p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="card bg-dark text-light col-md-6 col-lg-4 mb-4 mx-2" style="max-width: 300px;">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="text-danger"
                             viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                    </div>
                    <div class="col-md-10" dir="rtl">
                        <div class="card-body">
                            <p class="card-text text-light text-decoration-none">بازدید کنندگان: <b
                                    class="text-danger"></b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
