{{-- <x-guest-layout> --}}
{{--    <!-- Session Status --> --}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

{{--    <form method="POST" action="{{ route('login') }}"> --}}
{{--        @csrf --}}

{{--        <!-- Email Address --> --}}
{{--        <div> --}}
{{--            <x-input-label for="email" :value="__('Email')" /> --}}
{{--            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> --}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
{{--        </div> --}}

{{--        <!-- Password --> --}}
{{--        <div class="mt-4"> --}}
{{--            <x-input-label for="password" :value="__('Password')" /> --}}

{{--            <x-text-input id="password" class="block w-full mt-1" --}}
{{--                            type="password" --}}
{{--                            name="password" --}}
{{--                            required autocomplete="current-password" /> --}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
{{--        </div> --}}

{{--        <!-- Remember Me --> --}}
{{--        <div class="block mt-4"> --}}
{{--            <label for="remember_me" class="inline-flex items-center"> --}}
{{--                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember"> --}}
{{--                <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span> --}}
{{--            </label> --}}
{{--        </div> --}}

{{--        <div class="flex items-center justify-end mt-4"> --}}
{{--            @if (Route::has('password.request')) --}}
{{--                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}"> --}}
{{--                    {{ __('Forgot your password?') }} --}}
{{--                </a> --}}
{{--            @endif --}}

{{--            <x-primary-button class="ms-3"> --}}
{{--                {{ __('Log in') }} --}}
{{--            </x-primary-button> --}}
{{--        </div> --}}
{{--    </form> --}}
{{-- </x-guest-layout> --}}
@extends('frontEnd.master')
@section('title', 'Login')
@section('content')
    <div class="content-wrap">
        <div class="container">

            <div class="accordion accordion-lg mx-auto mb-0" style="max-width: 550px;">

                <div class="accordion-header accordion-active">
                    <div class="accordion-icon">
                        <i class="accordion-closed fa-solid fa-lock"></i>
                        <i class="accordion-open bi-unlock"></i>
                    </div>
                    <div class="accordion-title">
                        Login to your Account
                    </div>
                </div>
                <div class="accordion-content" style="display: block;">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="col-12 form-group">
                            <label for="login-form-username">Email:</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="col-12 form-group">
                            <label for="login-form-password">Password:</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="col-12 form-group">
                            <div class="d-flex justify-content-between">
                                <button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                <a href="{{route('password.request')}}">Forgot Password?</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="accordion-header">
                    <div class="accordion-icon">
                        <i class="accordion-closed bi-person"></i>
                        <i class="accordion-open bi-check-circle-fill"></i>
                    </div>
                    <div class="accordion-title">
                        New Signup? Register for an Account
                    </div>
                </div>
                <div class="accordion-content" style="display: none;">
                    <form method="post" action="{{ route('register') }}">
                        @csrf

                        <div class="col-12 form-group">
                            <label for="register-form-name">Name:</label>
                            <input type="text"  name="name" value="" class="form-control">
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-email">Email Address:</label>
                            <input type="text"  name="email" value="" class="form-control">
                        </div>
                        <div class="col-12 form-group">
                            <label for="register-form-password">Choose Password:</label>
                            <input type="password"  name="password" value="" class="form-control">
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-repassword">Re-enter Password:</label>
                            <input type="password" name="password_confirmation" value="" class="form-control">
                        </div>

                        <div class="col-12 form-group">
                            <button class="button button-3d button-black m-0" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

@endsection
