@extends("layouts.auth")

@section("content")

    <!--Full pageloader-->
    <!-- Pageloader -->
    <div class="pageloader is-full"></div>
    <div class="infraloader is-full is-active"></div>
    <div class="auth-wrapper">
        <!--Page body-->

        <div class="signup-nav">
            <div class="signup-nav-inner">
                <a href="/" class="logo">
                    <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="">
                    <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="">
                </a>
            </div>
        </div>

        <div id="huro-signup" class="signup-wrapper">

            <div class="signup-steps is-hidden">
                <div class="steps-container">
                    <!--div class="step-icon is-active" data-progress="10" data-step="signup-step-1">
                            <div class="inner">
                                <i data-feather="home"></i>
                            </div>
                            <span class="step-label">Sign up</span>
                        </div-->
                    <div class="step-icon is-active" data-progress="23" data-step="signup-step-2">
                        <div class="inner">
                            <i data-feather="user"></i>
                        </div>
                        <span class="step-label">Profile Pic</span>
                    </div>
                    <div class="step-icon is-inactive" data-progress="75" data-step="signup-step-3">
                        <div class="inner">
                            <i data-feather="shield"></i>
                        </div>
                        <span class="step-label">Account</span>
                    </div>
                    <div class="step-icon is-inactive" data-progress="98">
                        <div class="inner">
                            <i data-feather="check"></i>
                        </div>
                        <span class="step-label">Done</span>
                    </div>
                    <progress id="signup-steps-progress" class="progress" value="25" max="100">25%</progress>
                </div>
            </div>

            <img class="card-bg" src="assets/img/bg/signup/huro-signup.png" alt="">

            <div class="hero is-fullheight">
                <div class="hero-body">
                    <div class="container">
                        <!-- Step 1 -->
                        <div id="signup-step-1" class="columns signup-columns">
                            <div class="column is-4 is-offset-1">
                                <h1 id="main-signup-title" class="title is-3 signup-title">Become a Huro</h1>
                                <h2 id="main-signup-subtitle" class="subtitle signup-subtitle">And simply join an unmatched
                                    design experience.</h2>
                                <div class="signup-card">
                                    <livewire:register-form />
                                </div>
                            </div>
                        </div>


                        <!-- Step 2 -->
                        <div id="signup-step-2" class="columns signup-columns is-hidden">
                            <div class="column is-8 is-offset-2">
                                <div class="signup-profile-wrapper">
                                    <h1 class="title is-5 signup-title has-text-centered">Add a profile picture</h1>
                                    <h2 class="subtitle signup-subtitle has-text-centered">This is your visual identity.
                                    </h2>
                                    <div class="picture-selector">
                                        <div class="image-container">
                                            <img src="assets/img/avatars/svg/huro-1.svg" alt="">
                                            <div class="upload-button modal-trigger" role="button" data-modal="upload-modal">
                                                <i data-feather="plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider-container">
                                    <div class="divider">
                                        <span>Or select an avatar</span>
                                    </div>
                                </div>

                                <div class="avatar-carousel resized-mobile">
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-1.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-2.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-3.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-4.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-5.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-6.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-7.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-8.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-9.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-10.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-11.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="image-wrapper">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/svg/huro-12.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="button-wrap is-centered has-text-centered">
                                    <button id="confirm-step-2" type="button" class="button h-button is-primary is-big is-rounded is-lower">Continue</button>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div id="signup-step-3" class="columns signup-columns is-hidden">
                            <div class="column is-4 is-offset-4 username-form">
                                <h1 class="title is-5 signup-title has-text-centered">Pick a username</h1>
                                <h2 class="subtitle signup-subtitle has-text-centered">Your username is how others will find you
                                    on Huro so pick a good one. You can change it later.</h2>
                                <form class="signup-form">
                                    <div class="columns is-multiline">
                                        <div class="column is-12">
                                            <div class="control has-validation">
                                                <input type="text" class="input">
                                                <small class="error-text">This is a required field</small>
                                                <div class="auth-label">Username</div>
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
                                        </div>
                                        <div class="column is-12">
                                            <div class="control has-validation">
                                                <input type="text" class="input">
                                                <small class="error-text">This is a required field</small>
                                                <div class="auth-label">Password</div>
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
                                        </div>
                                        <div class="column is-12">
                                            <div class="control has-validation">
                                                <input type="text" class="input">
                                                <small class="error-text">This is a required field</small>
                                                <div class="auth-label">Confirm Password</div>
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
                                        </div>
                                        <div class="column is-12">
                                            <div class="control has-switch">
                                                <span>Send me marketing and transaction emails</span>
                                                <label class="form-switch ml-auto">
                                                    <input type="checkbox" id="signup-toggle" class="is-switch">
                                                    <i></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-wrap is-centered has-text-centered">
                                        <button id="finish-signup" type="button" class="button h-button is-big is-rounded is-primary is-lower">Done</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!-- upload modal -->
        <div id="upload-modal" class="modal modal-sm upload-signup-modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="h-modal">
                    <div class="h-modal-card">
                        <div class="upload-demo-wrap">
                            <div class="filepond-profile-wrap">
                                <input type="file" class="signup-filepond is-block mx-auto" name="signup_filepond" accept="image/png, image/jpeg, image/gif">
                            </div>
                        </div>

                        <div class="has-text-centered py-4">
                            <small class="help-text">Upload a profile picture (1:1 ratio)</small>
                        </div>

                        <div class="actions">
                            <div class="buttons is-centered">
                                <button class="button h-button is-big is-outlined modal-dismiss">Cancel</button>
                                <button id="signup-profile-upload" class="button h-button is-primary is-big modal-dismiss is-disabled">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- upload modal -->
@endsection



{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}
