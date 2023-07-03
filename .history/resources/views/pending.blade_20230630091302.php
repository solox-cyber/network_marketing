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


                                <!-- Countdown Timer -->
                                <div class="text-center">
                                    <h2>Countdown Timer</h2>
                                    <div class="container">
                                        <div id="countdown" class="mb-4 text-danger display-6"></div>
                                        <h5>Click the below to complete registration and reserve your position</h5>
                                        <button class="btn btn-primary" id="paymentButton">Pay Now</button>
                                    </div>
                                </div>

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
                                            document.getElementById("paymentButton").disabled = true;
                                        }
                                    }, 1000);
                                    @endif
                                </script>


                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 25-->



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
