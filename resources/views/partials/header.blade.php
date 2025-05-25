<!-- هدر -->
<header>
    <div class="header-container">
        <div class="logo">
            <h1>Classino<span>.</span></h1>
        </div>
        <div class="hamburger">☰</div>
        <nav>
            <ul>
                <li><a href="{{ route('/') }}">صفحه اصلی</a></li>
                <li><a href="{{ route('courses') }}">دوره‌ها</a></li>
                <li><a href="{{ route('teachers') }}">مدرسین</a></li>
                <li><a href="{{ route('contact') }}">تماس با ما</a></li>
                @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <li><a href="/adminDashboard">{{ Auth::user()->name }}</a></li>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">ورود / ثبت نام</a></li>
                @endauth
            </ul>
        </nav>
    </div>
</header>
