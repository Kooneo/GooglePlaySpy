<div>
    <form id="signup-form" class="signup-form is-mobile-spaced" wire:submit.prevent="submit">
{{--        @if ($errors->any())--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <div>{{$error}}</div>--}}
{{--            @endforeach--}}
{{--        @endif--}}

        <div class="columns is-multiline">
            <div class="column is-6">
                <div class="control has-validation">
                    <input type="text" class="input" wire:model="first_name" >
                    @error('first_name')
                        <span class="error-text">{{ $message }}</span>

                    @enderror
                    <div class="auth-label">First Name</div>
                    <div class="validation-icon is-success">
                        <div class="icon-wrapper">
                            <i data-feather="check"></i>
                        </div>
                    </div>

                    <div class="validation-icon is-error" >
                        <div class="icon-wrapper">
                            <i data-feather="x"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="column is-6">
                <div class="control has-validation">
                    <input type="text" class="input" wire:model="last_name">
                    <small class="error-text">This is a required field</small>
                    <div class="auth-label">Last Name</div>
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
                    <input type="email" class="input"  wire:model="email">
                    <small class="error-text">This is a required field</small>
                    <div class="auth-label">Email Address</div>
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
                <div class="signup-type">
                    <div class="box-wrap">
                        <input type="radio" wire:model.defer="plan_type" value="0" checked>
                        <div class="signup-box">
                            <i class="lnil lnil-coffee-cup"></i>
                            <div class="meta">
                                <span>Free</span>
                                <span>Nice to get started</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-wrap">
                        <input type="radio" wire:model.defer="plan_type" value="1">
                        <div class="signup-box">
                            <i class="lnil lnil-crown-alt-1"></i>
                            <div class="meta">
                                <span>Paid</span>
                                <span>Get a lot more features</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="control is-agree">
            <span>By continuing you agree to our <a href="#">Terms</a> and <a
                    href="#">Privacy</a></span>
        </div>

        <div class="button-wrap has-help">
            <button id="confirm-step-1" type="submit" class="button h-button is-big is-rounded is-primary is-bold is-fullwidth">Continue</button>
            <span>Or <a href="{{ route('login') }}">Sign In</a> to your account.</span>
        </div>
    </form>
</div>
