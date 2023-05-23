
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


 <!--begin::Logo-->
 <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
     <!--begin::Logo image-->
     <a href="index.html">
         <img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-30px app-sidebar-logo-default" />
     </a>
     <!--end::Logo image-->

     <!--begin::Sidebar toggle-->
     <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-sm h-30px w-30px rotate " data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">

         <i class="ki-duotone ki-double-left fs-2 rotate-180"><span class="path1"></span><span class="path2"></span></i>
     </div>
     <!--end::Sidebar toggle-->
 </div>
 <!--end::Logo-->
 <!--begin::sidebar menu-->
 <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
     <!--begin::Menu wrapper-->
     <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
         <!--begin::Menu-->
         <div class="
                menu
                menu-column
                menu-rounded
                menu-sub-indention
                fw-semibold
                px-3
            " id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-category fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title">Dashboards</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                     <div class="menu-item"><!--begin:Menu link--><a class="menu-link active" href="index.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Default</span></a><!--end:Menu link--></div>
                     <!--end:Menu item-->
                 </div><!--end:Menu sub-->
             </div><!--end:Menu item--><!--begin:Menu item-->
             <div class="menu-item pt-5"><!--begin:Menu content-->
                 <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Pages</span></div>
                 <!--end:Menu content-->
             </div><!--end:Menu item--><!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-address-book fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">User Profile</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a class="menu-link" href="pages/user-profile/overview.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Overview</span></a><!--end:Menu link-->
                     </div>

                     <!--end:Menu item-->
                 </div><!--end:Menu sub-->
             </div><!--end:Menu item--><!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-educare fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title">Account</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                     <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="account/overview.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Overview</span></a><!--end:Menu link--></div>
                     <!--end:Menu item--><!--begin:Menu item-->
                     <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="account/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--end:Menu link--></div>
                     <!--end:Menu item--><!--begin:Menu item-->
                     <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="account/security.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Security</span></a><!--end:Menu link--></div>
                     <!--end:Menu item--><!--begin:Menu item-->
                     <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="account/billing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Billing</span></a><!--end:Menu link--></div>
                     <!--end:Menu item--><!--begin:Menu item-->
                     <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="account/referrals.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Referrals</span></a><!--end:Menu link--></div>
                     <!--end:Menu item--><!--begin:Menu item-->

                 </div><!--end:Menu sub-->
             </div><!--end:Menu item--><!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-abstract-25 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Contacts</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                     <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="apps/contacts/getting-started.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Getting Started</span></a><!--end:Menu link-->
                     </div><!--end:Menu item--><!--begin:Menu item-->
                     <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="apps/contacts/add-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Contact</span></a><!--end:Menu link--></div>
                     <!--end:Menu item--><!--begin:Menu item-->
                     <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="apps/contacts/edit-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Contact</span></a><!--end:Menu link--></div>
                     <!--end:Menu item--><!--begin:Menu item-->
                     <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="apps/contacts/view-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Contact</span></a><!--end:Menu link--></div>
                     <!--end:Menu item-->
                 </div><!--end:Menu sub-->
             </div><!--end:Menu item-->
         </div>
         <!--end::Menu-->
     </div>
     <!--end::Menu wrapper-->
 </div>
 <!--end::sidebar menu-->
 </div><!--end::Sidebar-->
