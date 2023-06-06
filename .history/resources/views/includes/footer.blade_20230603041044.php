                   <!--begin::Footer-->
                   <div id="kt_app_footer" class="app-footer ">
                       <!--begin::Footer container-->
                       <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                           <!--begin::Copyright-->
                           <div class="text-dark order-2 order-md-1">
                               <span class="text-muted fw-semibold me-1">2023&copy;</span>
                               <a href="https://keenthemes.com/" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                           </div>
                           <!--end::Copyright-->


                       </div>
                       <!--end::Footer container-->
                   </div>
                   <!--end::Footer-->
                   </div>
                   <!--end:::Main-->


                   </div>
                   <!--end::Wrapper-->


                   </div>
                   <!--end::Page-->
                   </div>
                   <!--end::App-->

                   <!--begin::Scrolltop-->
                   <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                       <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
                   </div>
                   <!--end::Scrolltop-->

                   <!--begin::Modals-->




                   <!--begin::Javascript-->



                   <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                   <script src="{{ asset('plugins/global/plugins.bundle.js')}}"></script>
                   <script src="{{ asset('js/scripts.bundle.js')}}"></script>
                   <!--end::Global Javascript Bundle-->



                   <script>
    function addFormField() {
        var formFieldsContainer = $('#formFields');
        var newField = $('<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">');
        newField.html(
            '<div class="col">' +
            '<div class="fv-row mb-7">' +
            '<label class="fs-6 fw-semibold form-label mt-3">' +
            '<span class="required">Name</span>' +
            '<span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact\'s email.">' +
            '<i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>' +
            '</span>' +
            '</label>' +
            '<input type="name" class="form-control form-control-solid" name="name[]" value="" />' +
            '</div>' +
            '</div>' +
            '<div class="col">' +
            '<div class="fv-row mb-7">' +
            '<label class="fs-6 fw-semibold form-label mt-3">' +
            '<span>Phone</span>' +
            '<span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact\'s phone number (optional).">' +
            '<i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>' +
            '</span>' +
            '</label>' +
            '<input type="text" class="form-control form-control-solid" name="phone_number[]" value="" />' +
            '</div>' +
            '</div>' +
            '</div>'
        );
        formFieldsContainer.append(newField);
    }
</script>



                   <!--begin::Vendors Javascript(used for this page only)-->
                   <script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
                   <script src="../../../cdn.amcharts.com/lib/5/index.js"></script>
                   <script src="../../../cdn.amcharts.com/lib/5/xy.js"></script>
                   <script src="../../../cdn.amcharts.com/lib/5/percent.js"></script>
                   <script src="../../../cdn.amcharts.com/lib/5/radar.js"></script>
                   <script src="../../../cdn.amcharts.com/lib/5/themes/Animated.js"></script>
                   <script src="../../../cdn.amcharts.com/lib/5/map.js"></script>
                   <script src="../../../cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
                   <script src="../../../cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
                   <script src="../../../cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
                   <script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
                   <script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
                   <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js')}}"></script>
                   <!--end::Vendors Javascript-->

                   <!--begin::Custom Javascript(used for this page only)-->
                   <script src="{{ asset('js/widgets.bundle.js')}}"></script>
                   <script src="{{ asset('js/custom/apps/chat/chat.js')}}"></script>
                   <script src="{{ asset('js/custom/utilities/modals/upgrade-plan.js')}}"></script>
                   <script src="{{ asset('js/custom/utilities/modals/create-campaign.js')}}"></script>
                   <script src="{{ asset('js/custom/utilities/modals/users-search.js')}}"></script>
                   <!--end::Custom Javascript-->
                   <!--end::Javascript-->

                   </body>

                   </html>
