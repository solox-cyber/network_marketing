@include('includes/header')
@include('includes/headbar')

@include('includes/sidebar')
@if (Auth::guard('admin')->check())
@yield('content')

@include('includes/footer')
