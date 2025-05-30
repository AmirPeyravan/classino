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
            <li>کلاس برنامه‌نویسی پایتون - 1404/03/01</li>
            <li>کلاس طراحی وب - 1404/02/28</li>
        </ul>
    </div>
    <div>
        <h2>آخرین ثبت‌نام کاربران</h2>
        <ul class="recent-list">
            <li>علی احمدی - کلاس پایتون - 1404/03/02</li>
            <li>مریم حسینی - کلاس طراحی وب - 1404/03/01</li>
        </ul>
    </div>
</div>
