<!DOCTYPE html>
<html lang="en">
    <head>
        @include('home::layouts.head-script')
        @yield('head-content')
        <title>{{env('APP_NAME')}} | @yield('title')</title>
    </head>
    <body class="{{ Request::is('/') ? "" : "inner-page"}}">
        @if (Request::is('/'))
        @include('home::layouts.header')
        @else
        @include('home::layouts.common-header')
        @endif
        @yield('content')
        @include('home::layouts.footer')
        @yield('page-script')
        @include('home::layouts.footer-script')
    </body>
</html>
