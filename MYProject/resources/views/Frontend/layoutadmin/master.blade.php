<!DOCTYPE html>
<html lang="en">
<head>
    @include('Frontend.layoutadmin.head')
</head>
<body onload="time()" class="app sidebar-mini rtl">
    @include('Frontend.layoutadmin.header')
    @yield('main-content')
    @include('Frontend.layoutadmin.footer')
</body>
</html>