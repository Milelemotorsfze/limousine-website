<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/milelercicon.ico') }}">
    <title>Milele Limousine </title>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('admin.layouts.header')
    <div class="wrapper">
        @include('admin.layouts.topbar')
        @include('admin.layouts.sidebar')
            @yield('content')
        @include('admin.layouts.javascripts')
        @include('admin.layouts.footer')
        @stack('scripts')
    </div>
</body>
</html>
