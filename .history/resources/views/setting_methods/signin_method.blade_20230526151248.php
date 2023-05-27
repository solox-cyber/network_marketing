<!--begin::Sign-in Method-->
<div class="card  mb-5 mb-xl-10"   >
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Sign-in Method</h3>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Content-->
    <div id="kt_account_settings_signin_method" class="collapse show">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            <!--begin::Email Address-->
            <div class="d-flex flex-wrap align-items-center">
                <!--begin::Label-->
                <div id="kt_signin_email">
                    <div class="fs-6 fw-bold mb-1">Email Address</div>
                    <div class="fw-semibold text-gray-600">{{ Auth::user()->email}}</div>
                </div>
                <!--end::Label-->

                <!--begin::Edit-->
                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                        <div class="row mb-6">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="fv-row mb-0">
                                    <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                    <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-0">
                                    <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button id="kt_signin_submit" type="button" class="btn btn-primary  me-2 px-6">Update Email</button>
                            <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->

                <!--begin::Action-->
                <div id="kt_signin_email_button" class="ms-auto">
                    <a href="{{route('show_email')}}" class="btn btn-light btn-active-light-primary">Change Email</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Email Address-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->

            <!--begin::Password-->
            <div class="d-flex flex-wrap align-items-center mb-10">
                <!--begin::Label-->
                <div id="kt_signin_password">
                    <div class="fs-6 fw-bold mb-1">Password</div>
                    <div class="fw-semibold text-gray-600">************</div>
                </div>
                <!--end::Label-->

                <!--begin::Edit-->
                <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                        <div class="row mb-1">
                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="currentpassword" id="currentpassword" />
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="newpassword" id="newpassword" />
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="confirmpassword" id="confirmpassword" />
                                </div>
                            </div>
                        </div>

                        <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>

                        <div class="d-flex">
                            <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                            <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->

                <!--begin::Action-->
                <div id="kt_signin_password_button" class="ms-auto">
                    <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Password-->


<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
            <!--begin::Icon-->
        <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span></i>        <!--end::Icon-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <!--begin::Content-->
            <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Secure Your Account</h4>

                                    <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
                            </div>
            <!--end::Content-->

                    <!--begin::Action-->
            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"  data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication" >
                Enable            </a>
            <!--end::Action-->
            </div>
    <!--end::Wrapper-->
    <!--begin::Modal - Two-factor authentication-->
<div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" aria-hidden="true">
    <!--begin::Modal header-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header flex-stack">
                <!--begin::Title-->
                <h2>Choose An Authentication Method</h2>
                <!--end::Title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
                <!--begin::Options-->
<div data-kt-element="options">
    <!--begin::Notice-->
    <p class="text-muted fs-5 fw-semibold mb-10">
        In addition to your username and password, you’ll have to enter a code (delivered via app or SMS) to log into your account.
    </p>
    <!--end::Notice-->

    <!--begin::Wrapper-->
    <div class="pb-10">
        <!--begin::Option-->
        <input type="radio" class="btn-check" name="auth_option" value="apps" checked="checked"  id="kt_modal_two_factor_authentication_option_1"/>
        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_1">
            <i class="ki-duotone ki-setting-2 fs-4x me-4"><span class="path1"></span><span class="path2"></span></i>
            <span class="d-block fw-semibold text-start">
                <span class="text-dark fw-bold d-block fs-3">Authenticator Apps</span>
                <span class="text-muted fw-semibold fs-6">
                    Get codes from an app like Google Authenticator,  Microsoft Authenticator, Authy or 1Password.
                </span>
            </span>
        </label>
        <!--end::Option-->

        <!--begin::Option-->
        <input type="radio" class="btn-check" name="auth_option" value="sms" id="kt_modal_two_factor_authentication_option_2"/>
        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_modal_two_factor_authentication_option_2">
            <i class="ki-duotone ki-message-text-2 fs-4x me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
            <span class="d-block fw-semibold text-start">
                <span class="text-dark fw-bold d-block fs-3">SMS</span>
                <span class="text-muted fw-semibold fs-6">We will send a code via SMS if you need to use your backup login method.</span>
            </span>
        </label>
        <!--end::Option-->
    </div>
    <!--end::Options-->

    <!--begin::Action-->
    <button class="btn btn-primary w-100" data-kt-element="options-select">Continue</button>
    <!--end::Action-->
</div>
<!--end::Options-->

                <!--begin::Apps-->
<div class="d-none" data-kt-element="apps">
    <!--begin::Heading-->
    <h3 class="text-dark fw-bold mb-7">
        Authenticator Apps
    </h3>
    <!--end::Heading-->

    <!--begin::Description-->
    <div class="text-gray-500 fw-semibold fs-6 mb-10">
        Using an authenticator app like
        <a href="https://support.google.com/accounts/answer/1066447?hl=en" target="_blank">Google Authenticator</a>,
        <a href="https://www.microsoft.com/en-us/account/authenticator" target="_blank">Microsoft Authenticator</a>,
        <a href="https://authy.com/download/" target="_blank">Authy</a>, or
        <a href="https://support.1password.com/one-time-passwords/" target="_blank">1Password</a>,
        scan the QR code. It will generate a 6 digit code for you to enter below.

        <!--begin::QR code image-->
        <div class="pt-5 text-center">
            <img src="../../assets/media/misc/qr.png" alt="" class="mw-150px"/>
        </div>
        <!--end::QR code image-->
    </div>
    <!--end::Description-->


<!--begin::Notice-->
<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
            <!--begin::Icon-->
        <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        <!--end::Icon-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 ">
                    <!--begin::Content-->
            <div class=" fw-semibold">

                                    <div class="fs-6 text-gray-700 ">If you having trouble using the QR code, select manual entry on your app, and enter your username and the code: <div class="fw-bold text-dark pt-2">KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div></div>
                            </div>
            <!--end::Content-->

            </div>
    <!--end::Wrapper-->
</div>
<!--end::Notice-->

    <!--begin::Form-->
    <form data-kt-element="apps-form" class="form" action="#">
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Enter authentication code" name="code"/>
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex flex-center">
            <button type="reset" data-kt-element="apps-cancel" class="btn btn-light me-3">
                Cancel
            </button>

            <button type="submit" data-kt-element="apps-submit" class="btn btn-primary">
                <span class="indicator-label">
                    Submit
                </span>
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::Options-->
                <!--begin::SMS-->
<div class="d-none" data-kt-element="sms">
    <!--begin::Heading-->
    <h3 class="text-dark fw-bold fs-3 mb-5">
        SMS: Verify Your Mobile Number
    </h3>
    <!--end::Heading-->

    <!--begin::Notice-->
    <div class="text-muted fw-semibold mb-10">
        Enter your mobile phone number with country code and we will send you a verification code upon request.
    </div>
    <!--end::Notice-->

    <!--begin::Form-->
    <form data-kt-element="sms-form" class="form" action="#">
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Mobile number with country code..." name="mobile"/>
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex flex-center">
            <button type="reset" data-kt-element="sms-cancel" class="btn btn-light me-3">
                Cancel
            </button>

            <button type="submit" data-kt-element="sms-submit" class="btn btn-primary">
                <span class="indicator-label">
                    Submit
                </span>
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::SMS-->
            </div>
            <!--begin::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal header-->
</div>
<!--end::Modal - Two-factor authentication--><!--begin::Modal - Users Search-->
</div>
<!--end::Notice-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Content-->
</div>
<!--end::Sign-in Method-->

 <!--begin::Vendors Javascript(used for this page only)-->
 <script src="../../assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
                        <!--end::Vendors Javascript-->

                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="{{asset('js/custom/utilities/modals/create-account.js')}}"></script>
                            <script src="{{asset('js/widgets.bundle.js')}}"></script>
                            <script src="{{asset('js/custom/apps/chat/chat.js')}}"></script>
                            <script src="{{asset('js/custom/utilities/modals/upgrade-plan.js')}}"></script>
                            <script src="{{asset('js/custom/utilities/modals/create-campaign.js')}}"></script>
                            <script src="{{asset('js/custom/utilities/modals/two-factor-authentication.js')}}"></script>
                            <script src="{{asset('js/custom/utilities/modals/users-search.js')}}"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->
