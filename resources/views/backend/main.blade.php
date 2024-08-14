<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('backend.includes.css')
</head>
<body>
    @include('backend.includes.header')
    @include('backend.includes.nav')


    {{-- body --}}
    @yield('content')
    {{-- /body --}}


    @include('backend.includes.footer')
    @include('backend.includes.js')
</body>
</html>