@extends('layouts.dash')

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
        Account Settings
            </h1>
    <!--end::Title-->


        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    <a href="../index.html" class="text-muted text-hover-primary">
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
                                                    Account                                            </li>
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

<!--begin::Navbar-->
<div class="card card-flush mb-9" id="kt_user_profile_panel">
    <!--begin::Hero nav-->
    <div class="card-header rounded-top bgi-size-cover h-200px"
    style="background-position: 100% 50%; background-image:url('../assets/media/misc/profile-head-bg.jpg')">
    </div>
    <!--end::Hero nav-->

    <!--begin::Body-->
    <div class="card-body mt-n19">
        <!--begin::Details-->
        <div class="m-0">
            <!--begin: Pic-->
            <div class="d-flex flex-stack align-items-end pb-4 mt-n19">
                <div class="symbol symbol-125px symbol-lg-150px symbol-fixed position-relative mt-n3">
                    <img src="../assets/media/avatars/300-3.jpg" alt="image" class="border border-white border-4" style="border-radius: 20px"/>
                    <div class="position-absolute translate-middle bottom-0 start-100 ms-n1 mb-9 bg-success rounded-circle h-15px w-15px"></div>
                </div>

                <!--begin::Toolbar-->
                <div class="me-0">
                    <button class="btn btn-icon btn-sm btn-active-color-primary  justify-content-end pt-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="fonticon-settings fs-2"></i>
                    </button>

<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
    <!--begin::Heading-->
    <div class="menu-item px-3">
        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
            Payments
        </div>
    </div>
    <!--end::Heading-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Create Invoice
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link flex-stack px-3">
            Create Payment

            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                <i class="ki-duotone ki-information fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Generate Bill
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
        <a href="#" class="menu-link px-3">
            <span class="menu-title">Subscription</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Plans
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Billing
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Statements
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content px-3">
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications"/>
                        <!--end::Input-->

                        <!--end::Label-->
                        <span class="form-check-label text-muted fs-6">
                            Recuring
                        </span>
                        <!--end::Label-->
                    </label>
                    <!--end::Switch-->
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-1">
        <a href="#" class="menu-link px-3">
            Settings
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 3-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Pic-->

            <!--begin::Info-->
            <div class="d-flex flex-stack flex-wrap align-items-end">
                <!--begin::User-->
                <div class="d-flex flex-column">
                    <!--begin::Name-->
                    <div class="d-flex align-items-center mb-2">
                        <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1">Bessie Cooper</a>
                        <a href="#" class="" data-bs-toggle="tooltip" data-bs-placement="right" title="Account is verified">
                            <i class="ki-duotone ki-verify fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i>                        </a>
                    </div>
                    <!--end::Name-->

                    <!--begin::Text-->
                    <span class="fw-bold text-gray-600 fs-6 mb-2 d-block">
                        Design is like a fart. If you have to force it, it’s probably shit.
                    </span>
                    <!--end::Text-->

                    <!--begin::Info-->
                    <div class="d-flex align-items-center flex-wrap fw-semibold fs-7 pe-2">
                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary">
                            UI/UX Design
                        </a>
                        <span class="bullet bullet-dot h-5px w-5px bg-gray-400 mx-3"></span>
                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary">
                            Austin, TX
                        </a>
                        <span class="bullet bullet-dot h-5px w-5px bg-gray-400 mx-3"></span>
                        <a href="#" class="text-gray-400 text-hover-primary">
                            3,450 Followers
                        </a>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->

                <!--begin::Actions-->
                <div class="d-flex">
                    <a href="#" class="btn btn-sm btn-light me-3" id="kt_drawer_chat_toggle">Send Message</a>

                    <button class="btn btn-sm btn-primary" id="kt_user_follow_button">
                        <i class="ki-duotone ki-check fs-2 d-none"></i>
<!--begin::Indicator label-->
<span class="indicator-label">
    Follow</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Details-->
    </div>
</div>
<!--end::Navbar-->

<!--begin::Nav items-->
<div
    id="kt_user_profile_nav"
    class="rounded bg-gray-200 d-flex flex-stack flex-wrap mb-9 p-2"

            data-kt-page-scroll-position="400"
        data-kt-sticky="true"
        data-kt-sticky-name="sticky-profile-navs"
        data-kt-sticky-offset="{default: false, lg: '200px'}"
        data-kt-sticky-width="{target: '#kt_user_profile_panel'}"
        data-kt-sticky-left="auto"
        data-kt-sticky-top="70px"
        data-kt-sticky-animation="false"
        data-kt-sticky-zindex="95"
    >
    <!--begin::Nav-->
    <ul class="nav flex-wrap border-transparent">
                    <!--begin::Nav item-->
            <li class="nav-item my-1">
                <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1
                    " href="overview.html">

                    Overview                </a>
            </li>
            <!--end::Nav item-->
                    <!--begin::Nav item-->
            <li class="nav-item my-1">
                <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1
                    active" href="settings.html">

                    Settings                </a>
            </li>
            <!--end::Nav item-->
                    <!--begin::Nav item-->
            <li class="nav-item my-1">
                <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1
                    " href="security.html">

                    Security                </a>
            </li>
            <!--end::Nav item-->
                    <!--begin::Nav item-->
            <li class="nav-item my-1">
                <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1
                    " href="activity.html">

                    Activity                </a>
            </li>
            <!--end::Nav item-->
                    <!--begin::Nav item-->
            <li class="nav-item my-1">
                <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1
                    " href="billing.html">

                    Billing                </a>
            </li>
            <!--end::Nav item-->
                    <!--begin::Nav item-->
            <li class="nav-item my-1">
                <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1
                    " href="statements.html">

                    Statements                </a>
            </li>
            <!--end::Nav item-->
                    <!--begin::Nav item-->
            <li class="nav-item my-1">
                <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1
                    " href="referrals.html">

                    Referrals                </a>
            </li>
            <!--end::Nav item-->
                    <!--begin::Nav item-->
            <li class="nav-item my-1">
                <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1
                    " href="api-keys.html">

                    API Keys                </a>
            </li>
            <!--end::Nav item-->
                    <!--begin::Nav item-->
            <li class="nav-item my-1">
                <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1
                    " href="logs.html">

                    Logs                </a>
            </li>
            <!--end::Nav item-->
            </ul>
    <!--end::Nav-->
</div>
<!--end::Nav items-->
  @include('setting_methods.profile')
<!--begin::Sign-in Method-->
<div class="card  mb-5 mb-xl-10"   >
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Sign-in Method</h3>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Content-->
    <div id="kt_account_settings_signin_method" class="collapse show">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            <!--begin::Email Address-->
            <div class="d-flex flex-wrap align-items-center">
                <!--begin::Label-->
                <div id="kt_signin_email">
                    <div class="fs-6 fw-bold mb-1">Email Address</div>
                    <div class="fw-semibold text-gray-600">support@keenthemes.com</div>
                </div>
                <!--end::Label-->

                <!--begin::Edit-->
                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                        <div class="row mb-6">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="fv-row mb-0">
                                    <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                    <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-0">
                                    <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button id="kt_signin_submit" type="button" class="btn btn-primary  me-2 px-6">Update Email</button>
                            <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->

                <!--begin::Action-->
                <div id="kt_signin_email_button" class="ms-auto">
                    <button class="btn btn-light btn-active-light-primary">Change Email</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Email Address-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->

            <!--begin::Password-->
            <div class="d-flex flex-wrap align-items-center mb-10">
                <!--begin::Label-->
                <div id="kt_signin_password">
                    <div class="fs-6 fw-bold mb-1">Password</div>
                    <div class="fw-semibold text-gray-600">************</div>
                </div>
                <!--end::Label-->

                <!--begin::Edit-->
                <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                        <div class="row mb-1">
                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="currentpassword" id="currentpassword" />
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="newpassword" id="newpassword" />
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="confirmpassword" id="confirmpassword" />
                                </div>
                            </div>
                        </div>

                        <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>

                        <div class="d-flex">
                            <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                            <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->

                <!--begin::Action-->
                <div id="kt_signin_password_button" class="ms-auto">
                    <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Password-->


<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
            <!--begin::Icon-->
        <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span></i>        <!--end::Icon-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <!--begin::Content-->
            <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Secure Your Account</h4>

                                    <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
                            </div>
            <!--end::Content-->

                    <!--begin::Action-->
            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"  data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication" >
                Enable            </a>
            <!--end::Action-->
            </div>
    <!--end::Wrapper-->
</div>
<!--end::Notice-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Content-->
</div>
<!--end::Sign-in Method-->



<!--begin::Deactivate Account-->
<div class="card  "   >

    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Deactivate Account</h3>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Content-->
    <div id="kt_account_settings_deactivate" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_deactivate_form" class="form">

            <!--begin::Card body-->
            <div class="card-body border-top p-9">

<!--begin::Notice-->
<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
            <!--begin::Icon-->
        <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        <!--end::Icon-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 ">
                    <!--begin::Content-->
            <div class=" fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>

                                    <div class="fs-6 text-gray-700 ">For extra security, this requires you to confirm your email or phone number when you reset yousignr password. <br/><a class="fw-bold" href="#">Learn more</a></div>
                            </div>
            <!--end::Content-->

            </div>
    <!--end::Wrapper-->
</div>
<!--end::Notice-->

                <!--begin::Form input row-->
                <div class="form-check form-check-solid fv-row">
                    <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
                    <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
                </div>
                <!--end::Form input row-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Deactivate Account</button>
            </div>
            <!--end::Card footer-->

        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
<!--end::Deactivate Account-->        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->
                </div>
                <!--end::Content wrapper-->




@endsection
