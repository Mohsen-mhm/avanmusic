<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-lg">
    <div class="container" dir="rtl">
        <a class="navbar-brand d-flex justify-content-center align-items-center" style="font-size: 16px"
           href="{{ route('home') }}">
            <img src="/images/phonograph-record-transprent-music-logo-png-hd.png" alt="logo" class="ms-2 me-2"
                 style="width: 60px;">
            {{ config('app.name', 'آوان موزیک') }}
        </a>

        <ul class="navbar-nav d-flex justify-content-center align-items-center" id="desktop-menu">
            <li class="nav-item">
                <a class="nav-link @if(in_array(\Illuminate\Support\Facades\Route::currentRouteName(), ['home'])) active @endif"
                   aria-current="page" href="{{ route('home') }}">صفحه اصلی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(in_array(\Illuminate\Support\Facades\Route::currentRouteName(), ['cart'])) active @endif"
                   href="{{ route('cart') }}">سبد خرید</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(in_array(\Illuminate\Support\Facades\Route::currentRouteName(), ['about'])) active @endif"
                   href="{{ route('about') }}">درباره ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(in_array(\Illuminate\Support\Facades\Route::currentRouteName(), ['contact'])) active @endif"
                   href="{{ route('contact') }}">تماس با ما</a>
            </li>
            @guest
                @if (Route::has('login'))
                    <li class="nav-item ms-1 me-1">
                        <a class="btn btn-sm btn-outline-warning" href="{{ route('login') }}">ورود</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item ms-1 me-1">
                        <a class="btn btn-sm btn-warning" href="{{ route('register') }}">عضویت</a>
                    </li>
                @endif
            @else
                <li class="nav-item ms-1 me-1">
                    <a class="btn btn-sm btn-warning" href="{{ route('account.home') }}">پنل کاربری</a>
                </li>
            @endguest
        </ul>

        <div class="btn-group" id="mobile-menu">
            @guest
                <img src="/storage/avatars/default-avatar.png" alt="آواتار"
                     style="width: 70px; border-radius: 100px" type="button"
                     class="btn dropdown-toggle" data-bs-toggle="dropdown"
                     aria-expanded="false">
            @else
                <img src="/storage/avatars/{{auth()->user()->avatar ? : 'default-avatar.png'}}" alt="آواتار"
                     style="width: 70px; border-radius: 100%" type="button" class="btn dropdown-toggle"
                     data-bs-toggle="dropdown" aria-expanded="false">
            @endguest
            <ul class="dropdown-menu me-3 border-secondary" style="background: #1a202c">
                @guest
                    <li>
                        <a class="dropdown-item text-light text-center mt-1 mb-1" href="{{ route('home') }}">صفحه
                            اصلی</a>
                    </li>

                    <li>
                        <a class="dropdown-item text-light text-center mt-1 mb-1"
                           href="{{ route('cart') }}">سبد خرید</a>
                    </li>

                    <li>
                        <hr class="dropdown-divider bg-secondary">
                    </li>

                    @if (Route::has('login'))
                        <li>
                            <a class="dropdown-item text-light text-center mt-1 mb-1"
                               href="{{ route('login') }}">ورود</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li>
                            <a class="dropdown-item text-light text-center mt-1 mb-1" href="{{ route('register') }}">عضویت</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a class="dropdown-item text-light text-center mt-1 mb-1" href="{{ route('home') }}">صفحه
                            اصلی</a>
                    </li>

                    <li>
                        <a class="dropdown-item text-light text-center mt-1 mb-1"
                           href="{{ route('account.home') }}">پنل کاربری</a>
                    </li>

                    <li>
                        <a class="dropdown-item text-light text-center mt-1 mb-1"
                           href="{{ route('cart') }}">سبد خرید</a>
                    </li>

                    <li>
                        <hr class="dropdown-divider bg-secondary">
                    </li>

                    <li><a class="dropdown-item text-light text-center mt-1 mb-1" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">خروج</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<style>
    #mobile-menu {
        display: none;
    }

    @media screen and (max-width: 768px) {
        #mobile-menu {
            display: block;
        }

        #desktop-menu {
            display: none !important;
        }
    }
</style>


<section class="container-fluid d-flex justify-content-center bg-secondary">

    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

        <div class="btn-group py-1" role="group">
            <button type="button" class="btn btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                آلبوم ها
            </button>
            <ul class="dropdown-menu border-secondary" style="background: #1a202c">
                @foreach(\App\Models\Album::latest()->limit(5)->get() as $album)
                    <li><a class="dropdown-item text-center text-light"
                           href="{{ route('album', $album->slug) }}">{{ $album->name }}</a></li>
                @endforeach
                <li><a class="dropdown-item text-center text-light" href="{{ route('album.all') }}">بیشتر</a></li>
            </ul>
        </div>
        <div class="btn-group py-1" role="group">
            <button type="button" class="btn btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                پادکست ها
            </button>
            <ul class="dropdown-menu border-secondary" style="background: #1a202c">
                @foreach(\App\Models\Podcast::latest()->limit(5)->get() as $podcast)
                    <li><a class="dropdown-item text-center text-light"
                           href="{{ route('podcast', $podcast->slug) }}">{{ $podcast->name }}</a></li>
                @endforeach
                <li><a class="dropdown-item text-center text-light" href="{{ route('podcast.all') }}">بیشتر</a></li>
            </ul>
        </div>
        <div class="btn-group py-1" role="group">
            <button type="button" class="btn btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                موزیک ها
            </button>
            <ul class="dropdown-menu border-secondary" style="background: #1a202c">
                @foreach(\App\Models\Song::latest()->limit(5)->get() as $song)
                    <li><a class="dropdown-item text-center text-light"
                           href="{{ route('song', $song->slug) }}">{{ $song->name }}</a></li>
                @endforeach
                <li><a class="dropdown-item text-center text-light" href="{{ route('song.all') }}">بیشتر</a></li>
            </ul>
        </div>
    </div>
</section>
