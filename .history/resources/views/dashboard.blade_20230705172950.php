@php
use Torann\GeoIP\GeoIP;
use Torann\GeoIP\Services\IPApi;
@endphp
@extends('layouts.dash')

@section('content')
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">



                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Default
                    </h1>
                    <!--end::Title-->


                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">
                                Home </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            Dashboards </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">



                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->

                    <!--begin::Primary button-->
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">


            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-fluid ">
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

                        <!--begin::Card widget 20-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #3E97FF;background-image:url('assets/media/svg/shapes/widget-bg-1.png')">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <div class="row col-md-12">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="symbol symbol-65px symbol-lg-90px symbol-fixed position-relative mt-n3">
                                                @if(Auth::user()->profilePicture)
                                                <img src="{{ asset('public/storage/' . str_replace('public/', '', Auth::user()->profilePicture->path)) }}" alt="user" class="border border-white border-4" style="border-radius: 20px;" />

                                                @else
                                                <div class="symbol symbol-100px">
                                                    <div class="symbol-label fs-2 fw-bold">{{ substr(Auth::user()->name, 0, 1) }}</div>
                                                </div>
                                                @endif


                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12">
                                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2 col-sm-12 col-md-12">
                                                Current Level: {{ $level }}
                                            </span>
                                            <!--end::Amount-->
                                            <br>
                                            <!--begin::Subtitle-->
                                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6 ">
                                                Level 1: 4 downlines<br>
                                                Level 2: 16 downlines<br>
                                                Level 3: 64 downlines<br>
                                                Level 4: 256 downlines<br>
                                            </span>
                                            <!--end::Subtitle-->


                                        </div>
                                    </div>


                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                        <span>Serial Number </span>
                                        <span>{{ $serial_number }}</span>
                                    </div>

                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                        <div class="bg-white rounded h-8px" role="progressbar" style="width: {{ $serial_number }};" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 20-->

                        <!--begin::List widget 25-->
                        <div class="card card-flush h-lg-50">
                            <!--begin::Header-->
                            <div class="card-header pt-2">
                                <!--begin::Title-->
                                <!-- <h3 class="card-title text-gray-800">
                                </h3> -->
                                <!--end::Title-->


                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pt-5" style="margin-top:-20px">


                                <!-- <div class="step-indicator">
    <div class="step completed">
        <span class="step-number">1</span>
        <span class="step-label">Registration</span>
    </div>
    <div class="step active">
        <span class="step-number">2</span>
        <span class="step-label">Payment</span>
    </div>
    <div class="step">
        <span class="step-number">3</span>
        <span class="step-label">Progress</span>
    </div>
    <div class="step">
        <span class="step-number">4</span>
        <span class="step-label">Certificate</span>
    </div>
</div> -->

                                <style>
                                    .step-indicator {
                                        display: flex;
                                        justify-content: space-between;
                                        align-items: center;
                                    }

                                    .step {
                                        flex: 1;
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        position: relative;
                                    }

                                    .step-number {
                                        width: 30px;
                                        height: 30px;
                                        border-radius: 50%;
                                        background-color: #ddd;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        font-weight: bold;
                                    }

                                    .step-label {
                                        margin-top: 5px;
                                    }

                                    .step.active .step-number {
                                        background-color: #007bff;
                                        color: #fff;
                                    }

                                    .step.completed .step-number {
                                        background-color: #28a745;
                                        color: #fff;
                                    }

                                    .step:not(:last-child)::after {
                                        content: "";
                                        position: absolute;
                                        top: 50%;
                                        left: calc(100% - 15px);
                                        height: 2px;
                                        width: calc(100% + 15px);
                                        background-color: #ddd;
                                    }
                                </style>


                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                @if($errors->any())
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                    {{ $error }}
                                    @endforeach
                                </div>
                                @endif

                                <!-- Countdown Timer -->
                                @if(Auth::user()->payment_status === 'paid')
                                <div class="text-center">

                                    <div class="container">
                                        <h1 style="color:red">Paid</h1>
                                        @foreach($courseDetails as $course)
                                        <h3>
                                            <h4>Course Selected: {{$course->course_name}}</h4>
                                            <h4>Amount: {{$course->tuition_fee}}</h4>
                                        </h3>
                                        @endforeach
                                    </div>
                                </div>
                                @else
                                <div class="text-center">
                                    <h2>Countdown Timer</h2>
                                    <div class="container">
                                        <div id="countdown" class="mb-4 text-danger display-6"></div>
                                        <h5>Click the button below to complete registration and reserve your position</h5>
                                        <button class="btn btn-primary" id="paymentButton">Pay Now</button>
                                    </div>
                                </div>
                                @endif

                                <script src="https://js.paystack.co/v1/inline.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
                                <script>
                                    @if($course)
                                    // Get the course date from the PHP variable in the view
                                    var courseDate = new Date("{{ $course }}");

                                    // Calculate the time remaining until the course date
                                    var countdownDate = courseDate.getTime() - new Date().getTime() + (72 * 60 * 60 * 1000);

                                    // Update the countdown timer every second
                                    var countdownTimer = setInterval(function() {
                                        countdownDate -= 1000;

                                        // Calculate remaining time
                                        var days = Math.floor(countdownDate / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((countdownDate % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((countdownDate % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((countdownDate % (1000 * 60)) / 1000);

                                        // Display the remaining time
                                        document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

                                        // If the countdown is finished, clear the interval and perform an action (e.g., enable payment button)
                                        if (countdownDate < 0) {
                                            clearInterval(countdownTimer);
                                            document.getElementById("countdown").innerHTML = "Time's up!";
                                            // document.getElementById("paymentButton").disabled = true;
                                        }
                                    }, 1000);
                                    @endif
                                </script>

                                @foreach($courseDetails as $course)

                                <script>
                                    const paymentButton = document.getElementById('paymentButton');

                                    paymentButton.addEventListener('click', () => {
                                        // Make an API call to your backend to retrieve the payment information
                                        // Generate a unique reference for this payment

                                        // Replace PAYSTACK_PUBLIC_KEY with your Paystack test demo key
                                        const publicKey = 'pk_test_aba24425e4f6cc3062196b1d4629bcfa7ed7ea03';
                                        const ref = Date.now();

                                        const handler = PaystackPop.setup({
                                            key: publicKey,
                                            email: '{{ Auth::user()->email }}',
                                            amount: '{{number_format($course->tuition_fee, 2, "", "")}}', // Replace with the actual payment amount
                                            currency: 'NGN', // Replace with the appropriate currency code
                                            ref: ref.toString(), // Replace with a unique reference for this payment
                                            metadata: {
                                                custom_fields: [{
                                                    display_name: 'Full Name',
                                                    variable_name: 'full_name',
                                                    value: '{{ Auth::user()->name }}',
                                                }],
                                            },
                                            callback: (response) => {
                                                // Handle the response from Paystack after successful payment
                                                // Redirect to the success page with a query parameter indicating payment success
                                                if (response.status === 'success') {
                                                    window.location.href = '/success?status=success';
                                                } else {
                                                    // Redirect to the success page with a query parameter indicating payment failure
                                                    window.location.href = '/success?status=failure';
                                                }
                                            },
                                        });

                                        handler.openIframe();
                                    });
                                </script>

                                @endforeach

                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 25-->



                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

                        <!--begin::Card widget 17-->
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Currency-->
                                        @php


                                        <!-- $ipAddress = request()->ip(); -->
                                        $ipAddress = $_SERVER['showRegistrationForm']
                                        $location = Location::get($ipAddress);
                                        $currencySymbol = ($countryCode === 'NG') ? '₦' : '$';
                                        @endphp




                                        <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">{{ $currencySymbol }}</span>
                                        <!--end::Currency-->
{{$ipAddress}}
                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ number_format($WalletAmount, 2, '.', ',') }}</span>

                                        <!--end::Amount-->

                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                            {{ $commissionPercentage }}%
                                        </span>
                                        <!--end::Badge-->


                                    </div>

                                    <!--end::Info-->

                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">Current Earnings</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                <!--begin::Chart-->
                                <div class="d-flex flex-center me-5 pt-2">
                                    <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11">
                                    </div>
                                </div>
                                <!--end::Chart-->


                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">Total Number of Registered Users </div>
                                        <!--end::Label-->

                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">{{$userCount }}</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->




                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">Number of Uploaded Contacts</div>
                                        <!--end::Label-->

                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">{{$contactCount }}</div>

                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 17-->

                        <!--begin::List widget 26-->
                        <div class="card card-flush h-md-50 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title text-gray-800 fw-bold">Payments</h3>
                                <!--end::Title-->

                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                    </button>




                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <a href="{{route('setting')}}" class="text-primary fw-semibold fs-6 me-2">Add Account Details</a>
                                    <!--end::Section-->

                                    <!--begin::Action-->
                                    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                        <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span class="path2"></span></i>
                                    </button>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->




                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->

                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <a href="{{route('payout')}}" class="text-primary fw-semibold fs-6 me-2">Request Payout</a>
                                    <!--end::Section-->

                                    <!--begin::Action-->
                                    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                        <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span class="path2"></span></i>
                                    </button>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->

                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <a href="{{route('statement')}}" class="text-primary fw-semibold fs-6 me-2">My Statements</a>
                                    <!--end::Section-->

                                    <!--begin::Action-->
                                    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                        <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span class="path2"></span></i>
                                    </button>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 26-->


                    </div>
                    <!--end::Col-->


                    <!--begin::Col-->
                    <div class="col-xxl-6">

                        <!--begin::Tables widget 16-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">
                                        Learning Center </span>
                                    <span class="card-label fw-bold text-gray-600">
                                        My Courses </span>
                                </h3>
                                <h5 class="card-title align-items-start flex-column">

                                    <!--end::Title-->

                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                        </button>



                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pt-6">
                                <!--begin::Nav-->
                                <ul class="nav nav-pills nav-pills-custom mb-3">
                                    @foreach($courseDetails as $course)
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
                        " id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#{{$course->course_name}}">
                                            <div class="nav-icon mb-3">
                                                @if ($course->profilePicture)
                                                <img src="{{ asset('storage/' . str_replace('public/', '', $course->profilePicture->path)) }}" alt="image" class="p-3" alt="Course Logo" style="height:60px!important;width:60px!important">
                                                @endif
                                            </div>

                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    @endforeach




                                </ul>
                                <!--end::Nav-->

                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                    @foreach($courseDetails as $course)
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="{{$course->course_name}}">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <!-- <th class="p-0 pb-3 min-w-150px text-start">
                                                            Course Overview</th> -->

                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->

                                                <!--begin::Table body-->
                                                <tbody>

                                                    <tr>
                                                        <h6 class="p-0 pb-3 min-w-150px text-start text-gray-600">
                                                            Course Overview</h6>
                                                        <h3 class="mb-3">{{$course->course_name}}</h3>
                                                        <p class="fw-bold text-gray-600">About This Course</p>
                                                        <p>{!! Str::limit($course->about_course, 300) !!}</p>
                                                    </tr>


                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    @endforeach
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_stats_widget_16_tab_2">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">
                                                            AUTHOR</th>
                                                        <th class="p-0 pb-3 min-w-100px text-end pe-13">
                                                            CONV.</th>
                                                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART
                                                        </th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->

                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-25.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                                        Simmons</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">85.23%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_2_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-24.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                        Howard</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">74.83%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_2_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-20.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette
                                                                        Black</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">90.06%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_2_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-17.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                        McKinney</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">54.08%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_2_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->

                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_stats_widget_16_tab_3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">
                                                            AUTHOR</th>
                                                        <th class="p-0 pb-3 min-w-100px text-end pe-13">
                                                            CONV.</th>
                                                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART
                                                        </th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->

                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-11.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                        Jones</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">New
                                                                        York</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">52.34%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_3_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-23.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald
                                                                        Richards</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Madrid</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">77.65%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_3_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-4.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie
                                                                        Alexander</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Pune</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">82.47%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_3_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Courtney
                                                                        Henry</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">67.84%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_3_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->

                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_stats_widget_16_tab_4">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">
                                                            AUTHOR</th>
                                                        <th class="p-0 pb-3 min-w-100px text-end pe-13">
                                                            CONV.</th>
                                                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART
                                                        </th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->

                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-12.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene
                                                                        McCoy</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">London</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">53.44%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_4_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-21.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                        McKinneyr</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">74.64%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_4_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-30.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                        Jones</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">PManila</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">88.56%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_4_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-14.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                        Howard</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Iceland</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">63.16%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_4_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->

                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_stats_widget_16_tab_5">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">
                                                            AUTHOR</th>
                                                        <th class="p-0 pb-3 min-w-100px text-end pe-13">
                                                            CONV.</th>
                                                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART
                                                        </th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->

                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-6.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
                                                                        Cooper</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">68.54%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_5_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-10.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                        Howard</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Kiribati</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">55.83%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_5_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-9.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                        Jones</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">93.46%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_5_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph
                                                                        Edwards</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">64.48%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_5_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Tables widget 16-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->


            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->



    @endsection
