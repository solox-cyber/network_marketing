<!--begin::Search-->
<div class="col-lg-4 col-xl-4">
        <!--begin::Contacts-->
<div class="card card-flush" id="kt_contacts_list">
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
                            <div class="symbol symbol-100px me-5">
                        <div class="symbol-label fs-2 fw-bold">{{ substr($contact->name, 0, 1) }}</div>
                    </div>
                            @endif
                            <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div></div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-4">
                            <a href="{{ route('edit_contact', ['contact' => $contact->id]) }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">{{ $contact->name }}</a>
                            <div class="fw-semibold fs-7 text-muted">{{ $contact->email }}</div>
                            <div class="fs-6">
                               <a href="{{ route('edit_contact', ['contact' => $contact->id]) }}" class="btn btn-sm">Edit Contact</a> <a href="{{ route('contacts.show', ['contact' => $contact->id]) }}" class="btn btn-sm btn-danger">View Contact</a>
                            </div>
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
</div>
<!--end::Contacts-->    </div>
    <!--end::Search-->
