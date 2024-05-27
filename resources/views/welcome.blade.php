{{-- @extends('dashboard.layouts.main')
@section('style-login')
    <link rel="stylesheet" href="{{ asset('assets/css/maruti-login.css') }}" />
@endsection
@section('content')


    <div id="loginbox">
        <form id="loginform" class="form-vertical" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="control-group normal_text">
                <h3><img src="img/logo.png" alt="Logo" /></h3>
            </div>

            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on"><i class="icon-lock"></i></span>
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <span class="show-password"><i class="icon-eye-open"></i></span>
                        
                    </div>
                   
                </div>
                
            </div>
            

           

            <div class="form-actions">
                <span class="pull-left">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                </span>

                <span class="pull-right"><x-primary-button class="ms-3">{{ __('Log in') }}</x-primary-button></span>
            </div>

          

        </form>

     
    </div>

@section('script-login')
    <script src="{{ asset('assets/js/maruti.login.js') }}"></script>
@endsection
@endsection --}}
