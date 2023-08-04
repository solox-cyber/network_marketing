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
        <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">Home</a></li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Course <i class="ti-angle-down"></i></a>
            <div class="dropdown-menu">
                @foreach ($courses as $course)
                <a class="dropdown-item" href="{{ route('viewcourse', ['id' => $course->id]) }}">{{ $course->course_name }}</a>
                @endforeach
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{route('contactUs')}}">Contact</a></li>

        <!-- Login and Register buttons visible only on mobile -->
        <li class="nav-item d-sm-none d-md-none">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item d-sm-none d-md-none">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
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

        <div class="page-nav bg-lightblue pt-lg--7 pb-4 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="text-grey-800 fw-700 display3-size mb-3 display4-md-size">Get in touch with us <span class="font-xsss text-grey-500 fw-600 d-block mt-3 pl-lg-5 pr-lg-5 lh-28">Ask us a question by email and we will respond within a few days. Ask us a question by email and we will respond within a few days. </span></h1></div>
                </div>
            </div>
        </div>

        <div class="contact-wrapp pb-lg--10 pb-5 bg-lightblue pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 md-mb-2">
                        <div class="card shadow-xss border-0 p-5 rounded-lg">
                            <span class="btn-round-xxxl alert-success"><i class="feather-mail text-success font-xl"></i></span>
                            <h2 class="fw-700 font-sm mt-4 mb-3 text-grey-900">Email us</h2>
                            <p class="font-xsss text-grey-500 fw-500 mb-3">Ask us a question by email and we will respond within a few days.</p>
                            <a href="mailto:support@lern.africa" class="fw-700 font-xsss text-primary">Send Email</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 md-mb-2">
                        <div class="card shadow-xss border-0 p-5 rounded-lg">
                            <span class="btn-round-xxxl alert-primary"><i class="feather-map-pin text-primary font-xl"></i></span>
                            <h2 class="fw-700 font-sm mt-4 mb-3 text-grey-900">Contact us</h2>
                            <p class="font-xsss text-grey-500 fw-500 mb-3">Ask us a question by email and we will respond within a few days.</p>
                            <a href="tel:07010148548" class="fw-700 font-xsss text-primary">Get Direction</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 md-mb-2">
                        <div class="card shadow-xss border-0 p-5 rounded-lg">
                            <span class="btn-round-xxxl alert-danger"><i class="feather-phone text-danger font-xl"></i></span>
                            <h2 class="fw-700 font-sm mt-4 mb-3 text-grey-900">Call us</h2>
                            <p class="font-xsss text-grey-500 fw-500 mb-3">Ask us a question by email and we will respond within a few days.</p>
                            <a href="tel:07010148548" class="fw-700 font-xsss text-primary">Make a Call</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="map-wrapper pt-lg--10 pt-5 pb-lg--10 pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-wrap bg-white shadow-lg rounded-lg position-relative top-0">
                            <h1 class="text-grey-900 fw-700 display3-size mb-5 lh-1">Contact us</h1>
                            <form action="{{ route('contact.submit') }}" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" name="name" class="form-control style2-input bg-color-none text-grey-700" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" name="email" class="form-control style2-input bg-color-none text-grey-700" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" name="country" class="form-control style2-input bg-color-none text-grey-700" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" name="phone_number" class="form-control style2-input bg-color-none text-grey-700" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <!-- resources/views/countries/index.blade.php -->
<div class="col-lg-12 col-md-12">
    <div class="form-group mb-3">
        <select name="phone_number" class="form-control style2-input bg-color-none text-grey-700">
            <option value="">Which Program are you interested in?</option>
            @foreach($courses as $course)
                <option value="{{ $course->course_name }}">{{ $course->course_name }}</option>
            @endforeach
        </select>
    </div>
</div>

                                    <div class="col-12">
                                        <div class="form-group mb-3 md-mb-2">
                                            <textarea name="message" class="w-100 h125 style2-textarea p-3 form-control"placeholder="Let us know how we can help!"></textarea>
                                        </div>
                                        <div class="form-check text-left mt-3 float-left md-mb-2">
                                            <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1">
                                            <label class="form-check-label font-xsss text-grey-500 fw-500" for="exampleCheck1">I agree to the term of this <a href="#" class="text-grey-600 fw-600">Privacy Policy</a></label>
                                        </div>
                                        <div class="form-group"><button type="submit" class="rounded-lg style1-input float-right bg-current text-white text-center font-xss fw-500 border-2 border-0 p-0 w175">Submit</b></div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        </div>
        <!-- footer wrapper -->
     <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">

                        <p class="copyright-text">© 2023 copyright. All rights reserved.</p>
                    </div>
                    <div class="col-sm-6 col-xs-12 text-right">

                                <li class="list-inline-item mr-3"><a href="#"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item mr-3"><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item mr-3"><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ti-instagram"></i></a></li>

                    </div>
                </div>
            </div>
        </div>
        <!-- footer wrapper -->

    </div>




    <script src="{{ asset('js/plugin.js')}}"></script>
    <script src="{{ asset('js/aos.min.js')}}"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    <script>
        AOS.init();
    </script>

</body>


<!-- Mirrored from uitheme.net/elomoas/home-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 23:05:02 GMT -->

</html>
