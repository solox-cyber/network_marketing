@if(Auth::user()->isAdmin())
        @extends('layouts.admin.dash')
        @section('content')
            // Admin content goes here
        @endsection
    @else
        @extends('layouts.dash')
        @section('content')
            // User content goes here
        @endsection
    @endif
@extends('layouts.dash')


