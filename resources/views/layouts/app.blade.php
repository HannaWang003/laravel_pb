<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        @php
            echo 'home home';
        @endphp
    </title>
    @include('layouts.meta')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css'
        integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ=='
        crossorigin='anonymous' />
</head>

<body>

    @include('layouts.nav')
    <div class="container bg-warning">
        @yield('content')
    </div>
    @include('layouts.footer')
    @include('layouts.js')
</body>

</html>
