<!doctype html>
<html lang="en">
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/blog/public/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/blog/public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/blog/public/favicon-16x16.png">
    <link rel="manifest" href="/blog/public/site.webmanifest">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('mainTitle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="/blog/resources/css/app.css">

</head>
<body>
@include('templates.header')

@if(Request::is('/'))
    @include('templates.hero')
@endif

<div class="container mt-5">
    @include('templates.messages')
    @yield('center')

    <div class="row">
        <div class="col-8">
            @yield('main')
        </div>
        <div class="col-4">
            @if(Request::is('login', 'registration'))

            @else
            @include('templates.saidbar')
            @endif
        </div>
    </div>
</div>






@include('templates.footer')


</body>
</html>


