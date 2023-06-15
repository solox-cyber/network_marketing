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
                        Careers Apply
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
                            Careers </li>
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
                <!--begin::Careers main-->
                <div class="d-flex flex-column flex-xl-row">
                    <!--begin::Content-->
                    <div class="card bg-body me-xl-9 mb-9 mb-xl-0">
                        <div class="card-body">
                            <!--begin::Blog-->
                            <div class="mb-11 ">
                                <!--begin::Title-->
                                <div class="mb-9">
                                    <h3 class="fs-2qx fw-bold text-dark">Join Our Team</h3>

                                    <span class="fs-5 fw-semibold text-gray-400">Save thousands to millions of bucks by using tool great skills</span>
                                </div>
                                <!--end::Title-->


                            </div>
                            <!--end::Blog-->
                            <!--begin::Form-->
                            <form action="#" class="form mb-15" method="post" id="kt_careers_form">


                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-5 fw-semibold mb-2">First Name</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="first_name" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--end::Label-->
                                        <label class="required fs-5 fw-semibold mb-2">Last Name</label>
                                        <!--end::Label-->

                                        <!--end::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="last_name" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-5 fw-semibold mb-2">Email</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="" name="email" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--end::Label-->
                                        <label class="fs-5 fw-semibold mb-2">Mobile No</label>
                                        <!--end::Label-->

                                        <!--end::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="mobileno" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-5 fw-semibold mb-2">Age</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="age" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--end::Label-->
                                        <label class="required fs-5 fw-semibold mb-2">City</label>
                                        <!--end::Label-->

                                        <!--end::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="city" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-5 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Position</span>

                                        <span class="ms-2" data-bs-toggle="tooltip" title="Your payment statements may very based on selected position">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Select-->
                                    <select name="position" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid">
                                        <option value="Web Developer">Web Developer</option>
                                        <option value="Web Designer">Web Designer</option>
                                        <option value="Art Director">Art Director</option>
                                        <option value="Finance Manager">Finance Manager</option>
                                        <option value="Project Manager">Project Manager</option>
                                        <option value="System Administrator">System Administrator</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-5 fw-semibold mb-2">Expected Salary</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="salary" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--end::Label-->
                                        <label class="required fs-5 fw-semibold mb-2">Srart Date</label>
                                        <!--end::Label-->

                                        <!--end::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="start_date" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-5 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-semibold mb-2">Website (If Any)</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="website" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-5">
                                    <label class="fs-6 fw-semibold mb-2">Experience (Optional)</label>

                                    <textarea class="form-control form-control-solid" rows="2" name="experience" placeholder="">
        </textarea>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8">
                                    <label class="fs-6 fw-semibold mb-2">Application</label>

                                    <textarea class="form-control form-control-solid" rows="4" name="application" placeholder="">
        </textarea>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Separator-->
                                <div class="separator mb-8"></div>
                                <!--end::Separator-->

                                <!--begin::Submit-->
                                <button type="submit" class="btn btn-primary" id="kt_careers_submit_button">

                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">
                                        Apply Now</span>
                                    <!--end::Indicator label-->

                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                    <!--end::Indicator progress--> </button>
                                <!--end::Submit-->
                            </form>
                            <!--end::Form-->



                        </div>
                    </div>
                    <!--end::Content-->

                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 w-xl-350px">

                       




                        <!--begin::Recent posts-->
                        <div class="card card-flush bg-body mb-9 ">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <h4 class="card-title fw-bold text-gray-800 fs-2">
                                    Recent from Blog </h4>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-2">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Symbol-->

                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url('../../assets/media/stock/600x400/img-79.jpg')"></div>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="m-0">
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">About Bootstrap Admin</a>

                                        <span class="text-gray-600 fw-semibold d-block pt-1 fs-8">We’ve been a focused on making a the sky</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Symbol-->

                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url('../../assets/media/stock/600x400/img-19.jpg')"></div>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="m-0">
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">A yellow sofa</a>

                                        <span class="text-gray-600 fw-semibold d-block pt-1 fs-8">We’ve been a focused on making a the sky</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Symbol-->

                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url('../../assets/media/stock/600x400/img-72.jpg')"></div>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="m-0">
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Our Camra Mega Set</a>

                                        <span class="text-gray-600 fw-semibold d-block pt-1 fs-8">We’ve been a focused on making a the sky</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center ">
                                    <!--begin::Symbol-->

                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url('../../assets/media/stock/600x400/img-50.jpg')"></div>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="m-0">
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Time to cook and eat?</a>

                                        <span class="text-gray-600 fw-semibold d-block pt-1 fs-8">We’ve been a focused on making a the sky</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->



                                <!--begin::Link-->
                                <a href="../blog/home.html" class="text-primary opacity-75-hover pt-8 fs-6 fw-semibold d-block">
                                    Explore More
                                </a>
                                <!--end::Link-->

                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Recent posts-->

                        <!--begin::Connected-->
                        <div class="card card-flush bg-body ">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <h4 class="card-title fw-bold text-text-gray-800 fs-2">Stay Connected</h4>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-2">
                                <!--begin::Items-->
                                <div class="mb-6">
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="../../assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />

                                        <span class="text-gray-700 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--begin::Items-->
                                <!--begin::Items-->
                                <div class="mb-6">
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="../../assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />

                                        <span class="text-gray-700 text-hover-primary fs-5 mb-6">Github</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--begin::Items-->
                                <!--begin::Items-->
                                <div class="mb-6">
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="../../assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />

                                        <span class="text-gray-700 text-hover-primary fs-5 mb-6">Twitter</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--begin::Items-->
                                <!--begin::Items-->
                                <div class="mb-6">
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="../../assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />

                                        <span class="text-gray-700 text-hover-primary fs-5 mb-6">Dribbble</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--begin::Items-->
                                <!--begin::Items-->
                                <div class="">
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="../../assets/media/svg/brand-logos/instagram-2016.svg" class="h-20px me-2" alt="" />

                                        <span class="text-gray-700 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--begin::Items-->

                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Connected-->
                    </div>
                    <!--end::Sidebar-->
                </div>
                <!--end::Careers main-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    @endsection
