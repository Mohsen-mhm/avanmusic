@extends('layouts.app')

@section('content')
<div class="container" dir="rtl">
    <!-- sliders -->
    <section class="container pt-0">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="./pages/music.html">
                        <img src="images/zedbazi.jpg" class="col  d-block img-fluid ax w-100 opacity-100" alt="...">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="./pages/music.html">
                        <img src="images/maxresdefault.jpg" class="col d-block img-fluid ax w-100" alt="...">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="./pages/music.html">
                        <img src="images/maxresdefault%20(1).jpg" class="col d-block img-fluid ax w-100" alt="...">
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    @include('layouts.songs')

    <!-- Footer -->
    <section dir="ltr">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

            <div class="col-12 col-md-4 text-center text-md-start">
                <div class="logo d-flex flex-column justify-content-center align-items-center">
                    <img src="images/png-music-logo-hd-png-removebg-preview.png" class="aks" alt="">
                    <p class="mb-0 pt-3 text-muted">© 2022 Company, Inc</p>
                </div>
            </div>

            <div class="col-12 col-md-4 text-center my-3 my-md-0">
                <ul class="nav justify-content-center">
                    <li class="mx-2 fs-3"><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li class="mx-2 fs-3"><a href="#"><i class="bi bi-soundwave"></i></a></li>
                    <li class="mx-2 fs-3"><a href="#"><i class="bi bi-spotify"></i></a></li>
                    <li class="mx-2 fs-3"><a href="#"><i class="bi bi-instagram"></i></a></li>
                </ul>
            </div>

            <div class="col-12 col-md-4 text-center text-md-end">
                <div class="row text-center">
                    <div class="col-6 col-md-6">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">لینک ها</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">آخرین آلبوم
                                    ها</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">آخرین آهنگ
                                    ها</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">آخرین ویدئو
                                    ها</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-6">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">دسترسی
                                    سریع</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">تماس با ما</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">درباره ما</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">تبلیغات</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
    </section>
</div>
@endsection
