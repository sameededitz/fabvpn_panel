<!doctype html>
<html lang="en">

<head>
    @include('partial.head')
</head>

<body class="bg-theme bg-theme2">
    <div class="wrapper">
        @include('partial.sidebar')
        @include('partial.header')
        <div class="page-wrapper">
            <div class="page-content">
        @yield('content')
            </div>
        </div>
        @include('partial.footer')
    </div>
</body>

</html>
