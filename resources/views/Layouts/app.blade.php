<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel= "stylesheet", href="{{url('css/styles.css')}}">
</head>
<body>
    <!-- ... -->

    <div id="app">
        <!-- Include flash messages -->
        @include('flash-messages')

        <!-- Yield the content section -->
        @yield('content')
    </div>


    <!-- ... -->
</body>
</html>
