@extends('layouts.auth')

@section('content')
<!--begin::Body-->
<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
    <!--begin::Form-->
    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
        <!--begin::Wrapper-->
        <div class="w-lg-500px p-10">

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li style="list-style-type:none;align-content:center;justify-content:center"><b>{{ $error }}</b></li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <!--begin::Form-->
            <form class="form" method="POST" action="{{ route('admin.login') }}">
                <!--begin::Heading-->
                @csrf
                <div class="text-center mb-11">
                    <!--begin::Title-->
                    <h1 class="text-dark fw-bolder mb-3">
                        Sign In with Admin
                    </h1>
                    <!--end::Title-->

                </div>
                <!--begin::Heading-->



                <!--begin::Separator-->
                <div class="separator separator-content my-14">
                    <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                </div>
                <!--end::Separator-->

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <!--begin::Input group--->
                <div class="fv-row mb-8">
                    <!--begin::Email-->
                    <input type="email" placeholder="Email" name="email" id="email" autocomplete="email" value="{{ old('email') }}" required autofocus class="form-control bg-transparent" />
                    <!--end::Email-->
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!--end::Input group--->
                <div class="fv-row mb-3">
                    <!--begin::Password-->
                    <input type="password" placeholder="Password" name="password" autocomplete="email" class="form-control bg-transparent" />
                    <!--end::Password-->
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!--end::Input group--->


                <div class="fv-row mb-3">
                    <!--begin::Remember me-->
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="bg-transparent" />
                    <label for="remember">Remember Me</label>
                    <!--end::Remember me-->
                </div>
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                    <div></div>

                    <!--begin::Link-->
                    <a href="{{route('password.request') }}" class="link-primary">
                        Forgot Password ?
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                    <button type="submit" class="btn btn-primary">

                        <!--begin::Indicator label-->
                        <span class="indicator-label">
                            Sign In</span>
                        <!--end::Indicator label-->

                    </button>
                </div>
                <!--end::Submit button-->


            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Form-->

    <!--begin::Footer-->
    <div class="d-flex flex-center flex-wrap px-5">
        <!--begin::Links-->
        <div class="d-flex fw-semibold text-primary fs-base">
            <a href="https://keenthemes.com/" class="px-5" target="_blank">Terms</a>

            <a href="https://devs.keenthemes.com/" class="px-5" target="_blank">Plans</a>

            <a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" class="px-5" target="_blank">Contact Us</a>
        </div>
        <!--end::Links-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Body-->
@endsection
