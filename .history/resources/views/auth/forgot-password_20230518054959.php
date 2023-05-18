<?php

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Add your email input field -->
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit">Send Password Reset Link</button>
    </div>
</form>
@endsection
