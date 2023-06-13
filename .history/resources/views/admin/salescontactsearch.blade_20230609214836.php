<!-- begin::Search -->
<div class="col-lg-4 col-xl-4">
    <!--begin::Contacts-->
    <div class="card card-flush" id="kt_contacts_list">
        <!--begin::Card header-->
        <div class="card-header pt-7" id="kt_contacts_list_header">
           <!--begin::Form-->
           <form class="d-flex align-items-center position-relative w-100 m-0" method="POST" action="{{ route('salescontact.search') }}" autocomplete="off">
                <!--begin::Icon-->
                @csrf
                <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid ps-13" id="ssearchInput" name="search" value="" placeholder="Search contacts" />
                <!--end::Input-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-5" id="kt_contacts_list_body">
        @foreach($contacts as $contact)
        <div class="d-flex flex-stack py-4">
            <div class="d-flex align-items-center w-100">
                <div class="ms-4 d-flex align-items-center flex-fill">
                    <a href="{{ $contact->link }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2 me-2 flex-fill">{{ $contact->name }}</a>
                    <div class="fw-semibold fs-7 text-muted flex-shrink-0">
                        @if($contact->sales_rep_id)
                            <!-- Contact already assigned to a sales rep -->
                            <button class="btn btn-sm btn-primary me-2" disabled>Assigned</button>
                        @else
                        <form method="POST">
                        <button type="submit class="btn btn-sm btn-primary me-2 assign-contact" data-contact-id="{{ $contact->id }}">Assign</button>
                        </form>


                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Contacts-->
</div>
<!-- end::Search -->

