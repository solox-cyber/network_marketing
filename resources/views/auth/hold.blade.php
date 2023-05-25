
    <!--begin::Body-->
    <body  id="kt_body"  class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat" >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}			
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}            
</script>
<!--end::Theme mode setup on page load-->            
                    <!--Begin::Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End::Google Tag Manager (noscript) -->
        
        <!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
<style>
    body {
        background-image: url('{{ asset('media/auth/bg16.jpg') }}');
    }

    [data-bs-theme="dark"] body {
        background-image: url('{{assets('media/auth/bg16-dark.jpg')}}');
    }
</style>
<!--end::Page bg image-->


<!--begin::Authentication - Signup Welcome Message -->
<div class="d-flex flex-column flex-center flex-column-fluid">    
    <!--begin::Content-->
    <div class="d-flex flex-column flex-center text-center p-10">        
        <!--begin::Wrapper-->
        <div class="card card-flush w-lg-650px py-5">
            <div class="card-body py-15 py-lg-20">
                
    <!--begin::Logo-->
    <div class="mb-14">
        <a href="../../index.html" class="">
            <img alt="Logo" src="{{asset('media/logos/default-small.svg')}}" class="h-40px"/> 
        </a> 
    </div>
    <!--end::Logo-->

    <!--begin::Title-->
    <h1 class="fw-bolder text-gray-900 mb-5">
        Verify your email
    </h1>
    <!--end::Title--> 
    
    <!--begin::Action-->
    <div class="fs-6 mb-8">
    @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success" role="alert">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif
        <span class="fw-semibold text-gray-500">Did’t receive an email?</span>
        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="link-primary fw-bold">{{ __('Try Again') }}</button>.
                        </form>
   
    </div>
    <!--end::Action-->
    
    
    
    <!--begin::Illustration-->
    <div class="mb-0">
        <img src="../../assets/media/auth/verify-email.png" class="mw-100 mh-300px theme-light-show" alt=""/>
        <img src="../../assets/media/auth/verify-email-dark.png" class="mw-100 mh-300px theme-dark-show" alt=""/>
    </div>
    <!--end::Illustration-->   

            </div>
        </div>
        <!--end::Wrapper-->        
    </div>
    <!--end::Content-->    
</div>
<!--end::Authentication - Signup Welcome Message-->
                         </div>
<!--end::Root-->
        
        <!--begin::Javascript-->
       
                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="../../assets/plugins/global/plugins.bundle.js"></script>
                            <script src="../../assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
        
        
                <!--end::Javascript-->
        
            </body>
    <!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/keen/demo1/authentication/general/verify-email.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 08:32:16 GMT -->
</html>