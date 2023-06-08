@extends('layouts.admin.dash')

@section('content')
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 "

         >

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
        View User Details
            </h1>
    <!--end::Title-->


        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    <a href="../../../index.html" class="text-muted text-hover-primary">
                                Home                            </a>
                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    User Management                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    Users                                            </li>
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
<div id="kt_app_content" class="app-content  flex-column-fluid " >


        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Layout-->
<div class="d-flex flex-column  flex-lg-row">
    <!--begin::Sidebar-->
    <div class="flex-column flex-lg-row-auto  align-items-center w-lg-650px w-xl-750px mb-10">

<!--begin::Card-->
<div class="card mb-5 justify-content-center mb-xl-8">
    <!--begin::Card body-->
    <div class="card-body">
        <!--begin::Summary-->


<!--begin::User Info-->
<div class="d-flex flex-center flex-column py-5">


    <!--begin::Name-->
    <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">
    {{$user->name}}
          </a>
    <!--end::Name-->

    <!--begin::Position-->
    <div class="mb-9">
        <!--begin::Badge-->
        <div class="badge badge-lg badge-light-primary d-inline">{{$user->email}}</div>
        <!--begin::Badge-->
    </div>
    <!--end::Position-->


</div>
<!--end::User Info-->        <!--end::Summary-->

        <!--begin::Details toggle-->
        <div class="d-flex flex-stack fs-4 py-3">
            <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">
                Details
                <span class="ms-2 rotate-180">
                    <i class="ki-duotone ki-down fs-3"></i>                </span>
            </div>

            <!-- <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">
                    Edit
                </a>
            </span> -->
        </div>
        <!--end::Details toggle-->

        <div class="separator"></div>

        <!--begin::Details content-->
        <div id="kt_user_view_details" class="collapse show">
            <div class="pb-5 fs-6">
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5">Serial ID</div>
                    <div class="text-gray-600">{{$user->serial_number}}</div>
                    <!--begin::Details item-->

                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5">Account Name</div>
                    <div class="text-gray-600">{{$user->account_name}}</div>
                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5">Account Number</div>
                    <div class="text-gray-600">{{$user->account_number}}</div>
                    <!--begin::Details item-->
                     <!--begin::Details item-->
                     <div class="fw-bold mt-5">Bank Name</div>
                    <div class="text-gray-600">  {{ $user->bank_name }}</div>
                    <!--begin::Details item-->
                     <!--begin::Details item-->
                     <div class="fw-bold mt-5">Amount Issued</div>
                    <div class="text-gray-600">  {{$walletStatement->amount }}</div>
                    <!--begin::Details item-->
                      <!--begin::Details item-->
                    <div class="fw-bold mt-5">Date Issued</div>
                    <div class="text-gray-600">  {{ date('d M Y, h:i a', strtotime($walletStatement->created_at)) }}</div>
                    <!--begin::Details item-->

                                      <!--begin::Details item-->
                     <div class="fw-bold mt-5">Status</div>
                    <div class="text-gray-600">  {{ $walletStatement->payment_status }}</div>
                    <!--begin::Details item-->
                            </div>
        </div>
        <!--end::Details content-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
           </div>
    <!--end::Sidebar-->






</div>
<!--end::Modal - Add task--><!--end::Modals-->        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->
                </div>
                <!--end::Content wrapper-->

@endsection
