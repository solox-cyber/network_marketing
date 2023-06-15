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
                        Course Creation
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



                            </div>
                            <!--end::Blog-->
                            <!--begin::Form-->
                            <form action="#" class="form mb-15" method="post" id="kt_careers_form">
<!--begin::Input group-->
<div class="row mb-6">

<!--end::Label-->
<label class="required fs-5 fw-semibold mb-2">Course Logo</label>
                                        <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../assets/media/svg/avatars/blank.svg')">
                            <!--begin::Preview existing avatar-->
                            @if(Auth::user()->profilePicture)
                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{ asset('storage/' . str_replace('public/', '', Auth::user()->profilePicture->path)) }}')">

                            </div>
                            <!--end::Preview existing avatar-->
                            @else
                            <div class="image-input-wrapper w-125px h-125px mb-4" style="background-image: url('{{ substr(Auth::user()->name, 0, 1) }}')"></div>
                            @endif
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                <!--begin::Inputs-->
                                <input type="file" name="profile_picture" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->

                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                            <!--end::Cancel-->

                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->
                    </div>
</div>


                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-5 fw-semibold mb-2">About Course</label>
                                        <!--end::Label-->

                                        <textarea class="form-control form-control-solid" rows="2" name="experience" placeholder=""></textarea>
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
                                        <input class="form-control form-control-solid" type="datetime" placeholder="" name="email" />
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

