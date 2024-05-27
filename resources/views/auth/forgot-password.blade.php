@extends('dashboard.layouts.main')
@section('style-login')
    <link rel="stylesheet" href="{{ asset('assets/css/maruti-login.css') }}" />
@endsection
@section('content')
    <div id="loginbox">

 

        <form id="loginbox" class="form-vertical" action="{{ route('password.email') }}" method="POST">
            @csrf
        
            <div class="mb-4 text-sm text-gray-600">
              {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
        
            <div class="controls">
              <div class="main_input_box">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                              autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
            </div>
        
            <div class="form-actions">
              <span class="pull-left"><a href="#" id="to-login">&laquo; Back to login</a></span>
              <span class="pull-right"><x-primary-button class="ms-3">{{ __('Email Password Reset Link') }}</x-primary-button></span>
            </div>
          </form>
</div>

@section('script-login')
    <script src="{{ asset('assets/js/maruti.login.js') }}"></script>
@endsection
@endsection
