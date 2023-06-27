@extends('layouts.admin.salesdash')

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

<!--begin::Chart widget 10-->
<div class="card card-flush h-xxl-100">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-800">Admin Dashboard</span>
			<!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">3,567,457 tons</span> -->
		</h3>
        <!--end::Title-->


    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex flex-column justify-content-between pb-5 px-0">


        <!--begin::Tab Content-->
        <div class="tab-content ps-4 pe-6">
                            <!--begin::Tap pane-->
                <div class="tab-pane fade active show" id="kt_charts_widget_10_tab_content_1">

                <canvas id="chartWidget1" class="min-h-auto" style="height: 270px"></canvas>

                <!-- Display the total number of users -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Get the chart canvas element
    var ctx = document.getElementById('chartWidget1').getContext('2d');

    // Define the chart data
    var chartData = {
        labels: ['Assigned Contacts', 'Converted Contacts'],
        datasets: [{
            data: [
                {{ $totalUsers }},
                {{ $totalContacts }},
                
            ],
            backgroundColor: [
                'rgba(0, 123, 255, 0.5)', // Customize the colors as needed
                'rgba(255, 0, 0, 0.5)',
                'rgba(0, 255, 0, 0.5)'
            ],
            borderColor: [
                'rgba(0, 123, 255, 1)',
                'rgba(255, 0, 0, 1)',
                'rgba(0, 255, 0, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Set the chart options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Create and render the chart
    var chart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: chartOptions
    });
</script>


                </div>
                <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                <div class="tab-pane fade " id="kt_charts_widget_10_tab_content_2">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_10_chart_2" class="min-h-auto" style="height: 270px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                <div class="tab-pane fade " id="kt_charts_widget_10_tab_content_3">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_10_chart_3" class="min-h-auto" style="height: 270px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                <div class="tab-pane fade " id="kt_charts_widget_10_tab_content_4">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_10_chart_4" class="min-h-auto" style="height: 270px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Tap pane-->

        </div>
        <!--end::Tab Content-->
    </div>
    <!--end: Card Body-->
</div>
<!--end::Chart widget 10-->




                </div>
                <!--end::Row-->


            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->



    @endsection
