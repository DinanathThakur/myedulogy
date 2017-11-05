<!DOCTYPE html>
<html lang="en">
    <head>
    	@include('home::layouts.head-script')
    	@yield('head-content')
        <title>{{env('APP_NAME')}} | @yield('title')</title>
    </head>
    <body class="header-sticky">
        <div class="boxed">
            @include('home::layouts.header')

            
            @yield('content')
      
      
        @include('home::layouts.footer')
      
      </div>
        @yield('page-script')
        @include('home::layouts.footer-script')
    </body>
</html>
