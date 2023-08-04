<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uitheme.net/elomoas/home-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 23:04:57 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lern.Africa</title>

    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">

    <link rel="stylesheet" href="{{ asset('css/feather.css')}}">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('media/logos/lern-logo1.png') }}" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.min.css') }}">


</head>
<body class="color-theme-blue mont-font">

    <div class="preloader"></div>



    <div class="main-wrap">
        <!-- header wrapper -->
        <div class="header-wrapper pt-3 pb-3 shadow-none pos-fixed position-absolute">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 navbar pt-0 pb-0">
                    <a href="{{route('welcome')}}">
  <img alt="Logo" src="{{asset('media/logos/lern-logo.png')}}" style="height:40px;width:60px;" class="img-fluid h-20px app-sidebar-logo-default" />
</a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav nav-menu float-none text-center">
                                <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}">Home</a></li>

                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Course <i class="ti-angle-down"></i></a>
                                    <div class="dropdown-menu">
                                         @foreach ($courses as $course)
                                         <a class="dropdown-item" href="{{ route('viewcourse', ['id' => $course->id]) }}">{{$course->course_name}}</a>
                                       @endforeach
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 text-right d-lg-block d-none">
                        <a href="{{route('login')}}" class="header-btn bg-dark fw-500 text-white font-xssss p-2 lh-32 w100 text-center d-inline-block rounded-xl mt-1">Login</a>
                        <a href="{{route('register')}}" class="header-btn bg-current fw-500 text-white font-xssss p-2 lh-32 w100 text-center d-inline-block rounded-xl mt-1">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- header wrapper -->
