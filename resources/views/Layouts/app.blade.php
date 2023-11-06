<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel= "stylesheet", href="{{url('css/styles.css')}}">
</head>
<body>
   

    <div id="app">
       
        @include('flash-messages')

        @yield('content')
    </div>


</body>
</html>
