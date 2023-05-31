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
                        Getting Started
                    </h1>
                    <!--end::Title-->


                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../index.html" class="text-muted text-hover-primary">
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
                            Contacts </li>
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
            <div id="kt_app_content_container" class="app-container  container-xxl ">
                <!--begin::Contacts App- Getting Started-->


                @include('contacts_methods.contactgroup')

                @include('contacts_methods.search')
                 <!--begin::Content-->
    <div class="col-xl-5">
<!--begin::Contacts-->
<div class="card card-flush h-lg-100" id="kt_contacts_main">
    <!--begin::Card header-->
    <div class="card-header pt-7" id="kt_chat_contacts_header">
        <!--begin::Card title-->
        <div class="card-title">
            <i class="ki-duotone ki-badge fs-1 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>            <h2>Contact Details</h2>
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar gap-3">


            <!--begin::Action menu-->
            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </a>
            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="{{ route('edit_contact', ['contact' => $contact->id]) }}" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <!-- <a href="{{route('contacts.destroy',['contact' => $contact->id])}}" class="menu-link px-3" id="kt_contact_delete" data-kt-redirect="getting-started.html">
            Delete
        </a> -->
        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn px-3 text-sm" style="background-color:none!important;">Delete</button>
</form>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->            <!--end::Action menu-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-5">
        <!--begin::Profile-->
        <div class="d-flex gap-7 align-items-center">
            <!--begin::Avatar-->
            <div class="symbol symbol-circle symbol-100px">
            @if($contact->profilePicture)
                            <img src="{{ asset('storage/' . str_replace('public/', '', $contact->profilePicture->path)) }}" alt="Default Profile Picture" >
                            @else
                            <div class="symbol symbol-40px ">
                        <div class="symbol-label fs-2 fw-bold">{{ substr($contact->name, 0, 1) }}</div>
                    </div>
                            @endif
            </div>
            <!--end::Avatar-->

            <!--begin::Contact details-->
            <div class="d-flex flex-column gap-2">
                <!--begin::Name-->
                <h3 class="mb-0">{{ $contact->name }}</h3>
                <!--end::Name-->

                <!--begin::Email-->
                <div class="d-flex align-items-center gap-2">
                    <i class="ki-duotone ki-sms fs-2"><span class="path1"></span><span class="path2"></span></i>                    <a href="#" class="text-muted text-hover-primary">{{ $contact->email }}</a>
                </div>
                <!--end::Email-->

                <!--begin::Phone-->
                <div class="d-flex align-items-center gap-2">
                    <i class="ki-duotone ki-phone fs-2"><span class="path1"></span><span class="path2"></span></i>                    <a href="#" class="text-muted text-hover-primary">{{ $contact->phone }}</a>
                </div>
                <!--end::Phone-->
            </div>
            <!--end::Contact details-->
        </div>
        <!--end::Profile-->

        <!--begin:::Tabs-->
<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8 gap-2">
    <!--begin:::Tab item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary d-flex align-items-center pb-4 active" data-bs-toggle="tab" href="#kt_contact_view_general">
            <i class="ki-duotone ki-home fs-4 me-1"></i>            General
        </a>
    </li>
    <!--end:::Tab item-->

<!--begin:::Tab item-->
<li class="nav-item">
        <a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#kt_contact_view_meetings">
            <i class="ki-duotone ki-calendar-8 fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>            Account Details
        </a>
    </li>
    <!--end:::Tab item-->
</ul>
<!--end:::Tabs-->
        <!--begin::Tab content-->
        <div class="tab-content" id="">
            <!--begin:::Tab pane-->
            <div class="tab-pane fade show active" id="kt_contact_view_general" role="tabpanel">

<!--begin::Additional details-->
<div class="d-flex flex-column gap-5 mt-7">


    <!--begin::City-->
    <div class="d-flex flex-column gap-1">
        <div class="fw-bold text-muted">City</div>
        <div class="fw-bold fs-5">{{ $contact->city }}</div>
    </div>
    <!--end::City-->

    <!--begin::Country-->
    <div class="d-flex flex-column gap-1">
        <div class="fw-bold text-muted">Country</div>
        <div class="fw-bold fs-5">{{ $contact->country }}</div>
    </div>
    <!--end::Country-->

    <!--begin::Notes-->
    <div class="d-flex flex-column gap-1">
        <div class="fw-bold text-muted">Notes</div>
        <p>
        {{ $contact->notes }}
        </p>
    </div>
    <!--end::Notes-->
</div>
<!--end::Additional details-->            </div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_contact_view_meetings" role="tabpanel">

<!--begin::Dates-->
<ul class="nav nav-pills d-flex flex-stack flex-nowrap hover-scroll-x">

        <!--begin::Date-->
        <li class="nav-item me-1">
            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_0">
                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                <span class="fs-6 fw-bold">22</span>
            </a>
        </li>
        <!--end::Date-->

        <!--begin::Date-->
        <li class="nav-item me-1">
            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                <span class="fs-6 fw-bold">23</span>
            </a>
        </li>
        <!--end::Date-->

        <!--begin::Date-->
        <li class="nav-item me-1">
            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_2">
                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                <span class="fs-6 fw-bold">24</span>
            </a>
        </li>
        <!--end::Date-->

        <!--begin::Date-->
        <li class="nav-item me-1">
            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_3">
                <span class="opacity-50 fs-7 fw-semibold">We</span>
                <span class="fs-6 fw-bold">25</span>
            </a>
        </li>
        <!--end::Date-->

        <!--begin::Date-->
        <li class="nav-item me-1">
            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_4">
                <span class="opacity-50 fs-7 fw-semibold">Th</span>
                <span class="fs-6 fw-bold">26</span>
            </a>
        </li>
        <!--end::Date-->

        <!--begin::Date-->
        <li class="nav-item me-1">
            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_5">
                <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                <span class="fs-6 fw-bold">27</span>
            </a>
        </li>
        <!--end::Date-->

        <!--begin::Date-->
        <li class="nav-item me-1">
            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_6">
                <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                <span class="fs-6 fw-bold">28</span>
            </a>
        </li>
        <!--end::Date-->

        <!--begin::Date-->
        <li class="nav-item me-1">
            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_7">
                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                <span class="fs-6 fw-bold">29</span>
            </a>
        </li>
        <!--end::Date-->

        <!--begin::Date-->
        <li class="nav-item me-1">
            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_8">
                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                <span class="fs-6 fw-bold">30</span>
            </a>
        </li>
        <!--end::Date-->

        <!--begin::Date-->
        <li class="nav-item me-1">
            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_9">
                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                <span class="fs-6 fw-bold">31</span>
            </a>
        </li>
        <!--end::Date-->
    </ul>
<!--end::Dates-->

<!--begin::Tab Content-->
<div class="tab-content">
            <!--begin::Day-->
        <div id="kt_schedule_day_0" class="tab-pane fade show ">
                                            <!--begin::Time-->
                <div class="d-flex flex-stack position-relative mt-8">
                    <!--begin::Bar-->
                    <div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
                    <!--end::Bar-->

                    <!--begin::Info-->
                    <div class="fw-semibold ms-5 text-gray-600">
                        <!--begin::Time-->
                        <div class="fs-5">
                            14:30 - 15:30
                            <span class="fs-7 text-gray-400 text-uppercase">
                                pm                            </span>
                        </div>
                        <!--end::Time-->

                        <!--begin::Title-->
                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                            Committee Review Approvals                        </a>
                        <!--end::Title-->

                        <!--begin::User-->
                        <div class="text-gray-400">
                            Lead by <a href="#">Walter White</a>
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Info-->

                    <!--begin::Action-->
                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                    <!--end::Action-->
                </div>
                <!--end::Time-->
                                            <!--begin::Time-->
                <div class="d-flex flex-stack position-relative mt-8">
                    <!--begin::Bar-->
                    <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
                    <!--end::Bar-->

                    <!--begin::Info-->
                    <div class="fw-semibold ms-5 text-gray-600">
                        <!--begin::Time-->
                        <div class="fs-5">
                            16:30 - 17:30
                            <span class="fs-7 text-gray-400 text-uppercase">
                                pm                            </span>
                        </div>
                        <!--end::Time-->

                        <!--begin::Title-->
                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                            Project Review & Testing                        </a>
                        <!--end::Title-->

                        <!--begin::User-->
                        <div class="text-gray-400">
                            Lead by <a href="#">Bob Harris</a>
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Info-->

                    <!--begin::Action-->
                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                    <!--end::Action-->
                </div>
                <!--end::Time-->
                                            <!--begin::Time-->
                <div class="d-flex flex-stack position-relative mt-8">
                    <!--begin::Bar-->
                    <div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
                    <!--end::Bar-->

                    <!--begin::Info-->
                    <div class="fw-semibold ms-5 text-gray-600">
                        <!--begin::Time-->
                        <div class="fs-5">
                            9:00 - 10:00
                            <span class="fs-7 text-gray-400 text-uppercase">
                                am                            </span>
                        </div>
                        <!--end::Time-->

                        <!--begin::Title-->
                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                            Marketing Campaign Discussion                        </a>
                        <!--end::Title-->

                        <!--begin::User-->
                        <div class="text-gray-400">
                            Lead by <a href="#">Walter White</a>
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Info-->

                    <!--begin::Action-->
                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                    <!--end::Action-->
                </div>
                <!--end::Time-->
                    </div>
        <!--end::Day-->
                   <!--end::Item-->
   </div>
   <!--end::Timeline-->            </div>
            <!--end:::Tab pane-->
        </div>
        <!--end::Tab content-->


    </div>
    <!--end::Card body-->
</div>
<!--end::Contacts-->
            </div>
            <!--end::Contacts App- Getting Started-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
@endsection
