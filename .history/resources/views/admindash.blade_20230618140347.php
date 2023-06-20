@extends('layouts.admin.dash')

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
                                                <img src="{{ asset('storage/' . str_replace('public/', '', Auth::user()->profilePicture->path)) }}" alt="user" class="border border-white border-4" style="border-radius: 20px;" />

                                                @else
                                                <div class="symbol symbol-100px">
                                                    <div class="symbol-label fs-2 fw-bold">{{ substr(Auth::user()->name, 0, 1) }}</div>
                                                </div>
                                                @endif


                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12">
                                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2 col-sm-12 col-md-12">

                                                User Level:
                                            </span>
                                            <!--end::Amount-->
                                            <br>
                                            <!--begin::Subtitle-->
                                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6 ">Current Level based on Downlines</span>
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
                                        <span> </span>
                                    </div>

                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                        <div class="bg-white rounded h-8px" role="progressbar" style="width: 1;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 20-->

                        <!--begin::List widget 25-->
                        <div class="card card-flush h-lg-50">


                            <!--begin::Body-->
                            <div class="card-body pt-5">


                                
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
                                        <h5>Complete Registration</h5>
                                        <button class="btn btn-primary" id="paymentButton">Pay Now</button>
                                    </div>
                                </div>

                                <script>
                                    // Set the countdown date (e.g., 7 days from now)
                                    var countdownDate = new Date();
                                    countdownDate.setDate(countdownDate.getDate() + 7);

                                    // Update the countdown timer every second
                                    var countdownTimer = setInterval(function() {
                                        var now = new Date().getTime();
                                        var distance = countdownDate - now;

                                        // Calculate remaining time
                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                        // Display the remaining time
                                        document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

                                        // If the countdown is finished, clear the interval and perform an action (e.g., enable payment button)
                                        if (distance < 0) {
                                            clearInterval(countdownTimer);
                                            document.getElementById("countdown").innerHTML = "Time's up!";
                                            document.getElementById("paymentButton").disabled = true;
                                        }
                                    }, 1000);
                                </script>


                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 25-->



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
                                    <span class="card-label fw-bold text-gray-800">Authors
                                        Achievements</span>

                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 69.34% Conv.
                                        Rate</span>
                                </h3>
                                <!--end::Title-->

                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                    </button>


                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                New Ticket
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                New Customer
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Admin Group
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Staff Group
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Member Group
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                New Contact
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                                    Generate Reports
                                                </a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->

                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pt-6">
                                <!--begin::Nav-->
                                <ul class="nav nav-pills nav-pills-custom mb-3">
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
                        active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1">
                                            <!--begin::Icon-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-car fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                            </div>
                                            <!--end::Icon-->

                                            <!--begin::Title-->
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                SaaS </span>
                                            <!--end::Title-->

                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
                        " id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2">
                                            <!--begin::Icon-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-bitcoin fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Icon-->

                                            <!--begin::Title-->
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                Crypto </span>
                                            <!--end::Title-->

                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
                        " id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3">
                                            <!--begin::Icon-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-like fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Icon-->

                                            <!--begin::Title-->
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                Social </span>
                                            <!--end::Title-->

                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
                        " id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4">
                                            <!--begin::Icon-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-tablet fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            </div>
                                            <!--end::Icon-->

                                            <!--begin::Title-->
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                Mobile </span>
                                            <!--end::Title-->

                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
                        " id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5">
                                            <!--begin::Icon-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-send fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Icon-->

                                            <!--begin::Title-->
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                Others </span>
                                            <!--end::Title-->

                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->

                                </ul>
                                <!--end::Nav-->

                                <!--begin::Tab Content-->
                                <div class="tab-content">

                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
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
                                                                    <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy
                                                                        Hawkins</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">78.34%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_1_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
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
                                                                    <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
                                                                        Cooper</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">63.83%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_1_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
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
                                                            <span class="text-gray-600 fw-bold fs-6">92.56%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_1_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
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
                                                                    <img src="assets/media/avatars/300-7.jpg" class="" alt="" />
                                                                </div>


                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Cody
                                                                        Fishers</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">63.08%</span>
                                                        </td>

                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_1_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
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
