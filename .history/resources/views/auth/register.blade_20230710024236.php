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
                    <select name="service" aria-label="Select a Course" data-control="select2" data-placeholder="Select a course..." class="form-select form-select-solid form-select-lg fw-semibold">
                        <option> </option>
                        @foreach ($courses as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
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
                            Sign up with Paystack</span>
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
