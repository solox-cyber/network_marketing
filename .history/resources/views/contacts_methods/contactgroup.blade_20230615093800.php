<div class="row g-7">
    <!--begin::Contact groups-->
    <div class="col-lg-6 col-xl-3">
        <!--begin::Contact group wrapper-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header pt-7" id="kt_chat_contacts_header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Groups</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-5">
                <!--begin::Contact groups-->
                <div class="d-flex flex-column gap-5">
                    <!--begin::Contact group-->
                    <div class="d-flex flex-stack">
                        <a href="getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary active">All Contacts</a>
                        <div class="badge badge-light-primary">{{ $count }}</div>
                    </div>
                    <!--begin::Contact group-->

                </div>
                <!--end::Contact groups-->

                <!--begin::Separator-->
                <div class="separator my-7"></div>
                <!--begin::Separator-->



                <!--begin::Add new contact-->
                <a href="{{route('add_contact')}}" class="btn btn-primary w-100">
                    <i class="ki-duotone ki-badge fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Add new contact
                </a>
                <!--end::Add new contact-->
            </div>
            <!--end::Card body-->   @include('contacts_methods.search')

        </div>
        <!--end::Contact group wrapper-->
    </div>
    <!--end::Contact groups-->
