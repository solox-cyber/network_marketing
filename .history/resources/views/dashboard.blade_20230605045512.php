@extends('layouts.app')

@section('content')
    @if(Auth::user()->usertype == 'admin')
        @extends('layouts.admin.dash')
        @section('content')
            // Admin content goes here
        @endsection
    @else
        @extends('layouts.dash')
        @section('content')

        @endsection
    @endif





    @endsection
