<div class="row g-7">
    <!--begin::Contact groups-->
    <div class="col-lg- col-xl-3 mb-8">
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
            <!--end::Card body-->
        </div>
        <!--end::Contact group wrapper-->
        <!--begin::Search-->

        <!--begin::Contacts-->
<div class="card card-flush mt-5" id="kt_contacts_list">
    <!--begin::Card header-->
    <div class="card-header pt-7" id="kt_contacts_list_header">
        <!--begin::Form-->
        <form class="d-flex align-items-center position-relative w-100 m-0" autocomplete="off">
            <!--begin::Icon-->
            <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i>            <!--end::Icon-->

            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid ps-13" name="search" value="" placeholder="Search contacts"/>
            <!--end::Input-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-5" id="kt_contacts_list_body">
        <!--begin::List-->
        <div
            class="scroll-y me-n5 pe-5 h-300px h-xl-auto"

            data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}"
            data-kt-scroll-max-height="auto"
            data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header"
            data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body"
            data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main"
            data-kt-scroll-offset="5px"
            >
            @foreach ($contacts as $contact)
                                                        <!--begin::User-->
                <div class="d-flex flex-stack py-4">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                        <!--begin::Avatar--><div class="symbol  symbol-40px symbol-circle ">
                            <!-- <img alt="Pic" src="{{asset('media/avatars/300-6.jpg')}}"/> -->
                            @if($contact->profilePicture)
                            <img src="{{ asset('storage/' . str_replace('public/', '', $contact->profilePicture->path)) }}" alt="Default Profile Picture" >
                            @else
                            <div class="symbol symbol-40px ">
                        <div class="symbol-label fs-2 fw-bold">{{ substr($contact->name, 0, 1) }}</div>
                    </div>
                            @endif
                            <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div></div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-4">
                            <!-- <a href="{{ route('edit_contact', ['contact' => $contact->id]) }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">{{ $contact->name }}</a> -->
                            <a href="{{ route('contacts.show',['contact' => $contact->id]) }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">{{ $contact->name }}</a>
                            <div class="fw-semibold fs-7 text-muted">{{ $contact->email }}</div>
                            <!-- <div class="fs-6">
                               <a href="{{ route('edit_contact', ['contact' => $contact->id]) }}" class="btn btn-sm">Edit Contact</a> <a href="{{ route('contacts.show', ['contact' => $contact->id]) }}" class="btn btn-sm btn-danger">View Contact</a>
                            </div> -->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::User-->


                                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    @endforeach




                    </div>
        <!--end::List-->
    </div>
    <!--end::Card body-->

<!--end::Contacts-->    </div>
    <!--end::Search-->

    </div>
    <!--end::Contact groups-->
