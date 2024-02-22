{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}


@extends('frontEnd.master')
@section('title', 'Reset Password')
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
                        <h2 class="text-success"><x-auth-session-status class="mb-4" :status="session('status')" /></h2>
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}

                    </div>
                </div>
                <div class="accordion-content" style="display: block;">

                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
                        <div class="col-12 form-group">
                            <label for="login-form-username">Email:</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="col-12 form-group">
                            <div class="d-flex justify-content-between">
                                <button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Submit</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
