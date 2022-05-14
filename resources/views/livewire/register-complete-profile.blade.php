<div>



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
                <form class="signup-form" wire:submit.prevent="submit" method="POST">
                    <div class="columns is-multiline">
                        <div class="column is-12">
                            <div class="control has-validation">
                                <input type="text" class="input" wire:model.defer="username">
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
                                <input type="text" class="input" wire:model.defer="password">
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
                                <input type="text" class="input" >
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
                                    <input type="checkbox" id="signup-toggle" class="is-switch" value="1">
                                    <i></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="button-wrap is-centered has-text-centered">
                        <button id="finish-signup" type="submit" class="button h-button is-big is-rounded is-primary is-lower">Done</button>
                    </div>
                </form>
            </div>
        </div>


</div>
