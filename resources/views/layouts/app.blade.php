<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
</head>
<body>

    @include('sections.header')

    <div class="container d-flex justify-content-center pt-5">
        @yield('content')
    </div>

    @include('sections.footer')

    <script src="{{ asset('/js/app.js')}}"></script>
    @include('sweet::alert')


</body>
</html>
