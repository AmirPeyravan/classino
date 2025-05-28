<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل دانشجویی</title>
    <link rel="stylesheet" href="/css/panel/student.css">
</head>
<body>
    <div class="admin-container">
        <!-- Navigation Tabs -->
        @include('partials.panel.student.header')

        @yield('content')
    </div>

    <script src="/js/panel/student.js"></script>
</body>
</html>
