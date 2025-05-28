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

                    @if (Auth::user()->role === 'admin')
                        <li><a href="{{ route('adminDashboard') }}">پنل مدیریت</a></li>
                    @endif

                    @if (Auth::user()->role === 'teacher')
                        <li><a href="{{ route('teacherDashboard') }}">پنل اساتید</a></li>
                    @endif

                    @if (Auth::user()->role === 'student')
                        <li><a href="{{ route('studentDashboard') }}">پنل دانشجویان</a></li>
                    @endif


                    <li><a href="/adminDashboard">{{ Auth::user()->name }}</a></li>

                    <li>
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                           <button type="submit" style="background: none; border: none; color: white; padding: 0; font: inherit; cursor: pointer;">
                                    خروج
                           </button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">ورود / ثبت نام</a></li>
                @endauth
            </ul>
        </nav>
    </div>
</header>
