@extends("layouts.auth")

@section("content")

    <!--Full pageloader-->
    <!-- Pageloader -->
    <div class="pageloader is-full"></div>
    <div class="infraloader is-full is-active"></div>
    <div class="auth-wrapper">
        <!--Page body-->

        <div class="modern-login">

            <div class="underlay h-hidden-mobile h-hidden-tablet-p"></div>

            <div class="columns is-gapless is-vcentered">
                <div class="column is-relative is-8 h-hidden-mobile h-hidden-tablet-p">
                    <div class="hero is-fullheight is-image">
                        <div class="hero-body">
                            <div class="container">
                                <div class="columns">
                                    <div class="column">
                                        <img class="hero-image" src="{{ asset('assets/img/illustrations/login/station.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4 is-relative">
                    <a class="top-logo" href="/">
                        <img class="light-image" src="{{ asset('assets/img/logos/logo/logo.svg') }}" alt="">
                        <img class="dark-image" src="{{ asset('assets/img/logos/logo/logo-light.svg') }}" alt="">
                    </a>
                    <label class="dark-mode ml-auto">
                        <input type="checkbox" checked>
                        <span></span>
                    </label>
                    <div class="is-form">
                        <div class="hero-body">
                            <div class="form-text">
                                <h2>Sign In</h2>
                                <p>Welcome back to your account.</p>
                            </div>
                            <div class="form-text is-hidden">
                                <h2>Recover Account</h2>
                                <p>Reset your account password.</p>
                            </div>
                            <form id="login-form" class="login-wrapper" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="control has-validation">
                                    <input type="text" class="input" name="email" placeholder="">
                                    <small class="error-text">This is a required field</small>
                                    <div class="auth-label">Email Address</div>
                                    <div class="auth-icon">
                                        <i class="lnil lnil-envelope"></i>
                                    </div>
                                    <div class="validation-icon is-success">
                                        <div class="icon-wrapper">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="validation-icon is-error">
                                        <div class="icon-wrapper">
                                            <i data-feather="x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="control has-validation">
                                    <input type="password" class="input" name="password">
                                    <div class="auth-label">Password</div>
                                    <div class="auth-icon">
                                        <i class="lnil lnil-lock-alt"></i>
                                    </div>
                                </div>

                                <div class="control is-flex">
                                    <label class="remember-toggle">
                                        <input type="checkbox" name="remember">
                                        <span class="toggler">
                                                    <span class="active">
                                                        <i data-feather="check"></i>
                                                    </span>
                                            <span class="inactive">
                                                        <i data-feather="circle"></i>
                                                    </span>
                                            </span>
                                    </label>
                                    <div class="remember-me">Remember Me</div>
                                    <a id="forgot-link">Forgot Password?</a>
                                </div>
                                <div class="button-wrap has-help">
                                    <button id="login-submit" type="button" class="button h-button is-big is-rounded is-primary is-bold is-raised">Login Now</button>
                                    <span>Or <a href="{{ route('register' ) }}">Create</a> an account.</span>
                                </div>
                            </form>

                            <form id="recover-form" class="login-wrapper is-hidden" method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <!-- Password Reset Token -->
{{--                                <input type="hidden" name="token" value="{{ $request->route('token') }}">--}}

                                <p class="recover-text">Enter your email and click on the confirm button to reset your password. We'll send you an email detailing the steps to complete the procedure.</p>
                                <div class="control has-validation">
                                    <input type="email" class="input" value="{{ old('email') }}" >
                                    <small class="error-text">This is a required field</small>
                                    <div class="auth-label">Email Address</div>
                                    <div class="auth-icon">
                                        <i class="lnil lnil-envelope"></i>
                                    </div>
                                    <div class="validation-icon is-success">
                                        <div class="icon-wrapper">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="validation-icon is-error">
                                        <div class="icon-wrapper">
                                            <i data-feather="x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-wrap">
                                    <button id="cancel-recover" type="button" class="button h-button is-white is-big is-rounded is-lower">Cancel</button>
                                    <button type="button" class="button h-button is-solid is-big is-rounded is-lower is-raised is-colored">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}
