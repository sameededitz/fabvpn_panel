<!doctype html>
<html lang="en">

<head>
    @include('partial.head')
</head>

<body class="bg-theme bg-theme2">
    <div class="wrapper">
        @include('partial.sidebar')
        @include('partial.header')
        @yield('content')
        @include('partial.footer')
    </div>
</body>

</html>
