@extends('layouts.main')
@section('content')
    <!-- بخش جستجو -->
    <section class="search-container">
        <div class="search-box">
            <input type="text" placeholder="جستجو در دوره‌ها، مدرسین و ...">
            <button type="submit">جستجو</button>
        </div>
    </section>

    <!-- بنر اصلی -->
    <section class="hero">
        <div class="hero-content">
            <h2>مسیر یادگیری خود را با کلاسینو آغاز کنید</h2>
            <p>با بیش از 500 دوره آموزشی در زمینه‌های مختلف، مهارت‌های جدید را بیاموزید و آینده شغلی خود را متحول
                کنید.</p>
            <a href="#" class="hero-button">مشاهده دوره‌ها</a>
        </div>
    </section>

    <!-- بخش دوره‌های پرمخاطب -->
    <section class="featured-courses">
        <h2 class="section-title">دوره‌های پرمخاطب</h2>
        <div class="courses-grid">
            <!-- دوره 1 -->
            <div class="course-card">
                <div class="course-image">
                    <img src="/storage/course-image/php.png" alt="آموزش برنامه‌نویسی پایتون">
                </div>
                <div class="course-content">
                    <h3 class="course-title">آموزش برنامه‌نویسی پایتون از صفر تا پیشرفته</h3>
                    <div class="course-teacher">استاد: مهندس احمدی</div>
                    <div class="course-bottom">
                        <div class="course-price">750,000 تومان</div>
                        <div class="course-students">1250 دانشجو</div>
                    </div>
                </div>
            </div>

            <!-- دوره 2 -->
            <div class="course-card">
                <div class="course-image">
                    <img src="/storage/course-image/php.png" alt="آموزش شبکه‌های کامپیوتری">
                </div>
                <div class="course-content">
                    <h3 class="course-title">مفاهیم پایه شبکه‌های کامپیوتری</h3>
                    <div class="course-teacher">استاد: دکتر محمدی</div>
                    <div class="course-bottom">
                        <div class="course-price">850,000 تومان</div>
                        <div class="course-students">980 دانشجو</div>
                    </div>
                </div>
            </div>

            <!-- دوره 3 -->
            <div class="course-card">
                <div class="course-image">
                    <img src="/storage/course-image/php.png" alt="آموزش طراحی وب">
                </div>
                <div class="course-content">
                    <h3 class="course-title">آموزش طراحی وب ریسپانسیو با HTML و CSS</h3>
                    <div class="course-teacher">استاد: مهندس رضایی</div>
                    <div class="course-bottom">
                        <div class="course-price">690,000 تومان</div>
                        <div class="course-students">1580 دانشجو</div>
                    </div>
                </div>
            </div>

            <!-- دوره 4 -->
            <div class="course-card">
                <div class="course-image">
                    <img src="/storage/course-image/php.png" alt="آموزش یادگیری ماشین">
                </div>
                <div class="course-content">
                    <h3 class="course-title">آموزش یادگیری ماشین با پایتون</h3>
                    <div class="course-teacher">استاد: مهندس حسینی</div>
                    <div class="course-bottom">
                        <div class="course-price">920,000 تومان</div>
                        <div class="course-students">870 دانشجو</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش دسته‌بندی دوره‌ها -->
    <section class="categories">
        <div class="categories-container">
            <h2 class="section-title">دسته‌بندی دوره‌ها</h2>
            <div class="categories-grid">
                <!-- دسته 1 -->
                <div class="category-item">
                    <div class="category-icon">💻</div>
                    <div class="category-name">برنامه‌نویسی</div>
                    <div class="category-count">45 دوره</div>
                </div>

                <!-- دسته 2 -->
                <div class="category-item">
                    <div class="category-icon">🔍</div>
                    <div class="category-name">هوش مصنوعی</div>
                    <div class="category-count">18 دوره</div>
                </div>

                <!-- دسته 3 -->
                <div class="category-item">
                    <div class="category-icon">📊</div>
                    <div class="category-name">علوم داده</div>
                    <div class="category-count">23 دوره</div>
                </div>

                <!-- دسته 4 -->
                <div class="category-item">
                    <div class="category-icon">🎨</div>
                    <div class="category-name">طراحی گرافیک</div>
                    <div class="category-count">37 دوره</div>
                </div>

                <!-- دسته 5 -->
                <div class="category-item">
                    <div class="category-icon">🔒</div>
                    <div class="category-name">امنیت شبکه</div>
                    <div class="category-count">15 دوره</div>
                </div>

                <!-- دسته 6 -->
                <div class="category-item">
                    <div class="category-icon">📱</div>
                    <div class="category-name">توسعه موبایل</div>
                    <div class="category-count">28 دوره</div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش مزایا -->
    <section class="benefits">
        <div class="benefits-container">
            <h2 class="section-title">چرا کلاسینو؟</h2>
            <div class="benefits-grid">
                <!-- مزیت 1 -->
                <div class="benefit-item">
                    <div class="benefit-icon">✓</div>
                    <div class="benefit-content">
                        <h4>دسترسی مادام‌العمر</h4>
                        <p>بعد از خرید دوره‌ها، برای همیشه به محتوای آن‌ها دسترسی خواهید داشت.</p>
                    </div>
                </div>

                <!-- مزیت 2 -->
                <div class="benefit-item">
                    <div class="benefit-icon">✓</div>
                    <div class="benefit-content">
                        <h4>پشتیبانی آنلاین</h4>
                        <p>در هر زمان از شبانه‌روز پاسخگوی سوالات و مشکلات شما هستیم.</p>
                    </div>
                </div>

                <!-- مزیت 3 -->
                <div class="benefit-item">
                    <div class="benefit-icon">✓</div>
                    <div class="benefit-content">
                        <h4>مدرسین مجرب</h4>
                        <p>تمامی دوره‌ها توسط اساتید باتجربه و متخصص تدریس می‌شوند.</p>
                    </div>
                </div>

                <!-- مزیت 4 -->
                <div class="benefit-item">
                    <div class="benefit-icon">✓</div>
                    <div class="benefit-content">
                        <h4>گواهی معتبر</h4>
                        <p>پس از اتمام هر دوره، گواهی پایان دوره دریافت کنید.</p>
                    </div>
                </div>

                <!-- مزیت 5 -->
                <div class="benefit-item">
                    <div class="benefit-icon">✓</div>
                    <div class="benefit-content">
                        <h4>به‌روزرسانی محتوا</h4>
                        <p>تمامی دوره‌ها به‌طور مرتب به‌روزرسانی می‌شوند.</p>
                    </div>
                </div>

                <!-- مزیت 6 -->
                <div class="benefit-item">
                    <div class="benefit-icon">✓</div>
                    <div class="benefit-content">
                        <h4>تخفیف‌های ویژه</h4>
                        <p>از تخفیف‌های دوره‌ای و مناسبتی ما بهره‌مند شوید.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
