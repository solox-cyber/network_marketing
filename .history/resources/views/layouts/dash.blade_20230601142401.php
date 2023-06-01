@include('includes/header')
@include('includes/headbar')

@include('includes/sidebar')
@if (Auth::guard('admin')->check())
@yield('content')
@elseif(Auth::guard('user')->check())
@endif
@include('includes/footer')
