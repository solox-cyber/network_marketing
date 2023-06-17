<!-- begin::Search -->
<div class="col-lg-6 col-xl-6">
    <!--begin::Contacts-->
    <div class="card card-flush" id="kt_contacts_list">
        <!--begin::Card header-->
        <div class="card-header pt-7" id="kt_contacts_list_header">
            <!--begin::Form-->
            <form class="d-flex align-items-center position-relative w-100 m-0" method="GET" action="{{ route('salescontact.search') }}" autocomplete="off">
                <!--begin::Icon-->
                @csrf
                <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid ps-13" id="ssearchInput" name="search" value="" placeholder="Search contacts" />
                <!--end::Input-->
            </form>
            <!--end::Form-->
            <form action="{{ route('contacts.assign') }}" method="POST">
                                @csrf

                                <div class="d-flex align-items-center">
                                    <!-- Select -->
                                    <select name="sales_rep_id" id="sales_rep_id" class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select Sales Rep" data-kt-table-widget-4="filter_status">

                                        <option value=""></option>
                                        @foreach ($salesReps as $salesRep)
                                        <option value="{{ $salesRep->id }}">{{ $salesRep->name }}</option>
                                        @endforeach
                                    </select>
                                    <!-- End Select -->

                                    <!-- Button -->
                                    <button type="submit" class="btn btn-primary ms-3 flex-grow-1">Assign Contacts</button>
                                    <!-- End Button -->
                                </div>

        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-5" id="kt_contacts_list_body">

        </div>
        <!--end::Card body-->
    </div>
    <!--end::Contacts-->
</div>
<!-- end::Search -->

