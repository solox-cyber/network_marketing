@include('includes/header')
@include('includes/headbar')

@include('includes/sidebar')
@if (Auth::guard('admin')->check())
@yield('content')
@elseif(Auth::guard('admin')->check())
@endif
@include('includes/footer')
