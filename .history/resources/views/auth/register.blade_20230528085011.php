@extends('layouts.auth')

@section('content')
<!--begin::Body-->
<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
    <!--begin::Form-->
    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
        <!--begin::Wrapper-->
        <div class="w-lg-500px p-10">

            <!--begin::Form-->
            <form class="form w-100" action="{{ route('register') }}" method="POST">
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-11">
                    <!--begin::Title-->
                    <h1 class="text-dark fw-bolder mb-3">
                        Sign Up
                    </h1>
                    <!--end::Title-->


                </div>
                <!--begin::Heading-->

                <!--begin::Login options-->
                <div class="row g-3 mb-9">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <!--begin::Google link--->
                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                            <img alt="Logo" src="{{asset('media/svg/brand-logos/google-icon.svg')}}" class="h-15px me-3" />
                            Sign in with Google
                        </a>
                        <!--end::Google link--->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-6">
                        <!--begin::Google link--->
                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                            <img alt="Logo" src="{{asset('media/svg/brand-logos/apple-black.svg')}}" class="theme-light-show h-15px me-3" />
                            <img alt="Logo" src="{{asset('media/svg/brand-logos/apple-black-dark.svg')}}" class="theme-dark-show h-15px me-3" />
                            Sign in with Apple
                        </a>
                        <!--end::Google link--->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Login options-->

                <!--begin::Separator-->
                <div class="separator separator-content my-14"><span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span></div>
                <!--end::Separator-->

                <!--begin::Input group--->
                <div class="fv-row mb-8">
                    <!--begin::Name-->
                    <input type="text" placeholder="Name" name="name" autocomplete="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror bg-transparent" required />
                    <!--end::Name-->
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="fv-row mb-8">
                    <!--begin::Email-->
                    <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control @error('email') is-invalid @enderror bg-transparent" />
                    <!--end::Email-->
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="fv-row mb-8">
                    <!--begin::Phone Number-->
                    <input id="phone_number" type="text" placeholder="Phone Number" name="phone_number" value="{{ old('phone_number') }}" autocomplete="phone_number" class="form-control @error('phone_number') is-invalid @enderror bg-transparent" required />
                    <!--end::Phone Number-->
                    @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="fv-row mb-8">
                <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
                            <option value="{{ Auth::user()->country }}">{{ Auth::user()->country }}</option>
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
                </select>
                </div>
                <!--begin::Input group-->
                <div class="fv-row mb-8" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input class="form-control @error('password') is-invalid @enderror bg-transparent" type="password" placeholder="Password" name="password" required autocomplete="password" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="ki-duotone ki-eye-slash fs-2"></i> <i class="ki-duotone ki-eye fs-2 d-none"></i> </span>
                        </div>
                        <!--end::Input wrapper-->

                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                            </div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                            </div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                            </div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Hint-->
                    <div class="text-muted">
                        Use 8 or more characters with a mix of letters, numbers & symbols.
                    </div>
                    <!--end::Hint-->
                </div>
                <!--end::Input group--->

                <!--end::Input group--->
                <div class="fv-row mb-8">
                    <!--begin::Repeat Password-->
                    <input type="password" placeholder="Repeat Password" name="password_confirmation" type="password" autocomplete="confirm-password" class="form-control bg-transparent" />
                    <!--end::Repeat Password-->
                </div>
                <!--end::Input group--->



                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_up_submit" id="register" name="register" class="btn btn-primary">

                        <!--begin::Indicator label-->
                        <span class="indicator-label">
                            Sign up</span>
                        <!--end::Indicator label-->

                    </button>
                </div>
                <!--end::Submit button-->

                <!--begin::Sign up-->
                <div class="text-gray-500 text-center fw-semibold fs-6">
                    Already have an Account?

                    <a href="{{ route('login') }}" class="link-primary fw-semibold">
                        Sign in
                    </a>
                </div>
                <!--end::Sign up-->
            </form>
            <!--end::Form-->

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Form-->


</div>
<!--end::Body-->
@endsection
