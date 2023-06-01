@include('includes/header')
@include('includes/headbar')

@include('includes/sidebar')
@if (Auth::guard('admin')->check())
@yield('content')
@elseif(Auth::guard('user')->check())
@yield('content')
@endif
@include('includes/footer')
