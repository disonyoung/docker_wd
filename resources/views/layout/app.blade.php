<html>
<head>
    <title>@yield('title')</title>
    @include('layout.style')
    @yield('style')
</head>

<body>
    @include('layout.header')
    <div class="container-fluid">
        <div class="row-fluid">
            @include('layout.left')

            <!--/span-->
            <div>@yield('content')</div>

        </div>
        @include('layout.footer')
    </div>
    @include('layout.script')
    @yield('script')
</body>
</html>
