@extends('layouts.dash')

@section('content')

@include('setting_methods.admin.menuhead')
@include('setting_methods.admin.navitems')

@include('setting_methods.profile')

@include('setting_methods.signin_method')
@include('setting_methods.deactivate')
<!--end::Content container-->
</div>
<!--end::Content-->
</div>
<!--end::Content wrapper-->




@endsection
