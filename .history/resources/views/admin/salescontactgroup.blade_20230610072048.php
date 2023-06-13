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
                        <a href="getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary active">All Assigned Contacts</a>
                        <div class="badge badge-light-primary">{{$numberOfContacts}}</div>
                    </div>
                    <!--begin::Contact group-->

                </div>
                <!--end::Contact groups-->

                <!--begin::Separator-->
                <div class="separator my-7"></div>
                <!--begin::Separator-->

                <!--begin::Card body-->
                <div class="card-body pt-5" id="kt_contacts_list_body" style="height: 200px; overflow-y: auto;">


                    @foreach($contacts as $contact)
                    <div class="d-flex flex-stack py-4">
                        <div class="d-flex align-items-center w-100">
                            <div class="ms-4 d-flex align-items-center flex-fill">
                                <a href="{{ $contact->link }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2 me-2 flex-fill">{{ $contact->name }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>
            <!--end::Card body-->
        </div>
        <!--end::Contact group wrapper-->
    </div>
    <!--end::Contact groups-->
