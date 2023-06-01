@include('includes/header')
@include('includes/headbar')

@include('includes/sidebar')
@if (Auth::guard('admin')->check())
@yield('admin_content')
@elseif(Auth::guard('user')->check())
@yield('content') Auth::guard('user')->user();
@endif
@include('includes/footer')
