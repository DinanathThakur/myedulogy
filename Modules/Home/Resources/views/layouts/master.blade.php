<!DOCTYPE html>
<html lang="en">
    <head>
    	@include('home::layouts.head-script')
    	@yield('head-content')
    	<!-- @yield('title','Edulogy | Online Training') -->
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
