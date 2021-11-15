<!DOCTYPE html>
<html>
    <head>
        @include('frontend-includes.headimport')
    </head>
    <body>
        @include('frontend-includes.nav')
        @yield('content')
        @include('frontend-includes.footer')
    </body>
</html>