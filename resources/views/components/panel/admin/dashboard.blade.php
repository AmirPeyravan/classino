<!-- داشبورد -->
<div id="dashboard" class="tab-content active">
    <h2>داشبورد</h2>
    <div class="stats">
        <div class="stat-card">
            <h3>دانشجویان</h3>
            <p>{{ $studentsCount }}</p>
        </div>
        <div class="stat-card">
            <h3>کلاس‌ها</h3>
            <p>{{ $coursesCount }}</p>
        </div>
        <div class="stat-card">
            <h3>دسته‌بندی‌ها</h3>
            <p>{{ $categoriesCount }}</p>
        </div>
    </div>
    <canvas id="sales-chart" style="max-height: 300px;"></canvas>
    <div style="margin-top: 20px;">
        <h2>آخرین کلاس‌های ثبت‌شده</h2>
        <ul class="recent-list">
                @foreach($latestCourses as $course)
                <li>
                    {{ $course->title }}
                  - {{ jdate($course->created_at)->format('Y/m/d') }}
                </li>
                @endforeach
        </ul>
    </div>
    <div>
        <h2>آخرین ثبت‌نام کاربران</h2>
        <ul class="recent-list">
@foreach($latestEnrollments as $enrollment)
    <li>
        {{ $enrollment->user->name }} در
        "{{ $enrollment->course->title }}" ثبت‌نام کرد -
        {{ $enrollment->enrolled_at_jalali }}
    </li>
@endforeach

        </ul>
    </div>
</div>
