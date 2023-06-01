@include('includes/header')
@include('includes/headbar')

@include('includes/sidebar')

@if (Auth::guard('admin')->check())
    @yield('admin_content')
@else
    @yield('user_content')
@endif

@include('includes/footer')
