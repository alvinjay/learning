<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><!-- 
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}"> -->
    {{ HTML::style('bootstrap/css/bootstrap-theme.min.css') }}
    {{ HTML::style('bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('font-awesome/css/font-awesome.min.css') }}
    {{ HTML::script('bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('bootstrap/js/jquery.min.js') }}


    @yield('header')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
    @yield('footer')
</html>