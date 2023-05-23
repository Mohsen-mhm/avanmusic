<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-lg">
    <div class="container" dir="rtl">
        <a class="navbar-brand" style="font-size: 16px" href="{{ route('home') }}">
            {{ config('app.name', 'آوان موزیک') }}
        </a>
        <div class="btn-group">
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
            <ul class="dropdown-menu me-3" style="background: #1a202c">
                @guest
                    @if (Route::has('login'))
                        <li>
                            <a class="dropdown-item text-light text-center" href="{{ route('login') }}">ورود</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li>
                            <a class="dropdown-item text-light text-center" href="{{ route('register') }}">عضویت</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a class="dropdown-item text-light text-center" href="{{ route('home') }}">صفحه اصلی</a>
                    </li>

                    <li>
                        <a class="dropdown-item text-light text-center"
                           href="{{ route('setting.index') }}">تنظیمات</a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li><a class="dropdown-item text-light text-center" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">خروج</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
