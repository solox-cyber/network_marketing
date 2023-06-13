@extends('layouts.admin.dash')

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
                        Users List
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
                            User Management </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            Users </li>
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
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-2">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span class="path2"></span></i>
                                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                            </div>
                            <!--end::Search-->
                            <div class="dropdown ml-5">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="salesRepDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select Sales Rep
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="salesRepDropdown">
                                    @foreach ($salesReps as $salesRep)
                                    <li><a class="dropdown-item" href="#">{{ $salesRep->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <form action="{{ route('contacts.assign') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <select name="sales_rep_id" id="sales_rep_id" class="form-control">
                                        <option value="">-- Select Sales Rep --</option>
                                        @foreach ($salesReps as $salesRep)
                                        <option value="{{ $salesRep->id }}">{{ $salesRep->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Assign Contacts</button>
                        </div>
                        <!--end::Card title-->



                        <!--begin::Card body-->
                        <div class="card-body py-4">

                        <table>
        <thead>
            <tr>
                <th>Select</th>
                <th>Name</th>
                <th>Email</th>
                <!-- Add other contact details here -->
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>
                    <input type="checkbox" name="contact_ids[]" value="{{ $contact->id }}">
                </td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <!-- Display other contact details here -->
            </tr>
            @endforeach
        </tbody>
    </table>
                            </form>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        @endsection
