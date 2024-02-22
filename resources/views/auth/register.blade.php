{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block w-full mt-1"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block w-full mt-1"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

@extends('frontEnd.master')
@section('title','Register')
@section('content')
    <div class="content-wrap">
        <div class="container">

            <div class="accordion accordion-lg mx-auto mb-0" style="max-width: 550px;">
                <div class="accordion-header accordion-active">
                    <div class="accordion-icon">
                        <i class="accordion-closed bi-person"></i>
                        <i class="accordion-open bi-check-circle-fill"></i>
                    </div>
                    <div class="accordion-title">
                        New Signup? Register for an Account
                    </div>
                </div>
                <div class="accordion-content" style="display: block;">
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

                <div class="accordion-header accordion-active">
                    <div class="accordion-icon">
                        <i class="accordion-closed fa-solid fa-lock"></i>
                        <i class="accordion-open bi-unlock"></i>
                    </div>
                    <div class="accordion-title">
                        Login to your Account
                    </div>
                </div>
                <div class="accordion-content" style="display: none;" >
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
                                {{--                                <a href="#">Forgot Password?</a>--}}
                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </div>
@endsection
