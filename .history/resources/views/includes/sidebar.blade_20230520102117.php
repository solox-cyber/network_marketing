
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


            <!--begin::Header-->
            <div id="kt_app_header" class="app-header ">

                <!--begin::Header container-->
                <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
                    id="kt_app_header_container">

                    <!--begin::sidebar mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px"
                            id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                    </div>
                    <!--end::sidebar mobile toggle-->


                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="index.html" class="d-lg-none">
                            <img alt="Logo" src="assets/media/logos/default-small.svg"
                                class="theme-light-show h-30px" />
                            <img alt="Logo" src="assets/media/logos/default-small-dark.svg"
                                class="theme-dark-show h-30px" />
                        </a>
                    </div>
                    <!--end::Mobile logo-->

                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                        id="kt_app_header_wrapper">


                        <!--begin::Menu wrapper-->
                        <div class="
        app-header-menu
        app-header-mobile-drawer
        align-items-stretch
    " data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                            data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end"
                            data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                            <!--begin::Menu-->
                            <div class="
            menu
            menu-rounded
            menu-column
            menu-lg-row
            my-5
            my-lg-0
            align-items-stretch
            fw-semibold
            px-2 px-lg-0
        " id="kt_app_header_menu" data-kt-menu="true">


                               <!--end:Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->


                        <!--begin::Navbar-->
                        <div class="app-navbar flex-shrink-0">
                            <!--begin::Search-->
                            <div class="app-navbar-item align-items-stretch ms-1 ms-lg-3">


                            </div>
                            <!--end::Search-->

                            <!--begin::Activities-->
                            <div class="app-navbar-item ms-1 ms-lg-3">
                                <!--begin::Drawer toggle-->
                                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                                    id="kt_activities_toggle">
                                    <i class="ki-duotone ki-notification-on fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span></i>
                                </div>
                                <!--end::Drawer toggle-->
                            </div>
                            <!--end::Activities-->







                            <!--begin::Theme mode-->
                            <div class="app-navbar-item ms-1 ms-lg-3">

                                <!--begin::Menu toggle-->
                                <a href="#"
                                    class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-night-day theme-light-show fs-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span><span
                                            class="path5"></span><span class="path6"></span><span
                                            class="path7"></span><span class="path8"></span><span
                                            class="path9"></span><span class="path10"></span></i> <i
                                        class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span
                                            class="path2"></span></i></a>
                                <!--begin::Menu toggle-->

                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span><span class="path7"></span><span
                                                        class="path8"></span><span class="path9"></span><span
                                                        class="path10"></span></i> </span>
                                            <span class="menu-title">
                                                Light
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i> </span>
                                            <span class="menu-title">
                                                Dark
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i> </span>
                                            <span class="menu-title">
                                                System
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->

                            </div>
                            <!--end::Theme mode-->

                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-2 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <img src="assets/media/avatars/300-3.jpg" alt="user" />
                                </div>

                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="assets/media/avatars/300-3.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    Max Smith <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>

                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                    max@kt.com </a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/overview.html" class="menu-link px-5">
                                            My Profile
                                        </a>
                                    </div>
                                    <!--end::Menu item-->


                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title">My Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/referrals.html" class="menu-link px-5">
                                                    Referrals
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/billing.html" class="menu-link px-5">
                                                    Billing
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/statements.html" class="menu-link px-5">
                                                    Payments
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/statements.html"
                                                    class="menu-link d-flex flex-stack px-5">
                                                    Statements

                                                    <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                        title="View your statements">
                                                        <i class="ki-duotone ki-information-5 fs-5"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i> </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->


                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/statements.html" class="menu-link px-5">
                                            My Statements
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">



                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="account/settings.html" class="menu-link px-5">
                                            Account Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">
                                            Sign Out
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->

                            <!--begin::Header menu toggle-->
                            <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                                <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                                    id="kt_app_header_menu_toggle">
                                    <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </div>
                            </div>
                            <!--end::Header menu toggle-->
                        </div>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header wrapper-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">





                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


                   @includes('ba')


                </div>
                <!--end::Sidebar-->


                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">

                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container"
                                class="app-container  container-fluid d-flex flex-stack ">



                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                        Default
                                    </h1>
                                    <!--end::Title-->


                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-muted">
                                            <a href="index.html" class="text-muted text-hover-primary">
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
                                    <!--begin::Filter menu-->
                                    <div class="d-flex">
                                        <select name="campaign-type" data-control="select2" data-hide-search="true"
                                            class="form-select form-select-sm bg-body border-body w-175px">
                                            <option value="Twitter" selected="selected">Select Campaign</option>
                                            <option value="Twitter">Twitter Campaign</option>
                                            <option value="Twitter">Facebook Campaign</option>
                                            <option value="Twitter">Adword Campaign</option>
                                            <option value="Twitter">Carbon Campaign</option>
                                        </select>

                                        <a href="#" class="btn btn-icon btn-sm btn-success flex-shrink-0 ms-4"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
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
                        <div id="kt_app_content" class="app-content  flex-column-fluid ">


                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container  container-fluid ">
                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                                        <!--begin::Card widget 20-->
                                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
                                            style="background-color: #3E97FF;background-image:url('assets/media/svg/shapes/widget-bg-1.png')">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Amount-->
                                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                                                    <!--end::Amount-->

                                                    <!--begin::Subtitle-->
                                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active
                                                        Projects in April</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end pt-0">
                                                <!--begin::Progress-->
                                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                    <div
                                                        class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                                        <span>43 Pending</span>
                                                        <span>72%</span>
                                                    </div>

                                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                                        <div class="bg-white rounded h-8px" role="progressbar"
                                                            style="width: 72%;" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 20-->

                                        <!--begin::List widget 26-->
                                        <div class="card card-flush h-md-50 mb-xl-10">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <h3 class="card-title text-gray-800 fw-bold">External Links</h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span></i>
                                                    </button>


                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                        data-kt-menu="true">
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
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
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
                                            <div class="card-body pt-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client
                                                        Rating</a>
                                                    <!--end::Section-->

                                                    <!--begin::Action-->
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                                        <i class="ki-duotone ki-exit-right-corner fs-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
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
                                                    <a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram
                                                        Followers</a>
                                                    <!--end::Section-->

                                                    <!--begin::Action-->
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                                        <i class="ki-duotone ki-exit-right-corner fs-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
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
                                                    <a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads
                                                        CPC</a>
                                                    <!--end::Section-->

                                                    <!--begin::Action-->
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                                        <i class="ki-duotone ki-exit-right-corner fs-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
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
                                                        <span
                                                            class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                                                        <!--end::Currency-->

                                                        <!--begin::Amount-->
                                                        <span
                                                            class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                                                        <!--end::Amount-->

                                                        <!--begin::Badge-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                            2.2%
                                                        </span>
                                                        <!--end::Badge-->
                                                    </div>
                                                    <!--end::Info-->

                                                    <!--begin::Subtitle-->
                                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings
                                                        in April</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Card body-->
                                            <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                                <!--begin::Chart-->
                                                <div class="d-flex flex-center me-5 pt-2">
                                                    <div id="kt_card_widget_17_chart"
                                                        style="min-width: 70px; min-height: 70px" data-kt-size="70"
                                                        data-kt-line="11">
                                                    </div>
                                                </div>
                                                <!--end::Chart-->

                                                <!--begin::Labels-->
                                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                                    <!--begin::Label-->
                                                    <div class="d-flex fw-semibold align-items-center">
                                                        <!--begin::Bullet-->
                                                        <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                                        <!--end::Bullet-->

                                                        <!--begin::Label-->
                                                        <div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
                                                        <!--end::Label-->

                                                        <!--begin::Stats-->
                                                        <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::Label-->

                                                    <!--begin::Label-->
                                                    <div class="d-flex fw-semibold align-items-center my-3">
                                                        <!--begin::Bullet-->
                                                        <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                                        <!--end::Bullet-->

                                                        <!--begin::Label-->
                                                        <div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
                                                        <!--end::Label-->

                                                        <!--begin::Stats-->
                                                        <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::Label-->

                                                    <!--begin::Label-->
                                                    <div class="d-flex fw-semibold align-items-center">
                                                        <!--begin::Bullet-->
                                                        <div class="bullet w-8px h-3px rounded-2 me-3"
                                                            style="background-color: #E4E6EF"></div>
                                                        <!--end::Bullet-->

                                                        <!--begin::Label-->
                                                        <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                                                        <!--end::Label-->

                                                        <!--begin::Stats-->
                                                        <div class=" fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Labels-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 17-->

                                        <!--begin::List widget 25-->
                                        <div class="card card-flush h-lg-50">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <h3 class="card-title text-gray-800">Highlights</h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar d-none">
                                                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                                    <div data-kt-daterangepicker="true"
                                                        data-kt-daterangepicker-opens="left"
                                                        class="btn btn-sm btn-light d-flex align-items-center px-4">
                                                        <!--begin::Display range-->
                                                        <div class="text-gray-600 fw-bold">
                                                            Loading date range...
                                                        </div>
                                                        <!--end::Display range-->

                                                        <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span><span class="path6"></span></i>
                                                    </div>
                                                    <!--end::Daterangepicker-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body pt-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Client Rating
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Statistics-->
                                                    <div class="d-flex align-items-senter">
                                                        <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>

                                                        <!--begin::Number-->
                                                        <span class="text-gray-900 fw-bolder fs-6">7.8</span>
                                                        <!--end::Number-->

                                                        <span class="text-gray-400 fw-bold fs-6">/10</span>
                                                    </div>
                                                    <!--end::Statistics-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--end::Separator-->

                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Quotes</div>
                                                    <!--end::Section-->

                                                    <!--begin::Statistics-->
                                                    <div class="d-flex align-items-senter">
                                                        <i class="ki-duotone ki-arrow-down-right fs-2 text-danger me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>

                                                        <!--begin::Number-->
                                                        <span class="text-gray-900 fw-bolder fs-6">730</span>
                                                        <!--end::Number-->


                                                    </div>
                                                    <!--end::Statistics-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--end::Separator-->

                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Agent Earnings
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Statistics-->
                                                    <div class="d-flex align-items-senter">
                                                        <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>

                                                        <!--begin::Number-->
                                                        <span class="text-gray-900 fw-bolder fs-6">$2,309</span>
                                                        <!--end::Number-->


                                                    </div>
                                                    <!--end::Statistics-->
                                                </div>
                                                <!--end::Item-->



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
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span></i>
                                                    </button>


                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                        data-kt-menu="true">
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
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
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
                        active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                                            href="#kt_stats_widget_16_tab_1">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon mb-3">
                                                                <i class="ki-duotone ki-car fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span></i>
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Title-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                SaaS </span>
                                                            <!--end::Title-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
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
                                                                <i class="ki-duotone ki-bitcoin fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Title-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                Crypto </span>
                                                            <!--end::Title-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
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
                                                                <i class="ki-duotone ki-like fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Title-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                Social </span>
                                                            <!--end::Title-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
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
                                                                <i class="ki-duotone ki-tablet fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Title-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                Mobile </span>
                                                            <!--end::Title-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
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
                                                                <i class="ki-duotone ki-send fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Title-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                Others </span>
                                                            <!--end::Title-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
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
                                                    <div class="tab-pane fade show active"
                                                        id="kt_stats_widget_16_tab_1">
                                                        <!--begin::Table container-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table
                                                                class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr
                                                                        class="fs-7 fw-bold text-gray-400 border-bottom-0">
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
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-3.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy
                                                                                        Hawkins</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">78.34%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_1_1"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-2.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
                                                                                        Cooper</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">63.83%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_1_2"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="danger"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-9.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                                        Jones</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">92.56%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_1_3"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-7.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Cody
                                                                                        Fishers</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">63.08%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_1_4"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
                                                            <table
                                                                class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr
                                                                        class="fs-7 fw-bold text-gray-400 border-bottom-0">
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
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-25.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                                                        Simmons</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">85.23%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_2_1"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-24.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                                        Howard</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">74.83%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_2_2"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="danger"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-20.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette
                                                                                        Black</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">90.06%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_2_3"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-17.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                                        McKinney</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">54.08%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_2_4"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
                                                            <table
                                                                class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr
                                                                        class="fs-7 fw-bold text-gray-400 border-bottom-0">
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
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-11.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                                        Jones</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">New
                                                                                        York</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">52.34%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_3_1"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-23.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald
                                                                                        Richards</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Madrid</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">77.65%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_3_2"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="danger"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-4.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie
                                                                                        Alexander</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Pune</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">82.47%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_3_3"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-1.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Courtney
                                                                                        Henry</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">67.84%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_3_4"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
                                                            <table
                                                                class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr
                                                                        class="fs-7 fw-bold text-gray-400 border-bottom-0">
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
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-12.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene
                                                                                        McCoy</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">London</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">53.44%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_4_1"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-21.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                                        McKinneyr</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">74.64%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_4_2"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="danger"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-30.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                                        Jones</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">PManila</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">88.56%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_4_3"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-14.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                                        Howard</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Iceland</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">63.16%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_4_4"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
                                                            <table
                                                                class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr
                                                                        class="fs-7 fw-bold text-gray-400 border-bottom-0">
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
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-6.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
                                                                                        Cooper</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">68.54%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_5_1"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-10.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                                        Howard</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Kiribati</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">55.83%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_5_2"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="danger"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-9.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                                        Jones</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">93.46%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_5_3"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-50px me-3">
                                                                                    <img src="assets/media/avatars/300-3.jpg"
                                                                                        class="" alt="" />
                                                                                </div>


                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph
                                                                                        Edwards</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">64.48%</span>
                                                                        </td>

                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_5_4"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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


                    <!--begin::Footer-->
                    <div id="kt_app_footer" class="app-footer ">
                        <!--begin::Footer container-->
                        <div
                            class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                <a href="https://keenthemes.com/" target="_blank"
                                    class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->


                        </div>
                        <!--end::Footer container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->


            </div>
            <!--end::Wrapper-->


        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

