<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد مدیریت کلاس‌ها</title>
    <link rel="stylesheet" href="css/panel/teacher.css">
</head>
<body>
<div class="admin-container">

    @include('partials.panel.teacher.header')

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="js/panel/teacher.js"></script>
</body>
</html>
