<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin::layouts.head-script')
    @yield('head-content')
    <title>{{env('APP_NAME')}} - Admin | @yield('title')</title>
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('admin::layouts.header')
        @yield('content')
        @include('admin::layouts.footer')

    </div>
</div>
@yield('page-script')
@include('admin::layouts.footer-script')
</body>
</html>
