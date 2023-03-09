<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Layout')</title>
    <base href="/"/>
    @yield('before-css')
    @include('html.css')
    @yield('after-css')
</head>
<body>
{{--    nav--}}
@include('html.nav')
{{--    body--}}
@yield('main-content')
{{--    footer--}}
@yield('footer-content')
</body>
@yield('before-js')
@include('html.js')
@yield('after-js')
</html>
