<!-- resources/views/layouts/app.blade.php -->

<html>

<head>
    <title>App Name - @yield('title')</title>
</head>

<body>
    @section('sidebar')
        This is the master sidebar.
    @show

    <div class="container">
        @yield('content')
    </div>
    123456789
</body>

</html>
