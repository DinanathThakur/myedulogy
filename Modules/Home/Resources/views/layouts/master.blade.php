<!DOCTYPE html>
<html lang="en">
    <head>
    	@include('home::layouts.head-script')
    	@yield('head-content')
        <title>{{env('APP_NAME')}} | @yield('title')</title>
    </head>
    <body class="header-sticky">
        <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
            @include('home::layouts.header')

            
            @yield('content')
      
      
        @include('home::layouts.footer')
      
        @yield('page-script')
        @include('home::layouts.footer-script')
    </body>
</html>
