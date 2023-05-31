



@extends('layouts.dash')

@section('content')
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Account Overview
                    </h1>
                    <!--end::Title-->


                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">
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
                            Account </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">


            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl ">

                @include('setting_methods.menuhead')

                @include('setting_methods.navitems')
                <!--begin::Row-->
                <div class="row g-xxl-9">
                    <!--begin::Col-->
                    <div class="col-xxl-8">

                     <!--begin::Referral program-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Body-->
    <div class="card-body py-10">
        <h2 class="mb-9">
            Referral Program
        </h2>


        <!--begin::Stats-->
        <div class="row">
            <!--begin::Col-->
            <div class="col">
                <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                    <span class="fs-4 fw-semibold text-info pb-1 px-2">Net Earnings</span>
                    <span class="fs-lg-2tx fw-bold d-flex justify-content-center">
                    ₦<span data-kt-countup="true" data-kt-countup-value="63,240.00">0</span>
                    </span>
                </div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col">
                <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                    <span class="fs-4 fw-semibold text-success pb-1 px-2">Balance</span>
                    <span class="fs-lg-2tx fw-bold d-flex justify-content-center">
                        $<span data-kt-countup="true" data-kt-countup-value="8,530.00">0</span>
                    </span>
                </div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col">
                <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                    <span class="fs-4 fw-semibold text-danger pb-1 px-2">Avg Deal Size</span>
                    <span class="fs-lg-2tx fw-bold d-flex justify-content-center">
                        $<span data-kt-countup="true" data-kt-countup-value="2,600">0</span>
                    </span>
                </div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col">
                <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                    <span class="fs-4 fw-semibold text-primary pb-1 px-2">Referral Signups</span>
                    <span class="fs-lg-2tx fw-bold d-flex justify-content-center">
                        $<span data-kt-countup="true" data-kt-countup-value=783">0</span>
                    </span>
                </div>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Stats-->




<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
            <!--begin::Icon-->
        <i class="ki-duotone ki-bank fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span></i>        <!--end::Icon-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <!--begin::Content-->
            <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Withdraw Your Money to a Bank Account</h4>

                                    <div class="fs-6 text-gray-700 pe-7">Withdraw money securily to your bank account. Commision is $25 per transaction under $50,000</div>
                            </div>
            <!--end::Content-->

                    <!--begin::Action-->
            <a href="{{route('payout')}}" class="btn btn-primary px-6 align-self-center text-nowrap"  >
                Withdraw Money            </a>
            <!--end::Action-->
            </div>
    <!--end::Wrapper-->
</div>
<!--end::Notice-->
     </div>
    <!--end::Body-->
</div>
<!--end::Referral program-->
                    </div>
                    <!--end::Col-->




                    <!--begin::Col-->
                    <div class="col-xxl-4">
                        <!--begin::Invoices-->
                        <div class="card  card-xxl-stretch mb-5 mb-xxl-10">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="text-gray-800">Invoices</h3>
                                </div>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body">
                                <span class="fs-5 fw-semibold text-gray-600 pb-6 d-block">Download apart from order of the good awesome invoice topics</span>

                                <!--begin::Left Section-->
                                <div class="d-flex align-self-center">
                                    <div class="flex-grow-1 me-3">
                                        <!--begin::Select-->
                                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="Seller Annual Fee" data-hide-search="true">
                                            <option value=""></option>
                                            <option value="1">Individual Seller Account</option>
                                            <option value="2">Variable Closing Fee</option>
                                            <option value="3">Minimum Referral Fee</option>
                                        </select>
                                        <!--end::Select-->
                                    </div>

                                    <!--begin::Action-->
                                    <button type="button" class="btn btn-primary btn-icon flex-shrink-0">
                                        <i class="ki-duotone ki-arrow-down fs-1"><span class="path1"></span><span class="path2"></span></i> </button>
                                    <!--end::Action-->
                                </div>
                                <!--end::Left Section-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Invoices-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->


                <!--begin::Statements-->
                <div class="card  ">
                    <!--begin::Header-->
                    <div class="card-header card-header-stretch">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3 class="m-0 text-gray-800">Statement</h3>
                        </div>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar m-0">
                            <!--begin::Tab nav-->
                            <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs border-transparent" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_year_tab" class="nav-link text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_referrals_1">
                                        This Year
                                    </a>
                                </li>


                            </ul>
                            <!--end::Tab nav-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Tab Content-->
                    <div id="kt_referred_users_tab_content" class="tab-content">
                        <!--begin::Tab panel-->
                        <div id="kt_referrals_1" class="card-body p-0 tab-pane fade show active" role="tabpanel">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                    <!--begin::Thead-->
                                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                        <tr>
                                            <th class="min-w-175px ps-9">Date</th>
                                            <th class="min-w-125px">Amount</th>
                                            <th class="min-w-125px">Type</th>
                                            <th class="min-w-350px">Payment Status</th>
                                            <th class="min-w-125px text-center">Invoice</th>
                                        </tr>
                                    </thead>
                                    <!--end::Thead-->

                                    <!--begin::Tbody-->
                                    <tbody class="fs-6 fw-semibold text-gray-600">

                                        @foreach ($statements as $statement)
                                        <tr>
                                            <td class="ps-9">{{ Carbon\Carbon::parse($statement->created_at)->format('M d, Y') }}</td>
                                            <td>₦{{ number_format($statement->amount, 2, '.', ',') }}</td>
                                            <td>{{ $statement->type }}</td>



                                            @if($statement->payment_status === 'pending')
                                            <td class="text-danger">{{ $statement->payment_status }}</td>
                                            @elseif($statement->payment_status === 'approved')
                                            <td class="text-success">{{ $statement->payment_status }}</td>
                                            @elseif($statement->payment_status === 'paid')
                                            <td class="text-secondary">{{ $statement->payment_status }}</td>
                                            @elseif($statement->payment_status === 'expired')
                                            <td class="text-danger">{{ $statement->payment_status }}</td>
                                            @endif

                                            <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                        </tr>
                                        @endforeach
                                        <!-- <tr>
                                            <td class="ps-9">Nov 01, 2020</td>
                                            <td class="ps-0">102445788</td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Oct 24, 2020</td>
                                            <td class="ps-0">423445721</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                        </tr>

 -->

                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Tab panel-->

                        <!--begin::Tab panel-->
                        <div id="kt_referrals_3" class="card-body p-0 tab-pane fade " role="tabpanel">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                    <!--begin::Thead-->
                                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">

                                    </thead>
                                    <!--end::Thead-->

                                    <!--begin::Tbody-->
                                    <tbody class="fs-6 fw-semibold text-gray-600">

                                        <tr>
                                            <td class="ps-9">Oct 08, 2020</td>
                                            <td class="ps-0">312445984</td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">May 30, 2020</td>
                                            <td class="ps-0">523445943</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-1.30</td>
                                            <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Apr 22, 2020</td>
                                            <td class="ps-0">231445943</td>
                                            <td>Parcel Shipping / Delivery Service App</td>
                                            <td class="text-success">$204.00</td>
                                            <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                        </tr>

                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Tab panel-->

                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Statements-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->



    @endsection
