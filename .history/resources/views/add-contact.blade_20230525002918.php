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
                                <i class="ki-duotone ki-badge fs-1 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                <h2>Add New Contact</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <!--begin::Form-->
                            <form class="form" action="{{ route('contact.add') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

                            <!--begin::Input group-->
                                <div class="mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-3">
                                        <span>Update Avatar</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Image input wrapper-->
                                    <div class="mt-1">

                                        <!--begin::Image placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url('../../assets/media/svg/files/blank-image.svg');
                                            }

                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                background-image: url('../../assets/media/svg/files/blank-image-dark.svg');
                                            }
                                        </style>
                                        <!--end::Image placeholder-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty " data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
                                            <!--end::Preview existing avatar-->

                                            <!--begin::Edit-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="profile_picture" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit-->

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
                                    <!--end::Image input wrapper-->
                                </div>
                                <!--end::Input group-->


                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Name</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="name" value=""  />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->


                                <!--begin::Row-->
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Email</span>

                                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
                                                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="email" class="form-control form-control-solid" name="email" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Phone</span>

                                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's phone number (optional).">
                                                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="phone_number" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>City</span>

                                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's city of residence (optional).">
                                                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="city" value=""/>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Country</span>
                                            </label>
                                            <!--end::Label-->

                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select id="kt_ecommerce_select2_country" class="form-select form-select-solid" name="country" data-kt-ecommerce-settings-type="select2_flags" data-placeholder="Select a country">
                                                    <option></option>
                                                    <option value="Afghanistan" data-kt-select2-country="../../assets/media/flags/afghanistan.svg">
                                                        Afghanistan </option>
                                                    <option value="Aland Islands" data-kt-select2-country="../../assets/media/flags/aland-islands.svg">
                                                        Aland Islands </option>
                                                    <option value="Albania" data-kt-select2-country="../../assets/media/flags/albania.svg">
                                                        Albania </option>
                                                    <option value="Algeria" data-kt-select2-country="../../assets/media/flags/algeria.svg">
                                                        Algeria </option>
                                                    <option value="American Samoa" data-kt-select2-country="../../assets/media/flags/american-samoa.svg">
                                                        American Samoa </option>
                                                    <option value="Andorra" data-kt-select2-country="../../assets/media/flags/andorra.svg">
                                                        Andorra </option>
                                                    <option value="Angola" data-kt-select2-country="../../assets/media/flags/angola.svg">
                                                        Angola </option>
                                                    <option value="Anguilla" data-kt-select2-country="../../assets/media/flags/anguilla.svg">
                                                        Anguilla </option>
                                                    <option value="Antigua and Barbuda" data-kt-select2-country="../../assets/media/flags/antigua-and-barbuda.svg">
                                                        Antigua and Barbuda </option>
                                                    <option value="Argentina" data-kt-select2-country="../../assets/media/flags/argentina.svg">
                                                        Argentina </option>
                                                    <option value="Armenia" data-kt-select2-country="../../assets/media/flags/armenia.svg">
                                                        Armenia </option>
                                                    <option value="Aruba" data-kt-select2-country="../../assets/media/flags/aruba.svg">
                                                        Aruba </option>
                                                    <option value="Australia" data-kt-select2-country="../../assets/media/flags/australia.svg">
                                                        Australia </option>
                                                    <option value="Austria" data-kt-select2-country="../../assets/media/flags/austria.svg">
                                                        Austria </option>
                                                    <option value="Azerbaijan" data-kt-select2-country="../../assets/media/flags/azerbaijan.svg">
                                                        Azerbaijan </option>
                                                    <option value="Bahamas" data-kt-select2-country="../../assets/media/flags/bahamas.svg">
                                                        Bahamas </option>
                                                    <option value="Bahrain" data-kt-select2-country="../../assets/media/flags/bahrain.svg">
                                                        Bahrain </option>
                                                    <option value="Bangladesh" data-kt-select2-country="../../assets/media/flags/bangladesh.svg">
                                                        Bangladesh </option>
                                                    <option value="Barbados" data-kt-select2-country="../../assets/media/flags/barbados.svg">
                                                        Barbados </option>
                                                    <option value="Belarus" data-kt-select2-country="../../assets/media/flags/belarus.svg">
                                                        Belarus </option>
                                                    <option value="Belgium" data-kt-select2-country="../../assets/media/flags/belgium.svg">
                                                        Belgium </option>
                                                    <option value="Belize" data-kt-select2-country="../../assets/media/flags/belize.svg">
                                                        Belize </option>
                                                    <option value="Benin" data-kt-select2-country="../../assets/media/flags/benin.svg">
                                                        Benin </option>
                                                    <option value="Bermuda" data-kt-select2-country="../../assets/media/flags/bermuda.svg">
                                                        Bermuda </option>
                                                    <option value="Bhutan" data-kt-select2-country="../../assets/media/flags/bhutan.svg">
                                                        Bhutan </option>
                                                    <option value=" Bolivia, Plurinational State of" data-kt-select2-country="../../assets/media/flags/bolivia.svg">
                                                        Bolivia, Plurinational State of </option>
                                                    <option value="Bonaire, Sint Eustatius and Saba" data-kt-select2-country="../../assets/media/flags/bonaire.svg">
                                                        Bonaire, Sint Eustatius and Saba </option>
                                                    <option value=" Bosnia and Herzegovina" data-kt-select2-country="../../assets/media/flags/bosnia-and-herzegovina.svg">
                                                        Bosnia and Herzegovina </option>
                                                    <option value="Botswana" data-kt-select2-country="../../assets/media/flags/botswana.svg">
                                                        Botswana </option>
                                                    <option value="Brazil" data-kt-select2-country="../../assets/media/flags/brazil.svg">
                                                        Brazil </option>
                                                    <option value="British Indian Ocean Territory" data-kt-select2-country="../../assets/media/flags/british-indian-ocean-territory.svg">
                                                        British Indian Ocean Territory </option>
                                                    <option value="Brunei Darussalam" data-kt-select2-country="../../assets/media/flags/brunei.svg">
                                                        Brunei Darussalam </option>
                                                    <option value=" Bulgaria " data-kt-select2-country="../../assets/media/flags/bulgaria.svg">
                                                        Bulgaria </option>
                                                    <option value="Burkina Faso" data-kt-select2-country="../../assets/media/flags/burkina-faso.svg">
                                                        Burkina Faso </option>
                                                    <option value=" Burundi" data-kt-select2-country="../../assets/media/flags/burundi.svg">
                                                        Burundi </option>
                                                    <option value="Cambodia" data-kt-select2-country="../../assets/media/flags/cambodia.svg">
                                                        Cambodia </option>
                                                    <option value="Cameroon" data-kt-select2-country="../../assets/media/flags/cameroon.svg">
                                                        Cameroon </option>
                                                    <option value="CA" data-kt-select2-country="../../assets/media/flags/canada.svg">
                                                        Canada </option>
                                                    <option value="CV" data-kt-select2-country="../../assets/media/flags/cape-verde.svg">
                                                        Cape Verde </option>
                                                    <option value="Cayman Islands" data-kt-select2-country="{{ asset('media/flags/cayman-islands.svg')}}">
                                                        Cayman Islands </option>
                                                    <option value="CF" data-kt-select2-country="../../assets/media/flags/central-african-republic.svg">
                                                        Central African Republic </option>
                                                    <option value=" Chad" data-kt-select2-country="../../assets/media/flags/chad.svg">
                                                        Chad </option>
                                                    <option value="CL" data-kt-select2-country="../../assets/media/flags/chile.svg">
                                                        Chile </option>
                                                    <option value="Chile" data-kt-select2-country="../../assets/media/flags/china.svg">
                                                        China </option>
                                                    <option value="Christmas Island" data-kt-select2-country="../../assets/media/flags/christmas-island.svg">
                                                        Christmas Island </option>
                                                    <option value="Cocos (Keeling) Islands" data-kt-select2-country="../../assets/media/flags/cocos-island.svg">
                                                        Cocos (Keeling) Islands </option>
                                                    <option value="Colombia" data-kt-select2-country="../../assets/media/flags/colombia.svg">
                                                        Colombia </option>
                                                    <option value="Comoros" data-kt-select2-country="../../assets/media/flags/comoros.svg">
                                                        Comoros </option>
                                                    <option value="Cook Islands" data-kt-select2-country="../../assets/media/flags/cook-islands.svg">
                                                        Cook Islands </option>
                                                    <option value="Costa Rica" data-kt-select2-country="../../assets/media/flags/costa-rica.svg">
                                                        Costa Rica </option>
                                                    <option value="Côte d'Ivoire" data-kt-select2-country="../../assets/media/flags/ivory-coast.svg">
                                                        Côte d'Ivoire </option>
                                                    <option value="Croatia" data-kt-select2-country="../../assets/media/flags/croatia.svg">
                                                        Croatia </option>
                                                    <option value="Cuba" data-kt-select2-country="../../assets/media/flags/cuba.svg">
                                                        Cuba </option>
                                                    <option value="Curaçao" data-kt-select2-country="../../assets/media/flags/curacao.svg">
                                                        Curaçao </option>
                                                    <option value="Czech Republic" data-kt-select2-country="../../assets/media/flags/czech-republic.svg">
                                                        Czech Republic </option>
                                                    <option value="Denmark" data-kt-select2-country="../../assets/media/flags/denmark.svg">
                                                        Denmark </option>
                                                    <option value="Djibouti" data-kt-select2-country="../../assets/media/flags/djibouti.svg">
                                                        Djibouti </option>
                                                    <option value="Dominica" data-kt-select2-country="../../assets/media/flags/dominica.svg">
                                                        Dominica </option>
                                                    <option value="Dominican Republic" data-kt-select2-country="../../assets/media/flags/dominican-republic.svg">
                                                        Dominican Republic </option>
                                                    <option value="Ecuador" data-kt-select2-country="../../assets/media/flags/ecuador.svg">
                                                        Ecuador </option>
                                                    <option value="Egypt" data-kt-select2-country="../../assets/media/flags/egypt.svg">
                                                        Egypt </option>
                                                    <option value="El Salvador" data-kt-select2-country="../../assets/media/flags/el-salvador.svg">
                                                        El Salvador </option>
                                                    <option value="Equatorial Guinea" data-kt-select2-country="../../assets/media/flags/equatorial-guinea.svg">
                                                        Equatorial Guinea </option>
                                                    <option value="Eritrea" data-kt-select2-country="../../assets/media/flags/eritrea.svg">
                                                        Eritrea </option>
                                                    <option value="Estonia" data-kt-select2-country="../../assets/media/flags/estonia.svg">
                                                        Estonia </option>
                                                    <option value="Ethiopia" data-kt-select2-country="../../assets/media/flags/ethiopia.svg">
                                                        Ethiopia </option>
                                                    <option value="Falkland Islands (Malvinas)" data-kt-select2-country="../../assets/media/flags/falkland-islands.svg">
                                                        Falkland Islands (Malvinas) </option>
                                                    <option value="Fiji" data-kt-select2-country="../../assets/media/flags/fiji.svg">
                                                        Fiji </option>
                                                    <option value="Finland" data-kt-select2-country="../../assets/media/flags/finland.svg">
                                                        Finland </option>
                                                    <option value="France" data-kt-select2-country="../../assets/media/flags/france.svg">
                                                        France </option>
                                                    <option value="French Polynesia" data-kt-select2-country="../../assets/media/flags/french-polynesia.svg">
                                                        French Polynesia </option>
                                                    <option value="Gabon" data-kt-select2-country="../../assets/media/flags/gabon.svg">
                                                        Gabon </option>
                                                    <option value="Gambia" data-kt-select2-country="../../assets/media/flags/gambia.svg">
                                                        Gambia </option>
                                                    <option value="Georgia" data-kt-select2-country="../../assets/media/flags/georgia.svg">
                                                        Georgia </option>
                                                    <option value="Germany" data-kt-select2-country="../../assets/media/flags/germany.svg">
                                                        Germany </option>
                                                    <option value="Ghana" data-kt-select2-country="../../assets/media/flags/ghana.svg">
                                                        Ghana </option>
                                                    <option value="Gibraltar" data-kt-select2-country="../../assets/media/flags/gibraltar.svg">
                                                        Gibraltar </option>
                                                    <option value="Greece" data-kt-select2-country="../../assets/media/flags/greece.svg">
                                                        Greece </option>
                                                    <option value="Greenland" data-kt-select2-country="../../assets/media/flags/greenland.svg">
                                                        Greenland </option>
                                                    <option value="Grenada" data-kt-select2-country="../../assets/media/flags/grenada.svg">
                                                        Grenada </option>
                                                    <option value="Guam" data-kt-select2-country="../../assets/media/flags/guam.svg">
                                                        Guam </option>
                                                    <option value="Guatemala" data-kt-select2-country="../../assets/media/flags/guatemala.svg">
                                                        Guatemala </option>
                                                    <option value="Guernsey" data-kt-select2-country="../../assets/media/flags/guernsey.svg">
                                                        Guernsey </option>
                                                    <option value="Guinea" data-kt-select2-country="../../assets/media/flags/guinea.svg">
                                                        Guinea </option>
                                                    <option value="Guinea-Bissau" data-kt-select2-country="../../assets/media/flags/guinea-bissau.svg">
                                                        Guinea-Bissau </option>
                                                    <option value="Haiti" data-kt-select2-country="../../assets/media/flags/haiti.svg">
                                                        Haiti </option>
                                                    <option value="Holy See (Vatican City State)" data-kt-select2-country="../../assets/media/flags/vatican-city.svg">
                                                        Holy See (Vatican City State) </option>
                                                    <option value="Honduras" data-kt-select2-country="../../assets/media/flags/honduras.svg">
                                                        Honduras </option>
                                                    <option value="Hong Kong" data-kt-select2-country="../../assets/media/flags/hong-kong.svg">
                                                        Hong Kong </option>
                                                    <option value="HU" data-kt-select2-country="../../assets/media/flags/hungary.svg">
                                                        Hungary </option>
                                                    <option value="Iceland" data-kt-select2-country="../../assets/media/flags/iceland.svg">
                                                        Iceland </option>
                                                    <option value="India" data-kt-select2-country="../../assets/media/flags/india.svg">
                                                        India </option>
                                                    <option value="Indonesia" data-kt-select2-country="../../assets/media/flags/indonesia.svg">
                                                        Indonesia </option>
                                                    <option value="Iran, Islamic Republic of" data-kt-select2-country="../../assets/media/flags/iran.svg">
                                                        Iran, Islamic Republic of </option>
                                                    <option value="Iraq" data-kt-select2-country="../../assets/media/flags/iraq.svg">
                                                        Iraq </option>
                                                    <option value="Ireland" data-kt-select2-country="../../assets/media/flags/ireland.svg">
                                                        Ireland </option>
                                                    <option value="Isle of Man" data-kt-select2-country="../../assets/media/flags/isle-of-man.svg">
                                                        Isle of Man </option>
                                                    <option value="Israel" data-kt-select2-country="../../assets/media/flags/israel.svg">
                                                        Israel </option>
                                                    <option value="Italy" data-kt-select2-country="../../assets/media/flags/italy.svg">
                                                        Italy </option>
                                                    <option value="Jamaica" data-kt-select2-country="../../assets/media/flags/jamaica.svg">
                                                        Jamaica </option>
                                                    <option value="Japan" data-kt-select2-country="../../assets/media/flags/japan.svg">
                                                        Japan </option>
                                                    <option value="Jersey" data-kt-select2-country="../../assets/media/flags/jersey.svg">
                                                        Jersey </option>
                                                    <option value="Jordan" data-kt-select2-country="../../assets/media/flags/jordan.svg">
                                                        Jordan </option>
                                                    <option value="Kazakhstan" data-kt-select2-country="../../assets/media/flags/kazakhstan.svg">
                                                        Kazakhstan </option>
                                                    <option value="Kenya" data-kt-select2-country="../../assets/media/flags/kenya.svg">
                                                        Kenya </option>
                                                    <option value="Kiribati" data-kt-select2-country="../../assets/media/flags/kiribati.svg">
                                                        Kiribati </option>
                                                    <option value="Korea, Democratic People's Republic of" data-kt-select2-country="../../assets/media/flags/north-korea.svg">
                                                        Korea, Democratic People's Republic of </option>
                                                    <option value="Kuwait" data-kt-select2-country="../../assets/media/flags/kuwait.svg">
                                                        Kuwait </option>
                                                    <option value="Kyrgyzstan" data-kt-select2-country="../../assets/media/flags/kyrgyzstan.svg">
                                                        Kyrgyzstan </option>
                                                    <option value="Lao People's Democratic Republic" data-kt-select2-country="../../assets/media/flags/laos.svg">
                                                        Lao People's Democratic Republic </option>
                                                    <option value="Latvia" data-kt-select2-country="../../assets/media/flags/latvia.svg">
                                                        Latvia </option>
                                                    <option value="Lebanon" data-kt-select2-country="../../assets/media/flags/lebanon.svg">
                                                        Lebanon </option>
                                                    <option value="Lesotho" data-kt-select2-country="../../assets/media/flags/lesotho.svg">
                                                        Lesotho </option>
                                                    <option value="Liberia" data-kt-select2-country="../../assets/media/flags/liberia.svg">
                                                        Liberia </option>
                                                    <option value="Libya" data-kt-select2-country="../../assets/media/flags/libya.svg">
                                                        Libya </option>
                                                    <option value="Liechtenstein" data-kt-select2-country="../../assets/media/flags/liechtenstein.svg">
                                                        Liechtenstein </option>
                                                    <option value="Lithuania" data-kt-select2-country="../../assets/media/flags/lithuania.svg">
                                                        Lithuania </option>
                                                    <option value="Luxembourg" data-kt-select2-country="../../assets/media/flags/luxembourg.svg">
                                                        Luxembourg </option>
                                                    <option value="Macao" data-kt-select2-country="../../assets/media/flags/macao.svg">
                                                        Macao </option>
                                                    <option value="Madagascar" data-kt-select2-country="../../assets/media/flags/madagascar.svg">
                                                        Madagascar </option>
                                                    <option value="Malawi" data-kt-select2-country="../../assets/media/flags/malawi.svg">
                                                        Malawi </option>
                                                    <option value="Malaysia" data-kt-select2-country="../../assets/media/flags/malaysia.svg">
                                                        Malaysia </option>
                                                    <option value="Maldives" data-kt-select2-country="../../assets/media/flags/maldives.svg">
                                                        Maldives </option>
                                                    <option value="Mali" data-kt-select2-country="../../assets/media/flags/mali.svg">
                                                        Mali </option>
                                                    <option value="Malta" data-kt-select2-country="../../assets/media/flags/malta.svg">
                                                        Malta </option>
                                                    <option value="Marshall Islands" data-kt-select2-country="../../assets/media/flags/marshall-island.svg">
                                                        Marshall Islands </option>
                                                    <option value="Martinique" data-kt-select2-country="../../assets/media/flags/martinique.svg">
                                                        Martinique </option>
                                                    <option value="Mauritania" data-kt-select2-country="../../assets/media/flags/mauritania.svg">
                                                        Mauritania </option>
                                                    <option value="Mauritius" data-kt-select2-country="../../assets/media/flags/mauritius.svg">
                                                        Mauritius </option>
                                                    <option value="Mexico" data-kt-select2-country="../../assets/media/flags/mexico.svg">
                                                        Mexico </option>
                                                    <option value="Micronesia, Federated States of" data-kt-select2-country="../../assets/media/flags/micronesia.svg">
                                                        Micronesia, Federated States of </option>
                                                    <option value="Moldova, Republic of" data-kt-select2-country="../../assets/media/flags/moldova.svg">
                                                        Moldova, Republic of </option>
                                                    <option value="MC" data-kt-select2-country="../../assets/media/flags/monaco.svg">
                                                        Monaco </option>
                                                    <option value="MN" data-kt-select2-country="../../assets/media/flags/mongolia.svg">
                                                        Mongolia </option>
                                                    <option value="ME" data-kt-select2-country="../../assets/media/flags/montenegro.svg">
                                                        Montenegro </option>
                                                    <option value="MS" data-kt-select2-country="../../assets/media/flags/montserrat.svg">
                                                        Montserrat </option>
                                                    <option value="MA" data-kt-select2-country="../../assets/media/flags/morocco.svg">
                                                        Morocco </option>
                                                    <option value="MZ" data-kt-select2-country="../../assets/media/flags/mozambique.svg">
                                                        Mozambique </option>
                                                    <option value="MM" data-kt-select2-country="../../assets/media/flags/myanmar.svg">
                                                        Myanmar </option>
                                                    <option value="NA" data-kt-select2-country="../../assets/media/flags/namibia.svg">
                                                        Namibia </option>
                                                    <option value="NR" data-kt-select2-country="../../assets/media/flags/nauru.svg">
                                                        Nauru </option>
                                                    <option value="NP" data-kt-select2-country="../../assets/media/flags/nepal.svg">
                                                        Nepal </option>
                                                    <option value="NL" data-kt-select2-country="../../assets/media/flags/netherlands.svg">
                                                        Netherlands </option>
                                                    <option value="NZ" data-kt-select2-country="../../assets/media/flags/new-zealand.svg">
                                                        New Zealand </option>
                                                    <option value="NI" data-kt-select2-country="../../assets/media/flags/nicaragua.svg">
                                                        Nicaragua </option>
                                                    <option value="NE" data-kt-select2-country="../../assets/media/flags/niger.svg">
                                                        Niger </option>
                                                    <option value="NG" data-kt-select2-country="../../assets/media/flags/nigeria.svg">
                                                        Nigeria </option>
                                                    <option value="NU" data-kt-select2-country="../../assets/media/flags/niue.svg">
                                                        Niue </option>
                                                    <option value="NF" data-kt-select2-country="../../assets/media/flags/norfolk-island.svg">
                                                        Norfolk Island </option>
                                                    <option value="MP" data-kt-select2-country="../../assets/media/flags/northern-mariana-islands.svg">
                                                        Northern Mariana Islands </option>
                                                    <option value="NO" data-kt-select2-country="../../assets/media/flags/norway.svg">
                                                        Norway </option>
                                                    <option value="OM" data-kt-select2-country="../../assets/media/flags/oman.svg">
                                                        Oman </option>
                                                    <option value="PK" data-kt-select2-country="../../assets/media/flags/pakistan.svg">
                                                        Pakistan </option>
                                                    <option value="PW" data-kt-select2-country="../../assets/media/flags/palau.svg">
                                                        Palau </option>
                                                    <option value="PS" data-kt-select2-country="../../assets/media/flags/palestine.svg">
                                                        Palestinian Territory, Occupied </option>
                                                    <option value="PA" data-kt-select2-country="../../assets/media/flags/panama.svg">
                                                        Panama </option>
                                                    <option value="PG" data-kt-select2-country="../../assets/media/flags/papua-new-guinea.svg">
                                                        Papua New Guinea </option>
                                                    <option value="PY" data-kt-select2-country="../../assets/media/flags/paraguay.svg">
                                                        Paraguay </option>
                                                    <option value="PE" data-kt-select2-country="../../assets/media/flags/peru.svg">
                                                        Peru </option>
                                                    <option value="PH" data-kt-select2-country="../../assets/media/flags/philippines.svg">
                                                        Philippines </option>
                                                    <option value="PL" data-kt-select2-country="../../assets/media/flags/poland.svg">
                                                        Poland </option>
                                                    <option value="PT" data-kt-select2-country="../../assets/media/flags/portugal.svg">
                                                        Portugal </option>
                                                    <option value="PR" data-kt-select2-country="../../assets/media/flags/puerto-rico.svg">
                                                        Puerto Rico </option>
                                                    <option value="QA" data-kt-select2-country="../../assets/media/flags/qatar.svg">
                                                        Qatar </option>
                                                    <option value="RO" data-kt-select2-country="../../assets/media/flags/romania.svg">
                                                        Romania </option>
                                                    <option value="RU" data-kt-select2-country="../../assets/media/flags/russia.svg">
                                                        Russian Federation </option>
                                                    <option value="RW" data-kt-select2-country="../../assets/media/flags/rwanda.svg">
                                                        Rwanda </option>
                                                    <option value="BL" data-kt-select2-country="../../assets/media/flags/st-barts.svg">
                                                        Saint Barthélemy </option>
                                                    <option value="KN" data-kt-select2-country="../../assets/media/flags/saint-kitts-and-nevis.svg">
                                                        Saint Kitts and Nevis </option>
                                                    <option value="LC" data-kt-select2-country="../../assets/media/flags/st-lucia.svg">
                                                        Saint Lucia </option>
                                                    <option value="MF" data-kt-select2-country="../../assets/media/flags/sint-maarten.svg">
                                                        Saint Martin (French part) </option>
                                                    <option value="VC" data-kt-select2-country="../../assets/media/flags/st-vincent-and-the-grenadines.svg">
                                                        Saint Vincent and the Grenadines </option>
                                                    <option value="WS" data-kt-select2-country="../../assets/media/flags/samoa.svg">
                                                        Samoa </option>
                                                    <option value="SM" data-kt-select2-country="../../assets/media/flags/san-marino.svg">
                                                        San Marino </option>
                                                    <option value="ST" data-kt-select2-country="../../assets/media/flags/sao-tome-and-prince.svg">
                                                        Sao Tome and Principe </option>
                                                    <option value="SA" data-kt-select2-country="../../assets/media/flags/saudi-arabia.svg">
                                                        Saudi Arabia </option>
                                                    <option value="SN" data-kt-select2-country="../../assets/media/flags/senegal.svg">
                                                        Senegal </option>
                                                    <option value="RS" data-kt-select2-country="../../assets/media/flags/serbia.svg">
                                                        Serbia </option>
                                                    <option value="SC" data-kt-select2-country="../../assets/media/flags/seychelles.svg">
                                                        Seychelles </option>
                                                    <option value="SL" data-kt-select2-country="../../assets/media/flags/sierra-leone.svg">
                                                        Sierra Leone </option>
                                                    <option value="SG" data-kt-select2-country="../../assets/media/flags/singapore.svg">
                                                        Singapore </option>
                                                    <option value="SX" data-kt-select2-country="../../assets/media/flags/sint-maarten.svg">
                                                        Sint Maarten (Dutch part) </option>
                                                    <option value="SK" data-kt-select2-country="../../assets/media/flags/slovakia.svg">
                                                        Slovakia </option>
                                                    <option value="SI" data-kt-select2-country="../../assets/media/flags/slovenia.svg">
                                                        Slovenia </option>
                                                    <option value="SB" data-kt-select2-country="../../assets/media/flags/solomon-islands.svg">
                                                        Solomon Islands </option>
                                                    <option value="SO" data-kt-select2-country="../../assets/media/flags/somalia.svg">
                                                        Somalia </option>
                                                    <option value="ZA" data-kt-select2-country="../../assets/media/flags/south-africa.svg">
                                                        South Africa </option>
                                                    <option value="KR" data-kt-select2-country="../../assets/media/flags/south-korea.svg">
                                                        South Korea </option>
                                                    <option value="SS" data-kt-select2-country="../../assets/media/flags/south-sudan.svg">
                                                        South Sudan </option>
                                                    <option value="ES" data-kt-select2-country="../../assets/media/flags/spain.svg">
                                                        Spain </option>
                                                    <option value="LK" data-kt-select2-country="../../assets/media/flags/sri-lanka.svg">
                                                        Sri Lanka </option>
                                                    <option value="SD" data-kt-select2-country="../../assets/media/flags/sudan.svg">
                                                        Sudan </option>
                                                    <option value="SR" data-kt-select2-country="../../assets/media/flags/suriname.svg">
                                                        Suriname </option>
                                                    <option value="SZ" data-kt-select2-country="../../assets/media/flags/swaziland.svg">
                                                        Swaziland </option>
                                                    <option value="SE" data-kt-select2-country="../../assets/media/flags/sweden.svg">
                                                        Sweden </option>
                                                    <option value="CH" data-kt-select2-country="../../assets/media/flags/switzerland.svg">
                                                        Switzerland </option>
                                                    <option value="SY" data-kt-select2-country="../../assets/media/flags/syria.svg">
                                                        Syrian Arab Republic </option>
                                                    <option value="TW" data-kt-select2-country="../../assets/media/flags/taiwan.svg">
                                                        Taiwan, Province of China </option>
                                                    <option value="TJ" data-kt-select2-country="../../assets/media/flags/tajikistan.svg">
                                                        Tajikistan </option>
                                                    <option value="TZ" data-kt-select2-country="../../assets/media/flags/tanzania.svg">
                                                        Tanzania, United Republic of </option>
                                                    <option value="TH" data-kt-select2-country="../../assets/media/flags/thailand.svg">
                                                        Thailand </option>
                                                    <option value="TG" data-kt-select2-country="../../assets/media/flags/togo.svg">
                                                        Togo </option>
                                                    <option value="TK" data-kt-select2-country="../../assets/media/flags/tokelau.svg">
                                                        Tokelau </option>
                                                    <option value="TO" data-kt-select2-country="../../assets/media/flags/tonga.svg">
                                                        Tonga </option>
                                                    <option value="TT" data-kt-select2-country="../../assets/media/flags/trinidad-and-tobago.svg">
                                                        Trinidad and Tobago </option>
                                                    <option value="TN" data-kt-select2-country="../../assets/media/flags/tunisia.svg">
                                                        Tunisia </option>
                                                    <option value="TR" data-kt-select2-country="../../assets/media/flags/turkey.svg">
                                                        Turkey </option>
                                                    <option value="TM" data-kt-select2-country="../../assets/media/flags/turkmenistan.svg">
                                                        Turkmenistan </option>
                                                    <option value="TC" data-kt-select2-country="../../assets/media/flags/turks-and-caicos.svg">
                                                        Turks and Caicos Islands </option>
                                                    <option value="TV" data-kt-select2-country="../../assets/media/flags/tuvalu.svg">
                                                        Tuvalu </option>
                                                    <option value="UG" data-kt-select2-country="../../assets/media/flags/uganda.svg">
                                                        Uganda </option>
                                                    <option value="UA" data-kt-select2-country="../../assets/media/flags/ukraine.svg">
                                                        Ukraine </option>
                                                    <option value="AE" data-kt-select2-country="../../assets/media/flags/united-arab-emirates.svg">
                                                        United Arab Emirates </option>
                                                    <option value="GB" data-kt-select2-country="../../assets/media/flags/united-kingdom.svg">
                                                        United Kingdom </option>
                                                    <option value="US" data-kt-select2-country="../../assets/media/flags/united-states.svg">
                                                        United States </option>
                                                    <option value="UY" data-kt-select2-country="../../assets/media/flags/uruguay.svg">
                                                        Uruguay </option>
                                                    <option value="UZ" data-kt-select2-country="../../assets/media/flags/uzbekistan.svg">
                                                        Uzbekistan </option>
                                                    <option value="VU" data-kt-select2-country="../../assets/media/flags/vanuatu.svg">
                                                        Vanuatu </option>
                                                    <option value="VE" data-kt-select2-country="../../assets/media/flags/venezuela.svg">
                                                        Venezuela, Bolivarian Republic of </option>
                                                    <option value="VN" data-kt-select2-country="../../assets/media/flags/vietnam.svg">
                                                        Vietnam </option>
                                                    <option value="VI" data-kt-select2-country="../../assets/media/flags/virgin-islands.svg">
                                                        Virgin Islands </option>
                                                    <option value="YE" data-kt-select2-country="../../assets/media/flags/yemen.svg">
                                                        Yemen </option>
                                                    <option value="ZM" data-kt-select2-country="../../assets/media/flags/zambia.svg">
                                                        Zambia </option>
                                                    <option value="ZW" data-kt-select2-country="../../assets/media/flags/zimbabwe.svg">
                                                        Zimbabwe </option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Notes</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid" name="notes">{{ Auth::user()->notes }}</textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Separator-->
                                <div class="separator mb-6"></div>
                                <!--end::Separator-->

                                <!--begin::Action buttons-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">
                                        Cancel
                                    </button>
                                    <!--end::Button-->

                                    <!--begin::Button-->
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        <span class="indicator-label">
                                            Save
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Action buttons-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contacts-->

                </div>
                <!--end::Content-->
            </div>
            <!--end::Contacts App- Getting Started-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
@endsection
