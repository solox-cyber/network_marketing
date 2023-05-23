
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
        Security
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
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Filter menu-->
        <div class="d-flex">
            <select name="campaign-type" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body w-175px">
                <option value="Twitter" selected="selected">Select Campaign</option>
                <option value="Twitter">Twitter Campaign</option>
                <option value="Twitter">Facebook Campaign</option>
                <option value="Twitter">Adword Campaign</option>
                <option value="Twitter">Carbon Campaign</option>
            </select>

            <a href="#" class="btn btn-icon btn-sm btn-success flex-shrink-0 ms-4"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
                <i class="ki-duotone ki-plus fs-2"></i>
            </a>
        </div>
        <!--end::Filter menu-->


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
                    " href="settings.html">

                    Settings                </a>
            </li>
            <!--end::Nav item-->
                    <!--begin::Nav item-->
            <li class="nav-item my-1">
                <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1
                    active" href="security.html">

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
<!--begin::Row-->
<div class="row g-xxl-9">
    <!--begin::Col-->
    <div class="col-xxl-8">
         <!--begin::Security summary-->
<div class="card card-xxl-stretch mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
        <!--begin::Title-->
        <div class="card-title">
            <h3 class="m-0 text-gray-900">Security Summary</h3>
        </div>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-line-tabs nav-stretch border-transparent fs-5 fw-bold" id="kt_security_summary_tabs">
                <li class="nav-item">
                    <a class="nav-link text-active-primary active" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_security_summary_tab_pane_hours">12 Hours</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab" id="kt_security_summary_tab_day" href="#kt_security_summary_tab_pane_day">Day</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab" id="kt_security_summary_tab_week" href="#kt_security_summary_tab_pane_week">Week</a>
                </li>
            </ul>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-7 pb-0 px-0">
        <!--begin::Tab content-->
        <div class="tab-content">
            <!--begin::Tab panel-->
            <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_hours" role="tabpanel">
                <!--begin::Row-->
                <div class="row p-0 mb-5 px-9">
                    <!--begin::Col-->
                    <div class="col">
                        <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                            <span class="fs-4 fw-semibold text-success d-block">User Sign-in</span>
                            <span class="fs-2hx fw-bold text-gray-900" data-kt-countup="true" data-kt-countup-value="36899">0</span>
                        </div>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col">
                        <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                            <span class="fs-4 fw-semibold text-primary d-block">Admin Sign-in</span>
                            <span class="fs-2hx fw-bold text-gray-900" data-kt-countup="true" data-kt-countup-value="72">0</span>
                        </div>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col">
                        <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                            <span class="fs-4 fw-semibold text-danger d-block">Failed Attempts</span>
                            <span class="fs-2hx fw-bold text-gray-900" data-kt-countup="true" data-kt-countup-value="291">0</span>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

                <!--begin::Container-->
                <div class="pt-2">
                    <!--begin::Tabs-->
                    <div class="d-flex align-items-center pb-6 px-9">
                        <!--begin::Title-->
                        <h3 class="m-0 text-gray-900 flex-grow-1">
                            Activity Chart
                        </h3>
                        <!--end::Title-->

                        <!--begin::Nav pills-->
                        <ul class="nav nav-pills nav-line-pills border rounded p-1">
                            <li class="nav-item me-2">
                                <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-400 py-2 px-5 fs-6 fw-semibold active" data-bs-toggle="tab" id="kt_security_summary_tab_hours_agents" href="#kt_security_summary_tab_pane_hours_agents">
                                    Agents
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-400 py-2 px-5 fs-6 fw-semibold" data-bs-toggle="tab" id="kt_security_summary_tab_hours_clients" href="#kt_security_summary_tab_pane_hours_clients">
                                    Clients
                                </a>
                            </li>
                        </ul>
                        <!--end::Nav pills-->
                    </div>
                    <!--end::Tabs-->

                    <!--begin::Tab content-->
                    <div class="tab-content px-3">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_hours_agents" role="tabpanel">
                            <!--begin::Chart-->
                            <div id="kt_security_summary_chart_hours_agents" style="height: 300px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Tab pane-->

                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_security_summary_tab_pane_hours_clients" role="tabpanel">
                            <!--begin::Chart-->
                            <div id="kt_security_summary_chart_hours_clients" style="height: 300px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Tab panel-->

            <!--begin::Tab panel-->
            <div class="tab-pane fade" id="kt_security_summary_tab_pane_day" role="tabpanel">
                <!--begin::Row-->
                <div class="row p-0 mb-5 px-9">
                    <!--begin::Col-->
                    <div class="col">
                        <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                            <span class="fs-4 fw-semibold text-success d-block">User Sign-in</span>
                            <span class="fs-2hx fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="30467">0</span>
                        </div>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col">
                        <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                            <span class="fs-4 fw-semibold text-primary d-block">Admin Sign-in</span>
                            <span class="fs-2hx fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="120">0</span>
                        </div>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col">
                        <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                            <span class="fs-4 fw-semibold text-danger d-block">Failed Attempts</span>
                            <span class="fs-2hx fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="23">0</span>
                        </div>
                    </div>
                </div>
                <!--end::Row-->

                <!--begin::Container-->
                <div class="pt-2">
                    <!--begin::Tabs-->
                    <div class="d-flex align-items-center pb-9 px-9">
                        <h3 class="m-0 text-gray-800 flex-grow-1">Activity Chart</h3>

                        <!--begin::Nav pills-->
                        <ul class="nav nav-pills nav-line-pills border rounded p-1">
                            <li class="nav-item me-2">
                                <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-400 py-2 px-5 fs-6 fw-semibold active" data-bs-toggle="tab" id="kt_security_summary_tab_day_agents" href="#kt_security_summary_tab_pane_day_agents">
                                    Agents
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-400 py-2 px-5 fs-6 fw-semibold" data-bs-toggle="tab" id="kt_security_summary_tab_day_clients" href="#kt_security_summary_tab_pane_day_clients">
                                    Clients
                                </a>
                            </li>
                        </ul>
                        <!--end::Nav pills-->
                    </div>
                    <!--end::Tabs-->

                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_day_agents" role="tabpanel">
                            <!--begin::Chart-->
                            <div id="kt_security_summary_chart_day_agents" style="height: 300px"></div>
                            <!--end::Chart-->
                        </div>
                        <div class="tab-pane fade" id="kt_security_summary_tab_pane_day_clients" role="tabpanel">
                            <!--begin::Chart-->
                            <div id="kt_security_summary_chart_day_clients" style="height: 300px"></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Tab panel-->

            <!--begin::Tab panel-->
            <div class="tab-pane fade" id="kt_security_summary_tab_pane_week" role="tabpanel">
                <!--begin::Row-->
                <div class="row p-0 mb-5 px-9">
                    <!--begin::Col-->
                    <div class="col">
                        <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                            <span class="fs-lg-4 fs-6 fw-semibold text-success d-block">User Sign-in</span>

                            <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="340">0</span>
                        </div>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col">
                        <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                            <span class="fs-lg-4 fs-6 fw-semibold text-primary d-block">Admin Sign-in</span>

                            <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="90">0</span>
                        </div>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col">
                        <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                            <span class="fs-lg-4 fs-6 fw-semibold text-danger d-block">Failed Attempts</span>

                            <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="230">0</span>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

                <!--begin::Container-->
                <div class="pt-2">
                    <!--begin::Tabs-->
                    <div class="d-flex align-items-center pb-9 px-9">
                        <h3 class="m-0 text-gray-800 flex-grow-1">Activity Chart</h3>

                        <!--begin::Nav pills-->
                        <ul class="nav nav-pills nav-line-pills border rounded p-1">
                            <li class="nav-item me-2">
                                <a class="nav-link btn btn-active-light py-2 px-5 fs-6 btn-active-color-gray-700 btn-color-gray-400 fw-semibold active" data-bs-toggle="tab" id="kt_security_summary_tab_week_agents" href="#kt_security_summary_tab_pane_week_agents">
                                    Agents
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link btn btn-active-light py-2 px-5 btn-active-color-gray-700 btn-color-gray-400 fs-6 fw-semibold" data-bs-toggle="tab" id="kt_security_summary_tab_week_clients" href="#kt_security_summary_tab_pane_week_clients">
                                    Clients
                                </a>
                            </li>
                        </ul>
                        <!--end::Nav pills-->
                    </div>
                    <!--end::Tabs-->

                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_week_agents" role="tabpanel">
                            <!--begin::Chart-->
                            <div id="kt_security_summary_chart_week_agents" style="height: 300px"></div>
                            <!--end::Chart-->
                        </div>
                        <div class="tab-pane fade" id="kt_security_summary_tab_pane_week_clients" role="tabpanel">
                            <!--begin::Chart-->
                            <div id="kt_security_summary_chart_week_clients" style="height: 300px"></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Tab panel-->
        </div>
        <!--end::Tab content-->
    </div>
    <!--end::Body-->
</div>
<!--end::Security summary-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xxl-4">
        <!--begin::Security recent alerts-->
<div class="card card-xxl-stretch-50 mb-5 mb-xl-10">
    <!--begin::Body-->
    <div class="card-body pt-5">
        <!--begin::Carousel-->
        <div id="kt_security_recent_alerts" class="carousel carousel-custom carousel-stretch slide" data-bs-ride="carousel" data-bs-interval="8000">
            <!--begin::Heading-->
            <div class="d-flex flex-stack align-items-center flex-wrap">
                <h4 class="text-gray-400 fw-semibold mb-0 pe-2">
                    Recent Alerts
                </h4>

                <!--begin::Carousel Indicators-->
                <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                    <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="0" class="ms-1 active"></li>
                    <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="1" class="ms-1"></li>
                    <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="2" class="ms-1"></li>
                </ol>
                <!--end::Carousel Indicators-->
            </div>
            <!--end::Heading-->

            <!--begin::Carousel inner-->
			<div class="carousel-inner pt-6">
                <!--begin::Item-->
				<div class="carousel-item active">
                    <!--begin::Wrapper-->
                    <div class="carousel-wrapper">
                        <!--begin::Description-->
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">
                                Latest Announcements
                            </a>

                            <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                In the last year, you’ve probably had to adapt to new ways of living and working.
                            </p>
                        </div>
                        <!--end::Description-->

                        <!--begin::Summary-->
                        <div class="d-flex flex-stack pt-8">
                            <span class="badge badge-light-primary fs-7 fw-bold me-2">Jun 10, 2021</span>

                            <a href="#" class="btn btn-sm btn-light">Learn More</a>
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Wrapper-->
				</div>
                <!--end::Item-->

                <!--begin::Item-->
				<div class="carousel-item">
                    <!--begin::Wrapper-->
                    <div class="carousel-wrapper">
                        <!--begin::Description-->
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="fw-bold text-dark text-hover-primary">
                                Login Attempt Failed
                            </a>

                            <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                As we approach one year of working remotely, we wanted to take a look back
                                and share some ways teams around the world have collaborated effectively.
                            </p>
                        </div>
                        <!--end::Description-->

                        <!--begin::Summary-->
                        <div class="d-flex flex-stack pt-8">
                            <span class="badge badge-light-primary fs-7 fw-bold me-2">Oct 05, 2021</span>

                            <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Join</a>
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Wrapper-->
				</div>
                <!--end::Item-->

                <!--begin::Item-->
				<div class="carousel-item">
                    <!--begin::Wrapper-->
                    <div class="carousel-wrapper">
                        <!--begin::Description-->
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="fw-bold text-dark text-hover-primary">
                                Top Picks For You
                            </a>

                            <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                Today we are excited to share an amazing certification opportunity which is designed to teach you everything
                            </p>
                        </div>
                        <!--end::Description-->

                        <!--begin::Summary-->
                        <div class="d-flex flex-stack pt-8">
                            <span class="badge badge-light-primary fs-7 fw-bold me-2">Sep 11, 2021</span>

                            <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Collaborate</a>
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Wrapper-->
				</div>
                <!--end::Item-->
			</div>
            <!--end::Carousel inner-->
		</div>
        <!--end::Carousel-->
    </div>
    <!--end::Body-->
</div>
<!--end::Security recent alerts-->
        <!--begin::Security guidelines-->
<div class="card card-xxl-stretch-50 mb-5 mb-xl-10">
    <!--begin::Body-->
    <div class="card-body pt-5">
        <!--begin::Carousel-->
        <div id="kt_security_guidelines" class="carousel carousel-custom carousel-stretch slide" data-bs-ride="carousel" data-bs-interval="8000">
            <!--begin::Heading-->
            <div class="d-flex flex-stack align-items-center flex-wrap">
                <h4 class="text-gray-400 fw-semibold mb-0 pe-2">
                    Security Guidelines
                </h4>

                <!--begin::Carousel Indicators-->
                <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                    <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="0" class="ms-1 active"></li>
                    <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="1" class="ms-1"></li>
                    <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="2" class="ms-1"></li>
                </ol>
                <!--end::Carousel Indicators-->
            </div>
            <!--end::Heading-->

            <!--begin::Carousel inner-->
			<div class="carousel-inner pt-6">
                <!--begin::Item-->
				<div class="carousel-item active">
                    <!--begin::Wrapper-->
                    <div class="carousel-wrapper">
                        <!--begin::Description-->
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">
                                Get Start Your Security
                            </a>

                            <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                In the last year, you’ve probably had to adapt to new ways of living and working.
                            </p>
                        </div>
                        <!--end::Description-->

                        <!--begin::Summary-->
                        <div class="d-flex flex-stack pt-8">
                            <span class="text-muted fw-semibold fs-6 pe-2">34, Soho Avenue, Tokio</span>

                            <a href="#" class="btn btn-sm btn-light">Register</a>
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Wrapper-->
				</div>
                <!--end::Item-->

                <!--begin::Item-->
				<div class="carousel-item">
                    <!--begin::Wrapper-->
                    <div class="carousel-wrapper">
                        <!--begin::Description-->
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="fw-bold text-dark text-hover-primary">
                                Security Policy Update
                            </a>

                            <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                As we approach one year of working remotely, we wanted to take a look back
                                and share some ways teams around the world have collaborated effectively.
                            </p>
                        </div>
                        <!--end::Description-->

                        <!--begin::Summary-->
                        <div class="d-flex flex-stack pt-8">
                            <span class="badge badge-light-primary fs-7 fw-bold me-2">Oct 05, 2021</span>

                            <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Explore</a>
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Wrapper-->
				</div>
                <!--end::Item-->

                <!--begin::Item-->
				<div class="carousel-item">
                    <!--begin::Wrapper-->
                    <div class="carousel-wrapper">
                        <!--begin::Description-->
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="fw-bold text-dark text-hover-primary">
                                Terms Of Use Document
                            </a>

                            <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                Today we are excited to share an amazing certification
                                opportunity which is designed to teach you everything
                            </p>
                        </div>
                        <!--end::Description-->

                        <!--begin::Summary-->
                        <div class="d-flex flex-stack pt-8">
                            <span class="badge badge-light-primary fs-7 fw-bold me-2">Nov 10, 2021</span>

                            <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Discover</a>
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Wrapper-->
				</div>
                <!--end::Item-->
			</div>
            <!--end::Carousel inner-->
		</div>
        <!--end::Carousel-->
    </div>
    <!--end::Body-->
</div>
<!--end::Security guidelines-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->


<!--begin::Login sessions-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header">
        <!--begin::Heading-->
        <div class="card-title">
            <h3>Login Sessions</h3>
        </div>
        <!--end::Heading-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <div class="my-1 me-4">
                <!--begin::Select-->
                <select class="form-select form-select-sm form-select-solid w-125px" data-control="select2" data-placeholder="Select Hours" data-hide-search="true">
                    <option value="1" selected>1 Hours</option>
                    <option value="2">6 Hours</option>
                    <option value="3">12 Hours</option>
                    <option value="4">24 Hours</option>
                </select>
                <!--end::Select-->
            </div>

            <a href="#" class="btn btn-sm btn-primary my-1">
                View All
            </a>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-0">
        <!--begin::Table wrapper-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                <!--begin::Thead-->
                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                    <tr>
                        <th class="min-w-250px">Location</th>
                        <th class="min-w-100px">Status</th>
                        <th class="min-w-150px">Device</th>
                        <th class="min-w-150px">IP Address</th>
                        <th class="min-w-150px">Time</th>
                    </tr>
                </thead>
                <!--end::Thead-->

                <!--begin::Tbody-->
                <tbody class="fw-6 fw-semibold text-gray-600">
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">USA(5)</a>
                            </td>

                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                            </td>

                            <td>Chrome - Windows</td>

                            <td>236.125.56.78</td>

                            <td>2 mins ago</td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">United Kingdom(10)</a>
                            </td>

                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                            </td>

                            <td>Safari - Mac OS</td>

                            <td>236.125.56.78</td>

                            <td>10 mins ago</td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Norway(-)</a>
                            </td>

                            <td>
                                <span class="badge badge-light-danger fs-7 fw-bold">ERR</span>
                            </td>

                            <td>Firefox - Windows</td>

                            <td>236.125.56.10</td>

                            <td>20 mins ago</td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Japan(112)</a>
                            </td>

                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                            </td>

                            <td>iOS - iPhone Pro</td>

                            <td>236.125.56.54</td>

                            <td>30 mins ago</td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Italy(5)</a>
                            </td>

                            <td>
                                <span class="badge badge-light-warning fs-7 fw-bold">WRN</span>
                            </td>

                            <td>Samsung Noted 5- Android</td>

                            <td>236.100.56.50</td>

                            <td>40 mins ago</td>
                        </tr>

                </tbody>
                <!--end::Tbody-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table wrapper-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Login sessions-->


<!--begin::License usage-->
<div class="card ">
    <!--begin::Card header-->
    <div class="card-header">
        <!--begin::Heading-->
        <div class="card-title">
            <h3>License Usage</h3>
        </div>
        <!--end::Heading-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <div class="my-1 me-4">
                <!--begin::Select-->
                <select class="form-select form-select-sm form-select-solid w-125px" data-control="select2" data-placeholder="Select Hours" data-hide-search="true">
                    <option value="1">1 Hours</option>
                    <option value="2">6 Hours</option>
                    <option value="3" selected>12 Hours</option>
                    <option value="4">24 Hours</option>
                </select>
                <!--end::Select-->
            </div>

            <a href="#" class="btn btn-sm btn-primary my-1">
                Download Report
            </a>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-0">
        <!--begin::Table wrapper-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle table-row-bordered table-row-solid gy-4" id="kt_security_license_usage_table">
                <!--begin::Thead-->
                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                    <tr>
                        <th class="w-150px ps-9">Status</th>
                        <th class="px-0 min-w-250px">Operator</th>
                        <th class="min-w-150px">IP Address</th>
                        <th class="min-w-150px">Created</th>
                        <th class="pe-0 min-w-150px">API Keys</th>
                        <th class="min-w-50px"></th>
                    </tr>
                </thead>
                <!--end::Thead-->

                <!--begin::Tbody-->
                <tbody class="fw-6 fw-semibold text-gray-600">
                                            <tr>
                            <td class="ps-9">
                                <span class="badge badge-light-success fs-7 fw-bold">License</span>
                            </td>

                            <td class="ps-0">
                                <a href="#" class="text-hover-primary text-gray-600">DSI: Workstation 2</a>
                            </td>

                            <td>236.125.56.78</td>

                            <td>2 mins ago</td>

                            <td data-bs-target="license">fftt456765gjkkjhi8306767</td>

                            <td class="ps-5">
                                                                <button type="button" data-action="copy" class="btn btn-active-color-primary btn-icon btn-color-gray-400 btn-sm btn-outline-light d-">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="ps-9">
                                <span class="badge badge-light-danger fs-7 fw-bold">Unknown</span>
                            </td>

                            <td class="ps-0">
                                <a href="#" class="text-hover-primary text-gray-600">ReXe: Workstation 29</a>
                            </td>

                            <td>236.125.56.78</td>

                            <td>3 mins ago</td>

                            <td data-bs-target="license">none</td>

                            <td class="ps-5">
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="ps-9">
                                <span class="badge badge-light-success fs-7 fw-bold">License</span>
                            </td>

                            <td class="ps-0">
                                <a href="#" class="text-hover-primary text-gray-600">RamenLC: Workstation 2</a>
                            </td>

                            <td>654.125.56.34</td>

                            <td>5 mins ago</td>

                            <td data-bs-target="license">ertt456765gjkkjhi83034344</td>

                            <td class="ps-5">
                                                                <button type="button" data-action="copy" class="btn btn-active-color-primary btn-icon btn-color-gray-400 btn-sm btn-outline-light d-">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="ps-9">
                                <span class="badge badge-light-success fs-7 fw-bold">License</span>
                            </td>

                            <td class="ps-0">
                                <a href="#" class="text-hover-primary text-gray-600">Nest Five: Workstation 86</a>
                            </td>

                            <td>423.125.56.54</td>

                            <td>1 mins ago</td>

                            <td data-bs-target="license">dctt456765gjkkjhi83093985</td>

                            <td class="ps-5">
                                                                <button type="button" data-action="copy" class="btn btn-active-color-primary btn-icon btn-color-gray-400 btn-sm btn-outline-light d-">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="ps-9">
                                <span class="badge badge-light-danger fs-7 fw-bold">Unknown</span>
                            </td>

                            <td class="ps-0">
                                <a href="#" class="text-hover-primary text-gray-600">DSI: Workstation 2</a>
                            </td>

                            <td>236.125.56.78</td>

                            <td>7 mins ago</td>

                            <td data-bs-target="license">none</td>

                            <td class="ps-5">
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="ps-9">
                                <span class="badge badge-light-success fs-7 fw-bold">License</span>
                            </td>

                            <td class="ps-0">
                                <a href="#" class="text-hover-primary text-gray-600">ReXe: Workstation 7</a>
                            </td>

                            <td>745.234.56.21</td>

                            <td>3 mins ago</td>

                            <td data-bs-target="license">uytt456765gjkkjhi4312673</td>

                            <td class="ps-5">
                                                                <button type="button" data-action="copy" class="btn btn-active-color-primary btn-icon btn-color-gray-400 btn-sm btn-outline-light d-">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="ps-9">
                                <span class="badge badge-light-warning fs-7 fw-bold">To be Paid</span>
                            </td>

                            <td class="ps-0">
                                <a href="#" class="text-hover-primary text-gray-600">Swedline: Workstation 54</a>
                            </td>

                            <td>441.967.56.54</td>

                            <td>8 mins ago</td>

                            <td data-bs-target="license">ygd456765gjkkjhi83095427</td>

                            <td class="ps-5">
                                                                <button type="button" data-action="copy" class="btn btn-active-color-primary btn-icon btn-color-gray-400 btn-sm btn-outline-light d-">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                                                            </td>
                        </tr>

                </tbody>
                <!--end::Tbody-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table wrapper-->
    </div>
    <!--end::Card body-->
</div>
<!--end::License usage-->
        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->
                </div>
                <!--end::Content wrapper-->


<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer " >
            <!--begin::Footer container-->
        <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
            <!--begin::Copyright-->
<div class="text-dark order-2 order-md-1">
    <span class="text-muted fw-semibold me-1">2023&copy;</span>
    <a href="https://keenthemes.com/" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
</div>
<!--end::Copyright-->

<!--begin::Menu-->
<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
    <li class="menu-item"><a href="https://keenthemes.com/" target="_blank" class="menu-link px-2">About</a></li>

    <li class="menu-item"><a href="https://devs.keenthemes.com/" target="_blank" class="menu-link px-2">Support</a></li>

    <li class="menu-item"><a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" target="_blank" class="menu-link px-2">Purchase</a></li>
</ul>
<!--end::Menu-->        </div>
        <!--end::Footer container-->
    </div>
<!--end::Footer-->                            </div>
            <!--end:::Main-->


                    </div>
        <!--end::Wrapper-->


            </div>
    <!--end::Page-->
</div>
<!--end::App-->


    <!--begin::App layout builder-->
<div
	id="kt_app_layout_builder"
	class="bg-body"

	data-kt-drawer="true"
	data-kt-drawer-name="app-settings"
	data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'300px', 'lg': '380px'}"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_app_layout_builder_toggle"
	data-kt-drawer-close="#kt_app_layout_builder_close">

	<!--begin::Card-->
	<div class="card border-0 shadow-none rounded-0 w-100">
		<!--begin::Card header-->
<div
    class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
    id="kt_app_layout_builder_header"
    style="background-image:url('../assets/media/misc/layout/customizer-header-bg.jpg')">

    <!--begin::Card title-->
    <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
        Keen Builder

        <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
            Get your product deeply customized
        </small>
    </h3>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
        <button
			type="button"
			class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1"
			id="kt_app_layout_builder_close"
		>
            <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span class="path2"></span></i>        </button>
    </div>
    <!--end::Card toolbar-->
</div>
<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body position-relative" id="kt_app_layout_builder_body">
			<!--begin::Content-->
			<div id="kt_app_settings_content"
				class="position-relative scroll-y me-n5 pe-5"

				data-kt-scroll="true"
				data-kt-scroll-height="auto"
				data-kt-scroll-wrappers="#kt_app_layout_builder_body"
				data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
				data-kt-scroll-offset="5px">

				<!--begin::Form-->
				<form class="form" method="POST" id="kt_app_layout_builder_form" action="https://preview.keenthemes.com/keen/demo1/index.php">
    				<input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]"/>

<!--begin::Card body-->
<div class="card-body p-0">

<!--begin::Form group-->
<div class="form-group">
	<!--begin::Heading-->
	<div class="mb-6">
		<h4 class="fw-bold text-dark">Theme Mode</h4>
		<div class="fw-semibold text-muted fs-7 d-block lh-1">
			Enjoy Dark & Light modes.

			<a class="fw-semibold" href="https://preview.keenthemes.com/html/keen/docs/getting-started/dark-mode" target="_blank">See docs</a>
		</div>
	</div>
	<!--end::Heading-->

	<!--begin::Options-->
	<div class="row " data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">
					<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success">
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="../assets/media/preview/demos/demo1/light-ltr.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
						<input class="form-check-input" type="radio" value="light" name="theme_mode" id="kt_layout_builder_theme_mode_light"/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Light						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->
					<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success">
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="../assets/media/preview/demos/demo1/dark-ltr.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
						<input class="form-check-input" type="radio" value="dark" name="theme_mode" id="kt_layout_builder_theme_mode_dark"/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Dark						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->

	</div>
	<!--end::Options-->
</div>
<!--end::Form group-->
					<div class="separator separator-dashed my-5"></div>

						<!--begin::Form group-->
<div class="form-group d-flex flex-stack">
	<!--begin::Heading-->
	<div class="d-flex flex-column">
		<h4 class="fw-bold text-dark">RTL Mode</h4>
		<div class="fs-7 fw-semibold text-muted">
			Change Language Direction.

			<a class="fw-semibold" href="https://preview.keenthemes.com/html/keen/docs/getting-started/rtl" target="_blank">See docs</a>
		</div>
	</div>
	<!--end::Heading-->

	<!--begin::Option-->
	<div class="d-flex justify-content-end">
		<!--begin::Check-->
		<div class="form-check form-check-custom form-check-solid form-check-success form-switch">
			<input type="hidden" value="false" name="layout-builder[layout][app][general][rtl]"/>

			<input
				class="form-check-input w-45px h-30px"
				type="checkbox"
				value="true"
				name="layout-builder[layout][app][general][rtl]"
							/>
		</div>
		<!--end::Check-->
	</div>
	<!--end::Option-->
</div>
<!--end::Form group-->
					<div class="separator separator-dashed my-5"></div>


<!--begin::Form group-->
<div class="form-group ">
	<!--begin::Heading-->
	<div class="d-flex flex-column mb-4">
		<h4 class="fw-bold text-dark">Width Mode</h4>
		<div class="fs-7 fw-semibold text-muted">Page width options</div>
	</div>
	<!--end::Heading-->

	<!--begin::Options-->
	<div class="d-flex gap-7">
								<!--begin::Check-->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input
					class="form-check-input" type="radio"
					checked

					value="default"
					id="kt_layout_builder_page_width_default"
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_default">
					Default				</label>
				<!--end::Label-->
			</div>
			<!--end::Check-->
								<!--begin::Check-->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input
					class="form-check-input" type="radio"


					value="fluid"
					id="kt_layout_builder_page_width_fluid"
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fluid">
					Fluid				</label>
				<!--end::Label-->
			</div>
			<!--end::Check-->
								<!--begin::Check-->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input
					class="form-check-input" type="radio"


					value="fixed"
					id="kt_layout_builder_page_width_fixed"
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fixed">
					Fixed				</label>
				<!--end::Label-->
			</div>
			<!--end::Check-->
			</div>
	<!--end::Options-->
</div>
<!--end::Form group-->
					<div class="separator separator-dashed my-5"></div>


<!--begin::Form group-->
<div class="form-group ">
	<!--begin::Heading-->
	<div class="d-flex flex-column mb-4">
		<h4 class="fw-bold text-dark">KeenIcons Style</h4>

		<div>
			<span class="fs-7 fw-semibold text-muted">Select global UI icons style.</span>
			<a class="fw-semibold" href="https://preview.keenthemes.com/html/keen/docs/icons/keenicons" target="_blank">Learn more</a>
		</div>
	</div>
	<!--end::Heading-->

	<!--begin::Options-->
	<div class="d-flex flex-stack gap-3 " data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">

			<!--begin::Option-->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover active">
				<!--begin::Image-->
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-duotone ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"><span class="path1"></span><span class="path2"></span></i>
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Duotone</span>
				</div>
				<!--end::Image-->

				<!--begin::Check-->
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input
						class="form-check-input"
						type="radio"
						value="duotone"
						checked
						name="layout-builder[layout][app][general][icons]"/>
				</div>
				<!--end::Check-->
			</label>
			<!--end::Option-->

			<!--begin::Option-->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover ">
				<!--begin::Image-->
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-outline ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Outline</span>
				</div>
				<!--end::Image-->

				<!--begin::Check-->
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input
						class="form-check-input"
						type="radio"
						value="outline"

						name="layout-builder[layout][app][general][icons]"/>
				</div>
				<!--end::Check-->
			</label>
			<!--end::Option-->

			<!--begin::Option-->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover ">
				<!--begin::Image-->
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-solid ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Solid</span>
				</div>
				<!--end::Image-->

				<!--begin::Check-->
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input
						class="form-check-input"
						type="radio"
						value="solid"

						name="layout-builder[layout][app][general][icons]"/>
				</div>
				<!--end::Check-->
			</label>
			<!--end::Option-->

	</div>
	<!--end::Options-->
</div>
<!--end::Form group-->
					<div class="separator separator-dashed my-5"></div>

						<!--begin::Form group-->
<div class="form-group">
	<!--begin::Heading-->
	<div class="mb-6">
		<h4 class="fw-bold text-dark">Layouts</h4>

		<span class="fw-semibold text-muted fs-7 lh-1">
			4 main layouts.
		</span>

		<a href="../layout-builder.html" class="fw-semibold text-primary">More layout options</a>
	</div>
	<!--end::Heading-->

	<!--begin::Options-->
	<div class="row gy-3" data-kt-buttons="true" data-kt-buttons-target=".form-check-image:not(.disabled),.form-check-input:not([disabled])">
								<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success active  active"  >
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="../assets/media/misc/layout/dark-sidebar.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
						<input
							class="form-check-input" type="radio"
							checked
							value="dark-sidebar"
							name="layout-builder[layout][app][general][layout]"
						/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Dark Sidebar						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->
								<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success   "  >
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="../assets/media/misc/layout/light-sidebar.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
						<input
							class="form-check-input" type="radio"

							value="light-sidebar"
							name="layout-builder[layout][app][general][layout]"
						/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Light Sidebar						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->
								<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success   "  >
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="../assets/media/misc/layout/dark-header.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
						<input
							class="form-check-input" type="radio"

							value="dark-header"
							name="layout-builder[layout][app][general][layout]"
						/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Dark Header						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->
								<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success   "  >
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="../assets/media/misc/layout/light-header.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
						<input
							class="form-check-input" type="radio"

							value="light-header"
							name="layout-builder[layout][app][general][layout]"
						/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Light Header						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->

	</div>
	<!--end::Options-->
</div>
<!--end::Form group-->

	</div>
<!--end::Card body-->				</form>
				<!--end::Form-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Card body-->

		<!--begin::Card footer-->
<div class="card-footer border-0 d-flex gap-3 pb-9 pt-0" id="kt_app_layout_builder_footer">
    <button type="button" id="kt_app_layout_builder_preview" class="btn btn-primary flex-grow-1 fw-semibold">

<!--begin::Indicator label-->
<span class="indicator-label">
    Preview</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->    </button>

    <button type="button" id="kt_app_layout_builder_reset"  class="btn btn-light flex-grow-1 fw-semibold">

<!--begin::Indicator label-->
<span class="indicator-label">
    Reset</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->    </button>
</div>
<!--end::Card footer-->	</div>
	<!--end::Card-->
</div>
<!--end::App layout builder-->

<!--begin::App settings toggle-->
<button
  	id="kt_app_layout_builder_toggle"
    class="btn btn-dark app-layout-builder-toggle lh-1 py-4 "
    title="Keen Builder"
    data-bs-custom-class="tooltip-inverse"
    data-bs-toggle="tooltip"
    data-bs-placement="left"
    data-bs-dismiss="click"
    data-bs-trigger="hover"
>
  	<i class="ki-duotone ki-setting-4 fs-4 me-1"></i> Customize
</button>
<!--end::App settings toggle-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<div
	id="kt_activities"
	class="bg-body"

	data-kt-drawer="true"
	data-kt-drawer-name="activities"
	data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'300px', 'lg': '900px'}"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_activities_toggle"
	data-kt-drawer-close="#kt_activities_close">

	<div class="card shadow-none border-0 rounded-0">
		<!--begin::Header-->
		<div class="card-header" id="kt_activities_header">
			<h3 class="card-title fw-bold text-dark">Activity Logs</h3>

			<div class="card-toolbar">
				<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
					<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>				</button>
			</div>
		</div>
		<!--end::Header-->

		<!--begin::Body-->
		<div class="card-body position-relative" id="kt_activities_body">
			<!--begin::Content-->
			<div id="kt_activities_scroll"
				class="position-relative scroll-y me-n5 pe-5"

				data-kt-scroll="true"
				data-kt-scroll-height="auto"
				data-kt-scroll-wrappers="#kt_activities_body"
				data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
				data-kt-scroll-offset="5px">

				<!--begin::Timeline items-->
				<div class="timeline">
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line w-40px"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        </div>
    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                    <img src="../assets/media/avatars/300-14.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">
            <!--begin::Record-->
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                <!--begin::Title-->
                <a href="../apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                <!--end::Title-->

                <!--begin::Label-->
                <div class="min-w-175px pe-2">
                    <span class="badge badge-light text-muted">Application Design</span>
                </div>
                <!--end::Label-->

                <!--begin::Users-->
                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="../assets/media/avatars/300-2.jpg" alt="img"/>
                    </div>
                    <!--end::User-->

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="../assets/media/avatars/300-14.jpg" alt="img"/>
                    </div>
                    <!--end::User-->

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Users-->

                <!--begin::Progress-->
                <div class="min-w-125px pe-2">
                    <span class="badge badge-light-primary">In Progress</span>
                </div>
                <!--end::Progress-->

                <!--begin::Action-->
                <a href="../apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                <!--end::Action-->
            </div>
            <!--end::Record-->

            <!--begin::Record-->
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                <!--begin::Title-->
                <a href="../apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                <!--end::Title-->

                <!--begin::Label-->
                <div class="min-w-175px">
                    <span class="badge badge-light text-muted">CRM System Development</span>
                </div>
                <!--end::Label-->

                <!--begin::Users-->
                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="../assets/media/avatars/300-20.jpg" alt="img"/>
                    </div>
                    <!--end::User-->

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Users-->

                <!--begin::Progress-->
                <div class="min-w-125px">
                    <span class="badge badge-light-success">Completed</span>
                </div>
                <!--end::Progress-->

                <!--begin::Action-->
                <a href="../apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                <!--end::Action-->
            </div>
            <!--end::Record-->
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line w-40px"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-flag fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>        </div>
    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n2">
        <!--begin::Timeline heading-->
        <div class="overflow-auto pe-3">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                    <img src="../assets/media/avatars/300-1.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line w-40px"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-disconnect fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>        </div>
    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="mb-5 pe-3">
            <!--begin::Title-->
            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                    <img src="../assets/media/avatars/300-23.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                    <!--begin::Icon-->
                    <img alt="" class="w-30px me-3" src="../assets/media/svg/files/pdf.svg"/>
                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="../apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                        <!--end::Desc-->

                        <!--begin::Number-->
                        <div class="text-gray-400">1.9mb</div>
                        <!--end::Number-->
                    </div>
                    <!--begin::Info-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                    <!--begin::Icon-->
                    <img alt="/keen/demo1/../demo1/apps/projects/project.html" class="w-30px me-3" src="../assets/media/svg/files/doc.svg"/>
                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                        <!--end::Desc-->

                        <!--begin::Number-->
                        <div class="text-gray-400">18kb</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center">
                    <!--begin::Icon-->
                    <img alt="/keen/demo1/../demo1/apps/projects/project.html" class="w-30px me-3" src="../assets/media/svg/files/css.svg"/>
                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                        <!--end::Desc-->

                        <!--begin::Number-->
                        <div class="text-gray-400">20mb</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Icon-->
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line w-40px"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>        </div>
    </div>
    <!--end::Timeline icon-->

        <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">
                Task <a href="#" class="text-primary fw-bold me-1">#45890</a>
                merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>  in “Ads Pro Admin Dashboard project:
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                    <img src="../assets/media/avatars/300-14.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line w-40px"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>        </div>
    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                    <img src="../assets/media/avatars/300-2.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                <!--begin::Item-->
                <div class="overlay me-10">
                    <!--begin::Image-->
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-29.jpg"/>
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="overlay me-10">
                    <!--begin::Image-->
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-31.jpg"/>
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="overlay">
                    <!--begin::Image-->
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-40.jpg"/>
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line w-40px"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-sms fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>        </div>
    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">
                New case <a href="#" class="text-primary fw-bold me-1">#67890</a>
                is assigned to you in Multi-platform Database Design project
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="overflow-auto pb-5">
                <!--begin::Wrapper-->
                <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                    <!--end::Info-->

                    <!--begin::User-->
                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                    <!--end::User-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line w-40px"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>        </div>
    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                    <img src="../assets/media/avatars/300-4.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">

<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
            <!--begin::Icon-->
        <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        <!--end::Icon-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <!--begin::Content-->
            <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>

                                    <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                            </div>
            <!--end::Content-->

                    <!--begin::Action-->
            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"  >
                Proceed            </a>
            <!--end::Action-->
            </div>
    <!--end::Wrapper-->
</div>
<!--end::Notice-->

        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line w-40px"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-basket fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>        </div>
    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">
                New order <a href="#" class="text-primary fw-bold me-1">#67890</a>
                is placed for Workshow Planning & Budget Estimation
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item--> 				</div>
				<!--end::Timeline items-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Body-->

		<!--begin::Footer-->
		<div class="card-footer py-5 text-center" id="kt_activities_footer">
			<a href="../pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
				View All Activities <i class="ki-duotone ki-arrow-right fs-3 text-primary"><span class="path1"></span><span class="path2"></span></i>			</a>
		</div>
		<!--end::Footer-->
	</div>
</div>
<!--end::Activities drawer-->

<!--begin::Chat drawer-->
<div
    id="kt_drawer_chat"

    class="bg-body"
    data-kt-drawer="true"
	data-kt-drawer-name="chat"
	data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'300px', 'md': '500px'}"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_drawer_chat_toggle"
	data-kt-drawer-close="#kt_drawer_chat_close">

    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                    </button>

<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
    <!--begin::Heading-->
    <div class="menu-item px-3">
        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
            Contacts
        </div>
    </div>
    <!--end::Heading-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">
            Add Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link flex-stack px-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
            Invite Contacts

            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <a href="#" class="menu-link px-3">
            <span class="menu-title">Groups</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Create Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Invite Members
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Settings
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-1">
        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
            Settings
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 3-->
                </div>
                <!--end::Menu-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div
                class="scroll-y me-n5 pe-5"

                data-kt-element="messages"

                data-kt-scroll="true"
                data-kt-scroll-activate="true"
                data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body"
                data-kt-scroll-offset="0px">



    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">2 mins</span>
                    </div>
                    <!--end::Details-->

            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                How likely are you to recommend our company to your friends and family ?            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->

    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">5 mins</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->

    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">1 Hour</span>
                    </div>
                    <!--end::Details-->

            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Ok, Understood!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->

    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">2 Hours</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                You’ll receive notifications for all issues, pull requests!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->

    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">3 Hours</span>
                    </div>
                    <!--end::Details-->

            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                You can unwatch this repository immediately by clicking here: <a href="https://keenthemes.com/">Keenthemes.com</a>            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->

    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">4 Hours</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Most purchased Business courses during this sale!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->

    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">5 Hours</span>
                    </div>
                    <!--end::Details-->

            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->

    <!--begin::Message(template for out)-->
    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">Just now</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for out)-->

    <!--begin::Message(template for in)-->
    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">Just now</span>
                    </div>
                    <!--end::Details-->

            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Right before vacation season we have the next Big Deal for you.            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for in)-->
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message">

            </textarea>
            <!--end::Input-->

            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-paper-clip fs-3"></i>                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-cloud-add fs-3"><span class="path1"></span><span class="path2"></span></i>                    </button>
                </div>
                <!--end::Actions-->

                <!--begin::Send-->
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                <!--end::Send-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->

<!--begin::Chat drawer-->
<div
    id="kt_shopping_cart"

    class="bg-body"
    data-kt-drawer="true"
	data-kt-drawer-name="cart"
	data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'300px', 'md': '500px'}"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
	data-kt-drawer-close="#kt_drawer_shopping_cart_close">

    <!--begin::Messenger-->
    <div class="card card-flush w-100 rounded-0">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Title-->
            <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body hover-scroll-overlay-y h-400px pt-5">

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

                            <span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-1.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

                            <span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-3.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

                            <span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-8.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-26.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

                            <span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-21.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

                            <span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-34.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-27.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->



        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer">
            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Total</span>
                <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Sub total</span>
                <span class="text-primary fw-bolder fs-5">$ 246.35</span>
            </div>
            <!--end::Item-->

            <!--end::Action-->
            <div class="d-flex justify-content-end mt-9">
                <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
            </div>
            <!--end::Action-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->	<!--begin::Engage drawers-->
    <!--begin::Demos drawer-->
<div
	id="kt_engage_demos"
	class="bg-body"
	data-kt-drawer="true"
	data-kt-drawer-name="explore"
	data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'350px', 'lg': '475px'}"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_engage_demos_toggle"
	data-kt-drawer-close="#kt_engage_demos_close">

    <!--begin::Card-->
	<div class="card shadow-none rounded-0 w-100">
		<!--begin::Header-->
		<div class="card-header" id="kt_engage_demos_header">
			<h3 class="card-title fw-bold text-gray-700">
				Demos
							</h3>

			<div class="card-toolbar">
				<button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
					<i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>				</button>
			</div>
		</div>
		<!--end::Header-->

		<!--begin::Body-->
		<div class="card-body" id="kt_engage_demos_body">
			<!--begin::Content-->
			<div
                id="kt_explore_scroll"
				class="scroll-y me-n5 pe-5"
				data-kt-scroll="true"
				data-kt-scroll-height="auto"
				data-kt-scroll-wrappers="#kt_engage_demos_body"
				data-kt-scroll-dependencies="#kt_engage_demos_header"
				data-kt-scroll-offset="5px">

                <!--begin::Wrapper-->
                <div class="mb-0">
					<!--begin::Heading-->
					<div class="mb-7">
						<div class="d-flex flex-stack">
							<h3 class="mb-0">Keen Licenses</h3>

							<a href="https://themes.getbootstrap.com/licenses/" class="fw-semibold" target="_blank">
								License FAQs
							</a>
						</div>
					</div>
					<!--end::Heading-->

											<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Standard License</div>

										<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
											data-bs-toggle="popover"
											data-bs-custom-class="popover-inverse"
											data-bs-trigger="hover"
											data-bs-placement="top"
											data-bs-content="Use, by you or one client in a single site which end users are not charged for">
										</i>
									</div>
									<div class="fs-7 text-muted">For single site used by you or one client</div>
								</div>

								<div class="text-nowrap">
									<span class="text-muted fs-7 fw-semibold me-n1">$</span>
									<span class="text-dark fs-1 fw-bold">49</span>
								</div>
							</div>
						</div>
						<!--end::License-->
											<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Multisite License</div>

										<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
											data-bs-toggle="popover"
											data-bs-custom-class="popover-inverse"
											data-bs-trigger="hover"
											data-bs-placement="top"
											data-bs-content="Use, by you or one client, in a single site which end users can be charged for.">
										</i>
									</div>
									<div class="fs-7 text-muted">For unlimited sites used by you or one client</div>
								</div>

								<div class="text-nowrap">
									<span class="text-muted fs-7 fw-semibold me-n1">$</span>
									<span class="text-dark fs-1 fw-bold">129</span>
								</div>
							</div>
						</div>
						<!--end::License-->
											<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Extended License</div>

										<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
											data-bs-toggle="popover"
											data-bs-custom-class="popover-inverse"
											data-bs-trigger="hover"
											data-bs-placement="top"
											data-bs-content="Use, by you or one client, in a single site which end users can be charged for.">
										</i>
									</div>
									<div class="fs-7 text-muted">For single SaaS app with paying users</div>
								</div>

								<div class="text-nowrap">
									<span class="text-muted fs-7 fw-semibold me-n1">$</span>
									<span class="text-dark fs-1 fw-bold">429</span>
								</div>
							</div>
						</div>
						<!--end::License-->

					<!--begin::License-->
					<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
						<div class="d-flex flex-stack">
							<div class="d-flex flex-column">
								<div class="d-flex align-items-center mb-1">
									<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Custom License</div>
								</div>
								<div class="fs-7 text-muted">Reach us for custom license offers.</div>
							</div>

							<div class="text-nowrap">
								<a href="https://keenthemes.com/contact" class="btn btn-sm btn-success" target="_blank">Contact Us</a>
							</div>
						</div>
					</div>
					<!--end::License-->

					<!--begin::Purchase-->
					<a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" class="btn btn-primary fw-bold mb-15 w-100">
						Buy Now
					</a>
					<!--end::Purchase-->

					<!--begin::Demos-->
					<div class="mb-0">
						<h3 class="fw-bold text-center mb-6">
							9
							Keen
							Demos
						</h3>

						<!--begin::Row-->
						<div class="row g-5">
																							<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-success rounded">
																					<div class="overlay-wrapper">
												<img src="../assets/media/preview/demos/demo1/light-ltr.png" alt="demo" class="w-100"/>
											</div>

											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="../index.html" class="btn btn-sm btn-success shadow">
													Demo 1												</a>
											</div>
																			</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
																							<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
																					<div class="overlay-wrapper">
												<img src="../assets/media/preview/demos/demo2/light-ltr.png" alt="demo" class="w-100"/>
											</div>

											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/keen/demo2/index.html" class="btn btn-sm btn-success shadow">
													Demo 2												</a>
											</div>
																			</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
																							<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
																					<div class="overlay-wrapper">
												<img src="../assets/media/preview/demos/demo3/light-ltr.png" alt="demo" class="w-100"/>
											</div>

											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/keen/demo3/index.html" class="btn btn-sm btn-success shadow">
													Demo 3												</a>
											</div>
																			</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
																							<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
																					<div class="overlay-wrapper">
												<img src="../assets/media/preview/demos/demo4/light-ltr.png" alt="demo" class="w-100"/>
											</div>

											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/keen/demo4/index.html" class="btn btn-sm btn-success shadow">
													Demo 4												</a>
											</div>
																			</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
																							<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
																					<div class="overlay-wrapper">
												<img src="../assets/media/preview/demos/demo5/light-ltr.png" alt="demo" class="w-100"/>
											</div>

											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/keen/demo5/index.html" class="btn btn-sm btn-success shadow">
													Demo 5												</a>
											</div>
																			</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
																							<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
																					<div class="overlay-wrapper">
												<img src="../assets/media/preview/demos/demo6/light-ltr.png" alt="demo" class="w-100"/>
											</div>

											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/keen/demo6/index.html" class="btn btn-sm btn-success shadow">
													Demo 6												</a>
											</div>
																			</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
																							<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
																					<div class="overlay-wrapper">
												<img src="../assets/media/preview/demos/demo7/light-ltr.png" alt="demo" class="w-100"/>
											</div>

											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/keen/demo7/index.html" class="btn btn-sm btn-success shadow">
													Demo 7												</a>
											</div>
																			</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
																							<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
																					<div class="overlay-wrapper">
												<img src="../assets/media/preview/demos/demo8/light-ltr.png" alt="demo" class="w-100"/>
											</div>

											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/keen/demo8/index.html" class="btn btn-sm btn-success shadow">
													Demo 8												</a>
											</div>
																			</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
																							<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
																					<div class="overlay-wrapper">
												<img src="../assets/media/preview/demos/demo9/light-ltr.png" alt="demo" class="w-100"/>
											</div>

											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/keen/demo9/index.html" class="btn btn-sm btn-success shadow">
													Demo 9												</a>
											</div>
																			</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
													</div>
						<!--end::Row-->
					</div>
					<!--end::Demos-->
                </div>
                <!--end::Wrapper-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Body-->
	</div>
    <!--end::Card-->
</div>
<!--end::Demos drawer-->



    <!--begin::Help drawer-->
<div
	id="kt_help"
	class="bg-body"
	data-kt-drawer="true"
	data-kt-drawer-name="help"
	data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'350px', 'md': '525px'}"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_help_toggle"
	data-kt-drawer-close="#kt_help_close">

    <!--begin::Card-->
	<div class="card shadow-none rounded-0 w-100">
		<!--begin::Header-->
		<div class="card-header" id="kt_help_header">
			<h5 class="card-title fw-semibold text-gray-600">
				Learn & Get Inspired
			</h5>

			<div class="card-toolbar">
				<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
					<i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>				</button>
			</div>
		</div>
		<!--end::Header-->

		<!--begin::Body-->
		<div class="card-body" id="kt_help_body">
			<!--begin::Content-->
			<div
                id="kt_help_scroll"

				class="hover-scroll-overlay-y"

				data-kt-scroll="true"
				data-kt-scroll-height="auto"
				data-kt-scroll-wrappers="#kt_help_body"
				data-kt-scroll-dependencies="#kt_help_header"
				data-kt-scroll-offset="5px">

				<!--begin::Support-->
				<div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
					<!--begin::Heading-->
					<h2 class="fw-bold mb-5">Support at <a href="https://devs.keenthemes.com/" class="">devs.keenthemes.com</a></h2>
					<!--end::Heading-->

					<!--begin::Description-->
					<div class="fs-5 fw-semibold mb-5">
						<span class="text-gray-500">Join our developers community to find answer to your question and help others.</span>
						<a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
					</div>
					<!--end::Description-->

					<!--begin::Link-->
					<a href="https://devs.keenthemes.com/" class="btn btn-lg explore-btn-primary w-100">Get Support</a>
					<!--end::Link-->
				</div>
				<!--end::Support-->

														<!--begin::Link-->
					<a href="https://preview.keenthemes.com/html/keen/docs"  class="parent-hover d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                    		<i class="ki-duotone ki-abstract-26 text-warning fs-2x fs-lg-3x"><span class="path1"></span><span class="path2"></span></i>                		</div>
						<!--end::Icon-->

						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
									Documentation								</div>
								<!--end::Title-->

								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-7 fs-lg-6">
									From guides and how-tos, to live demos and code examples to get started right away.								</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->

							<i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><span class="path1"></span><span class="path2"></span></i>						</div>
						<!--end::Info-->
					</a>
					<!--end::Link-->
														<!--begin::Link-->
					<a href="https://preview.keenthemes.com/html/keen/docs/base/utilities"  class="parent-hover d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                    		<i class="ki-duotone ki-wallet text-primary fs-2x fs-lg-3x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                		</div>
						<!--end::Icon-->

						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
									Plugins & Components								</div>
								<!--end::Title-->

								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-7 fs-lg-6">
									Check out our 300+ in-house components and customized 3rd-party plugins.								</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->

							<i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><span class="path1"></span><span class="path2"></span></i>						</div>
						<!--end::Info-->
					</a>
					<!--end::Link-->
														<!--begin::Link-->
					<a href="../layout-builder.html"  class="parent-hover d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                    		<i class="ki-duotone ki-design text-info fs-2x fs-lg-3x"><span class="path1"></span><span class="path2"></span></i>                		</div>
						<!--end::Icon-->

						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
									Layout Builder								</div>
								<!--end::Title-->

								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-7 fs-lg-6">
									Build your layout, preview it and export the HTML for server side integration.								</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->

							<i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><span class="path1"></span><span class="path2"></span></i>						</div>
						<!--end::Info-->
					</a>
					<!--end::Link-->
																			<!--begin::Link-->
					<a href="https://preview.keenthemes.com/html/keen/docs/getting-started/changelog"  class="parent-hover d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                    		<i class="ki-duotone ki-keyboard text-danger fs-2x fs-lg-3x"><span class="path1"></span><span class="path2"></span></i>                		</div>
						<!--end::Icon-->

						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
									What's New ?								</div>
								<!--end::Title-->

								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-7 fs-lg-6">
									Latest features and improvements added with our users feedback in mind.								</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->

							<i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><span class="path1"></span><span class="path2"></span></i>						</div>
						<!--end::Info-->
					</a>
					<!--end::Link-->
							</div>
			<!--end::Content-->
		</div>
		<!--end::Body-->
	</div>
    <!--end::Card-->
</div>
<!--end::Help drawer--><!--end::Engage drawers-->

<!--begin::Engage toolbar-->
<div class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">

            <!--begin::Demos drawer toggle-->
<button
    id="kt_engage_demos_toggle"
    class="engage-demos-toggle engage-btn btn shadow-sm fs-6 px-4 rounded-top-0"
    title="Check out 9 more demos"
    data-bs-toggle="tooltip"
    data-bs-custom-class="tooltip-inverse"
    data-bs-placement="left"
    data-bs-dismiss="click"
    data-bs-trigger="hover">

    <span id="kt_engage_demos_label">
		Demos
	</span>
</button>
<!--end::Demos drawer toggle-->


            <!--begin::Help drawer toggle-->
<button
	id="kt_help_toggle"
	class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0"
	title="Learn & Get Inspired"
	data-bs-toggle="tooltip"
	data-bs-custom-class="tooltip-inverse"
	data-bs-placement="left"
	data-bs-dismiss="click"
	data-bs-trigger="hover">
	Help
</button>
<!--end::Help drawer toggle-->


</div>
<!--end::Engage toolbar--><!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i></div>
<!--end::Scrolltop-->

                    <!--begin::Modals-->

<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">Upgrade a Plan</h1>

                    <div class="text-muted fw-semibold fs-5">
                        If you need more info, please check <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                    </div>
                </div>
                <!--end::Heading-->

                <!--begin::Plans-->
                <div class="d-flex flex-column">
                    <!--begin::Nav group-->
                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">
                            Monthly
                        </button>
                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">
                            Annual
                        </button>
                    </div>
                    <!--end::Nav group-->

                    <!--begin::Row-->
                    <div class="row mt-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!--begin::Tabs-->
                            <div class="nav flex-column">
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Startup
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for startups                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                                    39                                                </span>

                                                <span class="fs-7 opacity-50">/
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"  value="advanced"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Advanced
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for 100+ team size                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">
                                                    339                                                </span>

                                                <span class="fs-7 opacity-50">/
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"  value="enterprise"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Enterprise
                                                                                                            <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best value for 1000+ team                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">
                                                    999                                                </span>

                                                <span class="fs-7 opacity-50">/
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"  value="custom"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Custom
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Requet a custom license                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                            </div>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Tab content-->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 10+ team size and new startup
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                    </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 100+ team size and grown company
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                    </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 1000+ team and enterpise
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                    </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_custom">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for corporations
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                    </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Plans-->

                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">

<!--begin::Indicator label-->
<span class="indicator-label">
    Upgrade Plan</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->
                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan--><!--begin::Modal - Create Campaign-->
<div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2>Create Campaign</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
                    <!--begin::Nav-->
                    <div class="stepper-nav justify-content-center py-2">
                        <!--begin::Step 1-->
                        <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Campaign Details
                            </h3>
                        </div>
                        <!--end::Step 1-->

                        <!--begin::Step 2-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Creative Uploads
                            </h3>
                        </div>
                        <!--end::Step 2-->

                        <!--begin::Step 3-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Audiences
                            </h3>
                        </div>
                        <!--end::Step 3-->

                        <!--begin::Step 4-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Budget Estimates
                            </h3>
                        </div>
                        <!--end::Step 4-->

                        <!--begin::Step 5-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Completed
                            </h3>
                        </div>
                        <!--end::Step 5-->
                    </div>
                    <!--end::Nav-->

                    <!--begin::Form-->
                    <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">

<!--begin::Step 1-->
<div class="current" data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-15">
            <!--begin::Title-->
            <h2 class="fw-bold d-flex align-items-center text-dark">
                Setup Campaign Details


<span class="ms-1"  data-bs-toggle="tooltip" title="Campaign name will be used as reference within your campaign reports" >
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </h2>
            <!--end::Title-->

            <!--begin::Notice-->
            <div class="text-muted fw-semibold fs-6">
                If you need more info, please check out
                <a href="#" class="link-primary fw-bold">Help Page</a>.
            </div>
            <!--end::Notice-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Label-->
            <label class="required form-label mb-3">Campaign Name</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="d-block fw-semibold fs-6 mb-5">
                <span class="required">Company Logo</span>


<span class="ms-1"  data-bs-toggle="tooltip" title="E.g. Select a logo to represent the company that's running the campaign." >
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </label>
            <!--end::Label-->

            <!--begin::Image input placeholder-->
            <style>
                .image-input-placeholder {
                    background-image: url('../assets/media/svg/files/blank-image.svg');
                }

                [data-bs-theme="dark"] .image-input-placeholder {
                    background-image: url('../assets/media/svg/files/blank-image-dark.svg');
                }
            </style>
            <!--end::Image input placeholder-->

            <!--begin::Image input-->
            <div class="image-input image-input-empty image-input-outline image-input-placeholder" data-kt-image-input="true">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-125px h-125px"></div>
                <!--end::Preview existing avatar-->

                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                    <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                    <!--begin::Inputs-->
                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="avatar_remove" />
                    <!--end::Inputs-->
                </label>
                <!--end::Label-->

                <!--begin::Cancel-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                </span>
                <!--end::Cancel-->

                <!--begin::Remove-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                </span>
                <!--end::Remove-->
            </div>
            <!--end::Image input-->

            <!--begin::Hint-->
            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
            <!--end::Hint-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-5">Campaign Goal</label>
            <!--end::Label-->

            <!--begin::Roles-->
                            <!--begin::Input row-->
                <div class="d-flex fv-row">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
                        <!--end::Input-->

                        <!--begin::Label-->
                        <label class="form-check-label" for="kt_modal_update_role_option_0">
                            <div class="fw-bold text-gray-800">Get more visitors</div>
                            <div class="text-gray-600">Increase impression traffic onto the platform</div>
                        </label>
                        <!--end::Label-->
                    </div>
                    <!--end::Radio-->
                </div>
                <!--end::Input row-->

                <div class='separator separator-dashed my-5'></div>                            <!--begin::Input row-->
                <div class="d-flex fv-row">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1"  />
                        <!--end::Input-->

                        <!--begin::Label-->
                        <label class="form-check-label" for="kt_modal_update_role_option_1">
                            <div class="fw-bold text-gray-800">Get more messages on chat</div>
                            <div class="text-gray-600">Increase community interaction and communication</div>
                        </label>
                        <!--end::Label-->
                    </div>
                    <!--end::Radio-->
                </div>
                <!--end::Input row-->

                <div class='separator separator-dashed my-5'></div>                            <!--begin::Input row-->
                <div class="d-flex fv-row">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2"  />
                        <!--end::Input-->

                        <!--begin::Label-->
                        <label class="form-check-label" for="kt_modal_update_role_option_2">
                            <div class="fw-bold text-gray-800">Get more calls</div>
                            <div class="text-gray-600">Boost telecommunication feedback to provide precise and accurate information</div>
                        </label>
                        <!--end::Label-->
                    </div>
                    <!--end::Radio-->
                </div>
                <!--end::Input row-->

                <div class='separator separator-dashed my-5'></div>                            <!--begin::Input row-->
                <div class="d-flex fv-row">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3"  />
                        <!--end::Input-->

                        <!--begin::Label-->
                        <label class="form-check-label" for="kt_modal_update_role_option_3">
                            <div class="fw-bold text-gray-800">Get more likes</div>
                            <div class="text-gray-600">Increase positive interactivity on social media platforms</div>
                        </label>
                        <!--end::Label-->
                    </div>
                    <!--end::Radio-->
                </div>
                <!--end::Input row-->

                <div class='separator separator-dashed my-5'></div>                            <!--begin::Input row-->
                <div class="d-flex fv-row">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4"  />
                        <!--end::Input-->

                        <!--begin::Label-->
                        <label class="form-check-label" for="kt_modal_update_role_option_4">
                            <div class="fw-bold text-gray-800">Lead generation</div>
                            <div class="text-gray-600">Collect contact information for potential customers</div>
                        </label>
                        <!--end::Label-->
                    </div>
                    <!--end::Radio-->
                </div>
                <!--end::Input row-->

                                        <!--end::Roles-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 1-->

<!--begin::Step 2-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-12">
            <!--begin::Title-->
            <h1 class="fw-bold text-dark">Upload Files</h1>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-4">
                If you need more info, please check
                <a href="#" class="link-primary">Campaign Guidelines</a>
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Dropzone-->
            <div class="dropzone" id="kt_modal_create_campaign_files_upload">
                <!--begin::Message-->
                <div class="dz-message needsclick">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-file-up fs-3hx text-primary"><span class="path1"></span><span class="path2"></span></i>                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="ms-4">
                        <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files here or click to upload.</h3>
                        <span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
                    </div>
                    <!--end::Info-->
                </div>
            </div>
            <!--end::Dropzone-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
            <!--End::Label-->

            <!--begin::Files-->
            <div class="mh-300px scroll-y me-n7 pe-7">
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="../assets/media/svg/files/pdf.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product Specifications</a>
                                <div class="fw-semibold text-muted">230kb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="../assets/media/svg/files/tif.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Creative Poster</a>
                                <div class="fw-semibold text-muted">2.4mb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="../assets/media/svg/files/folder-document.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Landing Page Source</a>
                                <div class="fw-semibold text-muted">1.12mb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="../assets/media/svg/files/css.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing Page Styling</a>
                                <div class="fw-semibold text-muted">85kb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="../assets/media/svg/files/ai.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design Source Files</a>
                                <div class="fw-semibold text-muted">48mb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 ">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="../assets/media/svg/files/doc.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Plan Document</a>
                                <div class="fw-semibold text-muted">27kb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                            </div>
            <!--end::Files-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 2-->
                        <!--begin::Step 3-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-12">
            <!--begin::Title-->
            <h1 class="fw-bold text-dark">Configure Audiences</h1>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-4">
                If you need more info, please check
                <a href="#" class="link-primary">Campaign Guidelines</a>
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Gender


<span class="ms-1"  data-bs-toggle="tooltip" title="Show your ads to either men or women, or select 'All' for both" >
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </label>
            <!--End::Label-->

            <!--begin::Row-->
            <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                            <input class="form-check-input" type="radio" name="campaign_gender" value="1" checked="checked" />
                        </span>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <span class="ms-5">
                            <span class="fs-4 fw-bold text-gray-800 d-block">All</span>
                        </span>
                        <!--end::Info-->
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                            <input class="form-check-input" type="radio" name="campaign_gender" value="2" />
                        </span>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <span class="ms-5">
                            <span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
                        </span>
                        <!--end::Info-->
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                            <input class="form-check-input" type="radio" name="campaign_gender" value="3" />
                        </span>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <span class="ms-5">
                            <span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
                        </span>
                        <!--end::Info-->
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Age


<span class="ms-1"  data-bs-toggle="tooltip" title="Select the minimum and maximum age of the people who will find your ad relevant." >
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </label>
            <!--End::Label-->

            <!--begin::Slider-->
            <div class="d-flex flex-stack">
                <div id="kt_modal_create_campaign_age_min" class="fs-7 fw-semibold text-muted"></div>
                <div id="kt_modal_create_campaign_age_slider" class="noUi-sm w-100 ms-5 me-8"></div>
                <div id="kt_modal_create_campaign_age_max" class="fs-7 fw-semibold text-muted"></div>
            </div>
            <!--end::Slider-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Location


<span class="ms-1"  data-bs-toggle="tooltip" title="Enter one or more location points for more specific targeting." >
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </label>
            <!--End::Label-->

            <!--begin::Tagify-->
            <input class="form-control d-flex align-items-center" value="" id="kt_modal_create_campaign_location" data-kt-flags-path="/keen/demo1/assets/media/flags/"/>
            <!--end::Tagify-->
        </div>
        <!--end::Input group-->

    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 3-->
                        <!--begin::Step 4-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-12">
            <!--begin::Title-->
            <h1 class="fw-bold text-dark">Budget Estimates</h1>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-4">
                If you need more info, please check
                <a href="#" class="link-primary">Campaign Guidelines</a>
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Campaign Duration


<span class="ms-1"  data-bs-toggle="tooltip" title="Choose how long you want your ad to run for" >
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </label>
            <!--end::Label-->

            <!--begin::Duration option-->
            <div class="d-flex gap-9 mb-7">
                <!--begin::Button-->
                <button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary active" id="kt_modal_create_campaign_duration_all">
                    Continuous duration<br />
                    <span class="fs-7">Your ad will run continuously for a daily budget.</span>
                </button>
                <!--end::Button-->

                <!--begin::Button-->
                <button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default" id="kt_modal_create_campaign_duration_fixed">
                    Fixed duration<br />
                    <span class="fs-7">Your ad will run on the specified dates only.</span>
                </button>
                <!--end::Button-->
            </div>
            <!--end::Duration option-->

            <!--begin::Datepicker-->
            <input class="form-control form-control-solid d-none" placeholder="Pick date & time" id="kt_modal_create_campaign_datepicker" />
            <!--end::Datepicker-->
        </div>
        <!--end::Input group-->


        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Daily Budget


<span class="ms-1"  data-bs-toggle="tooltip" title="Choose the budget allocated for each day. Higher budget will generate better results" >
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </label>
            <!--end::Label-->

            <!--begin::Slider-->
            <div class="d-flex flex-column text-center">
                <div class="d-flex align-items-start justify-content-center mb-7">
                    <span class="fw-bold fs-4 mt-1 me-2">$</span>
                    <span class="fw-bold fs-3x" id="kt_modal_create_campaign_budget_label"></span>
                    <span class="fw-bold fs-3x">.00</span>
                </div>
                <div id="kt_modal_create_campaign_budget_slider" class="noUi-sm"></div>
            </div>
            <!--end::Slider-->

        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 4-->
                        <!--begin::Step 5-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-12 text-center">
            <!--begin::Title-->
            <h1 class="fw-bold text-dark">Campaign Created!</h1>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="fw-semibold text-muted fs-4">
                You will receive an email with with the summary of your newly created campaign!
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

         <!--begin::Actions-->
         <div class="d-flex flex-center pb-20">
            <button id="kt_modal_create_campaign_create_new" type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">
                Create New Campaign
            </button>

            <a href="#" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">
                View Campaign
            </a>
        </div>
        <!--end::Actions-->

        <!--begin::Illustration-->
        <div class="text-center px-4">
            <img src="../assets/media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px"/>
        </div>
        <!--end::Illustration-->
    </div>
</div>
<!--end::Step 5-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-10">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                    <i class="ki-duotone ki-arrow-left fs-3 me-1"><span class="path1"></span><span class="path2"></span></i>                                    Back
                                </button>
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">
                                        Submit
                                        <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span class="path1"></span><span class="path2"></span></i>                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>

                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                    Continue
                                    <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0"><span class="path1"></span><span class="path2"></span></i>                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--begin::Modal body-->
        </div>
    </div>
</div>
<!--end::Modal - Create Campaign--><!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Search Users</h1>

                    <div class="text-muted fw-semibold fs-5">
                        Invite Collaborators To Your Project
                    </div>
                </div>
                <!--end::Content-->

                <!--begin::Search-->
                <div
                    id="kt_modal_users_search_handler"

                    data-kt-search-keypress="true"
                    data-kt-search-min-length="2"
                    data-kt-search-enter="enter"
                    data-kt-search-layout="inline">

                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden"/>
                        <!--end::Hidden input-->

                        <!--begin::Icon-->
                        <i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i>                        <!--end::Icon-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input"/>
                        <!--end::Input-->

                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                        </span>
                        <!--end::Spinner-->

                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                            <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span class="path2"></span></i>                        </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->

                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::Suggestions-->
<div data-kt-search-element="suggestions">
    <!--begin::Heading-->
    <h3 class="fw-semibold mb-5">Recently searched:</h3>
    <!--end::Heading-->

    <!--begin::Users-->
    <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="../assets/media/avatars/300-6.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                    <span class="badge badge-light">Art Director</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                            M                        </span>
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                    <span class="badge badge-light">Marketing Analytic</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                    <span class="badge badge-light">Software Enginer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                    <span class="badge badge-light">Web Developer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                    <span class="badge badge-light">UI/UX Designer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
            </div>
    <!--end::Users-->
</div>
<!--end::Suggestions-->

<!--begin::Results(add d-none to below element to hide the users list by default)-->
<div data-kt-search-element="results" class="d-none">
    <!--begin::Users-->
    <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../assets/media/avatars/300-6.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                M                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                        <div class="fw-semibold text-muted">max@kt.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                C                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                        <div class="fw-semibold text-muted">mik@pex.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                O                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                N                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../assets/media/avatars/300-23.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                E                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../assets/media/avatars/300-12.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                A                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                        <div class="fw-semibold text-muted">robert@benko.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../assets/media/avatars/300-13.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                L                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../assets/media/avatars/300-21.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                L                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->


            </div>
    <!--end::Users-->

    <!--begin::Actions-->
    <div class="d-flex flex-center mt-15">
        <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">
            Cancel
        </button>

        <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
            Add Selected Users
        </button>
    </div>
    <!--end::Actions-->
</div>
<!--end::Results-->
                        <!--begin::Empty-->
<div data-kt-search-element="empty" class="text-center d-none">
    <!--begin::Message-->
    <div class="fw-semibold py-10">
        <div class="text-gray-600 fs-3 mb-2">No users found</div>

        <div class="text-muted fs-6">Try to search by username, full name or email...</div>
    </div>
    <!--end::Message-->

    <!--begin::Illustration-->
    <div class="text-center px-5">
        <img src="../assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px"/>
    </div>
    <!--end::Illustration-->
</div>
<!--end::Empty-->                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Invite a Friend</h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">
                        If you need more info, please check out
                        <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-bold w-100 mb-8">
                    <img alt="Logo" src="../assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3"/>
                    Invite Gmail Contacts
                </div>
                <!--end::Google Contacts Invite-->

                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                </div>
                <!--end::Separator-->

                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here">
                </textarea>
                <!--end::Textarea-->

                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                    <!--end::Heading-->

                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="../assets/media/avatars/300-6.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                C                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                O                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                N                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="../assets/media/avatars/300-23.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                E                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="../assets/media/avatars/300-12.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                                A                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="../assets/media/avatars/300-13.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                                L                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="../assets/media/avatars/300-21.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                                A                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                            </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->

                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5 fw-semibold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->

                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked"/>

                        <span class="form-check-label fw-semibold text-muted">
                            Allowed
                        </span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->            <!--end::Modals-->

        <!--begin::Javascript-->
        <script>
            var hostUrl = "../assets/index.html";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="../assets/plugins/global/plugins.bundle.js"></script>
                            <script src="../assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->

                    <!--begin::Vendors Javascript(used for this page only)-->
                            <script src="../assets/plugins/custom/datatables/datatables.bundle.js"></script>
                        <!--end::Vendors Javascript-->

                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="../assets/js/custom/pages/user-profile/general.js"></script>
                            <script src="../assets/js/custom/account/settings/signin-methods.js"></script>
                            <script src="../assets/js/custom/account/security/security-summary.js"></script>
                            <script src="../assets/js/custom/account/security/license-usage.js"></script>
                            <script src="../assets/js/custom/account/settings/deactivate-account.js"></script>
                            <script src="../assets/js/widgets.bundle.js"></script>
                            <script src="../assets/js/custom/apps/chat/chat.js"></script>
                            <script src="../assets/js/custom/utilities/modals/upgrade-plan.js"></script>
                            <script src="../assets/js/custom/utilities/modals/create-campaign.js"></script>
                            <script src="../assets/js/custom/utilities/modals/users-search.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->

            </body>
    <!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/keen/demo1/account/security.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 08:31:47 GMT -->
</html>
