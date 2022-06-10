<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('titleContent')</title>
</head>
<body>
    @include('partials.header')
    <main>
        @yield('mainContent')
    </main>
    @include('partials.footer')
</body>
</html>