@extends("layouts.master")

@section('content')
    <!--Full pageloader-->
    <!-- Pageloader -->
    <div class="pageloader is-full"></div>
    <div class="infraloader is-full is-active"></div>

    <div class="minimal-wrapper light">
        <!--Page body-->

        <!--Wrapper-->
        <div class="landing-page-wrapper">
            <!-- Hero and Navbar -->
            <div id="huro-marketing" class="hero marketing-hero is-centered is-fullheight">

                <!-- Navbar partial -->
                <nav class="navbar is-fixed-top is-transparent is-docked" aria-label="main navigation">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="/">
                            <div class="brand-icon">
                                <img class="light-image-l" src="{{ asset('assets/img/logos/logo/logo.svg') }}" alt="" />
                                <img class="dark-image-l" src="{{ asset('assets/img/logos/logo/logo-light.svg') }}" alt="" />
                            </div>
                        </a>

                        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div class="navbar-menu">
                        <div class="navbar-start">
                            <div class="navbar-item">
                                <a href="https://themeforest.net/item/huro-multipurpose-admin-and-webapp-ui-kit/28933249" class="nav-link is-active">Buy Now</a>
                            </div>

                            <div class="navbar-item">
                                <a href="#huro-demos-list" class="nav-link is-scroll">Demos</a>
                            </div>

                            <div class="navbar-item">
                                <a href="#huro-demo-elements" class="nav-link is-scroll">UI Elements</a>
                            </div>

                            <div class="navbar-item">
                                <a href="https://docs.cssninja.io/huro/" class="nav-link">Docs</a>
                            </div>

                            <div class="navbar-item">
                                <a href="https://support.cssninja.io" class="nav-link">Support</a>
                            </div>
                        </div>

                        <div class="navbar-end">
                            <div class="navbar-item is-theme-toggle">
                                <label class="theme-toggle">
                                    <input id="navbar-night-toggle--daynight" type="checkbox">
                                    <span class="toggler">
                                        <span class="dark">
                                            <i data-feather="moon"></i>
                                        </span>
                                        <span class="light">
                                            <i data-feather="sun"></i>
                                        </span>
                                        </span>
                                </label>
                            </div>
                            @guest
                                <div class="navbar-item">
                                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                                </div>

                                <div class="navbar-item">
                                    <a href="{{ route('register') }}" class="button h-button is-rounded is-primary is-raised">
                                        <strong>Sign up</strong>
                                    </a>
                                </div>
                            @endguest

                            @auth
                                <div class="navbar-item">
                                    <a href="{{ route('dashboard') }}" class="button h-button is-rounded is-primary is-raised">
                                        <strong>Dashboard</strong>
                                    </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                </nav>
                <!--Hexagon shapes-->
                <img class="hexagon hexagon-1 light-image-l" src="{{ asset('assets/img/icons/hexagons/accent.svg') }}" alt="">
                <img class="hexagon hexagon-1 dark-image-l" src="{{ asset('assets/img/icons/hexagons/accent-heavy.svg') }}" alt="">
                <img class="hexagon hexagon-2 light-image-l" src="{{ asset('assets/img/icons/hexagons/accent.svg') }} " alt="">
                <img class="hexagon hexagon-2 dark-image-l" src="{{ asset('assets/img/icons/hexagons/accent-heavy.svg') }}" alt="">
                <img class="hexagon hexagon-3 light-image-l" src="{{ asset('assets/img/icons/hexagons/green.svg') }}" alt="">
                <img class="hexagon hexagon-3 dark-image-l" src="{{ asset('assets/img/icons/hexagons/green-heavy.svg') }}" alt="">
                <img class="hexagon hexagon-4 light-image-l" src="{{ asset('assets/img/icons/hexagons/purple.svg') }}" alt="">
                <img class="hexagon hexagon-4 dark-image-l" src="{{ asset('assets/img/icons/hexagons/purple-heavy.svg') }}" alt="">

                <div class="hero-body">
                    <div class="container">
                        <div class="columns is-vcentered has-text-centered">

                            <div class="column">
                                <div class="switch-wrapper">
                                    <div class="night-toggle night-toggle--daynight">
                                        <input type="checkbox" id="night-toggle--daynight" class="night-toggle--checkbox" checked="">
                                        <label class="night-toggle--btn" for="night-toggle--daynight"><span class="night-toggle--feature"></span></label>
                                    </div>
                                </div>

                                <h1 class="title is-1 is-bold">Easier development. Beautiful projects</h1>
                                <h3 class="subtitle is-4 pt-2 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Isto modo ne improbos quidem.</h3>
                                <div class="buttons is-centered py-2">
                                    <a class="button h-button is-bold is-primary is-rounded is-raised">Get Started</a>
                                    <a class="button h-button is-bold is-primary is-rounded  is-raised is-outlined">14-day Trial</a>
                                </div>
                                <img class="light-image-l hero-mockup" src="assets/img/illustrations/landing/app-2.png" alt="">
                                <img class="dark-image-l hero-mockup" src="assets/img/illustrations/landing/app-2-dark.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--Feature boxes section-->
            <div class="section has-bg-dots">
                <div class="container">

                    <!--Title-->
                    <div class="section-title has-text-centered py-6">
                        <h2 class="title is-2">Awesome Features</h2>
                        <h4>Huro has been carefully handcrafted.</h4>
                    </div>

                    <!--Content-->
                    <div class="py-12">
                        <div class="columns is-vcentered is-multiline card-icon-boxes">
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-blue">
                                            <i class="lnil lnil-layout-alt-2"></i>
                                        </div>


                                        <h4 class="title is-5">Nice Vectors</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-warning">
                                            <i class="lnil lnil-layers"></i>
                                        </div>

                                        <h4 class="title is-5">Icon title</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-success">
                                            <i class="lnil lnil-grid-alt"></i>
                                        </div>

                                        <h4 class="title is-5">Icon title</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-purple">
                                            <i class="lnil lnil-bulb"></i>
                                        </div>

                                        <h4 class="title is-5">Icon title</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-green">
                                            <i class="lnil lnil-cog"></i>
                                        </div>


                                        <h4 class="title is-5">Icon title</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-yellow">
                                            <i class="lnil lnil-plug"></i>
                                        </div>

                                        <h4 class="title is-5">Icon title</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-orange">
                                            <i class="lnil lnil-folder-alt"></i>
                                        </div>

                                        <h4 class="title is-5">Icon title</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-info">
                                            <i class="lnil lnil-timer"></i>
                                        </div>

                                        <h4 class="title is-5">Icon title</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-blue">
                                            <i class="lnil lnil-pie-chart-alt"></i>
                                        </div>


                                        <h4 class="title is-5">Icon title</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-purple">
                                            <i class="lnil lnil-licencse"></i>
                                        </div>

                                        <h4 class="title is-5">Icon title</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-green">
                                            <i class="lnil lnil-grow"></i>
                                        </div>

                                        <h4 class="title is-5">Icon title</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Box-->
                            <div class="column is-3">
                                <div class="card card-icon-box">
                                    <div class="card-content">
                                        <div class="h-icon is-medium is-yellow">
                                            <i class="lnil lnil-bank"></i>
                                        </div>

                                        <h4 class="title is-5">Icon title</h4>
                                        <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--CTA-->
                        <div class="cta-block no-border">
                            <div class="head-text">
                                <h3>Want to learn more?</h3>
                                <p>Check out the Huro documentation</p>
                            </div>
                            <div class="head-action">
                                <div class="buttons">
                                    <a href="https://docs.huro.cssninja.io" class="button h-button is-primary is-rounded is-elevated action-button">Read the Docs</a>
                                    <a href="https://cssninja.io" class="button chat-button is-secondary">Chat with
                                        us</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--Mockup Section-->
            <div class="section has-bg-dots">
                <div class="container">
                    <!--Title-->
                    <div class="section-title has-text-centered">
                        <h2 class="title is-2">Impecable UI/UX</h2>
                        <h4>Huro has been carefully handcrafted.</h4>
                    </div>

                    <div class="centered-mockup-wrapper">
                        <div class="mockup-container mb-6">
                            <!--Hexagon shapes-->
                            <img class="hexagon hexagon-1 light-image-l" src="assets/img/icons/hexagons/green.svg" alt="">
                            <img class="hexagon hexagon-1 dark-image-l" src="assets/img/icons/hexagons/green-heavy.svg" alt="">
                            <img class="hexagon hexagon-2 light-image-l" src="assets/img/icons/hexagons/orange.svg" alt="">
                            <img class="hexagon hexagon-2 dark-image-l" src="assets/img/icons/hexagons/orange-heavy.svg" alt="">
                            <img class="hexagon hexagon-3 light-image-l" src="assets/img/icons/hexagons/accent.svg" alt="">
                            <img class="hexagon hexagon-3 dark-image-l" src="assets/img/icons/hexagons/accent-heavy.svg" alt="">

                            <!--Mockup-->
                            <img class="light-image-l centered-mockup" src="assets/img/illustrations/landing/app-1.png" alt="">
                            <img class="dark-image-l centered-mockup" src="assets/img/illustrations/landing/app-1-dark.png" alt="">
                        </div>
                        <div class="columns">
                            <div class="column is-4">
                                <h3 class="title is-4">Bulma 0.9.1</h3>
                                <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Summum ením bonum exposuit vacuitatem.</p>
                            </div>
                            <div class="column is-4">
                                <h3 class="title is-4">Clean Code</h3>
                                <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Summum ením bonum exposuit vacuitatem.</p>
                            </div>
                            <div class="column is-4">
                                <h3 class="title is-4">Modern UI</h3>
                                <p class="subtitle is-6 light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Summum ením bonum exposuit vacuitatem.</p>
                            </div>
                        </div>
                    </div>

                    <!--Stacks-->
                    <div class="stacks">
                        <div class="stack">
                            <img src="assets/img/icons/stacks/html5.svg" alt="">
                        </div>
                        <div class="stack">
                            <img src="assets/img/icons/stacks/js.svg" alt="">
                        </div>
                        <div class="stack">
                            <img src="assets/img/icons/stacks/bulma.svg" alt="">
                        </div>
                        <div class="stack">
                            <img src="assets/img/icons/stacks/sass.svg" alt="">
                        </div>
                        <div class="stack">
                            <img src="assets/img/icons/stacks/gulp.svg" alt="">
                        </div>
                    </div>

                </div>
            </div>

            <!--Side Features Section-->
            <div class="section">
                <div class="container">
                    <!--Title-->
                    <div class="section-title has-text-centered">
                        <h2 class="title is-2">Top Tier Product</h2>
                        <h4>Huro has been carefully handcrafted.</h4>
                    </div>

                    <!-- Feature -->
                    <div class="columns is-vcentered side-feature">
                        <div class="column is-6 has-text-centered">
                            <img class="light-image-l featured-image" src="assets/img/illustrations/landing/feature-1.png" alt="">
                            <img class="dark-image-l featured-image" src="assets/img/illustrations/landing/feature-1-dark.png" alt="">
                        </div>
                        <div class="column is-5">
                            <h2 class="title m-b-10 is-centered-tablet-portrait">Incredible UI</h2>
                            <p class="section-feature-description is-centered-tablet-portrait">
                                Huro's UI has been carefully thought and designed, and is simply one of the best you'll find on
                                the market. It's visual power and its modularity will let you build great apps seamlessly.
                            </p>
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="columns is-vcentered side-feature">
                        <div class="column is-6 has-text-centered h-hidden-desktop h-hidden-tablet-p h-hidden-tablet-l">
                            <img class="light-image-l featured-image" src="assets/img/illustrations/landing/feature-2.svg" alt="">
                            <img class="dark-image-l featured-image" src="assets/img/illustrations/landing/feature-2-dark.svg" alt="">
                        </div>
                        <div class="column is-5 is-offset-1">
                            <h2 class="title m-b-10 is-centered-tablet-portrait">Playful Vectors</h2>
                            <p class="section-feature-description is-centered-tablet-portrait">
                                Huro ships with a lot of svg illustrations representing various elements that can be used in a
                                website, following very high quality standards.
                            </p>
                        </div>
                        <div class="column is-6 has-text-centered h-hidden-mobile">
                            <img class="light-image-l featured-image" src="assets/img/illustrations/landing/feature-2.svg" alt="">
                            <img class="dark-image-l featured-image" src="assets/img/illustrations/landing/feature-2-dark.svg" alt="">
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="columns is-vcentered side-feature">
                        <div class="column is-6 has-text-centered">
                            <img class="light-image-l featured-image" src="assets/img/illustrations/landing/feature-3.svg" alt="">
                            <img class="dark-image-l featured-image" src="assets/img/illustrations/landing/feature-3-dark.svg" alt="">
                        </div>
                        <div class="column is-5">
                            <h2 class="title m-b-10 is-centered-tablet-portrait">Handcrafted UI</h2>
                            <p class="section-feature-description is-centered-tablet-portrait">
                                Huro ships with it's own component library based on the Bulma.io CSS framework. Each component
                                has been carefully handcrafted and natively supports dark mode.
                            </p>
                        </div>
                    </div>

                    <!--CTA-->
                    <div class="cta-block no-border">
                        <div class="head-text">
                            <h3>Want to learn more?</h3>
                            <p>Check out the Huro documentation</p>
                        </div>
                        <div class="head-action">
                            <div class="buttons">
                                <a href="https://docs.huro.cssninja.io" class="button h-button is-primary is-rounded is-elevated action-button">Read the Docs</a>
                                <a href="https://cssninja.io" class="button chat-button is-secondary">Chat with
                                    us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--About section-->
            <div class="section has-bg-dots">
                <div class="container">
                    <!--Title-->
                    <div class="section-title has-text-centered py-6">
                        <h2 class="title is-2">About Us</h2>
                        <h4>Let us tell you the hole story.</h4>
                    </div>

                    <div class="video-section py-12">
                        <div class="columns is-vcentered">
                            <div class="column is-6 is-relative is-centered-portrait">
                                <!--Video PLayer-->
                                <div class="video-player-container is-square reversed-play">
                                    <video id="hero-player" class="video-player" playsinline controls data-poster="https://dummyimage.com/440x440/ededed/000000" data-demo-poster="/assets/img/photo/demo/posters/poster-1c.jpg">
                                        <source src="/assets/img/video/hands.mp4" type="video/mp4" />
                                        <source src="/assets/img/video/hands.webm" type="video/webm" />
                                    </video>
                                </div>
                            </div>
                            <div class="column is-6">
                                <!--Content-->
                                <div class="columns is-multiline b-columns-half-tablet-p">
                                    <div class="column is-6">
                                        <div class="py-2 medium:py-4">
                                            <h4 class="title is-5 is-narrow">How we started</h4>
                                            <p class="pt-2 max-w-3 text-medium">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Sed
                                                videbimus.</p>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <div class="py-2 medium:py-4">
                                            <h4 class="title is-5 is-narrow">Who we are</h4>
                                            <p class="pt-2 max-w-3 text-medium">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Sed
                                                videbimus.</p>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <div class="py-2 medium:py-4">
                                            <h4 class="title is-5 is-narrow">What we do</h4>
                                            <p class="pt-2 max-w-3 text-medium">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Sed
                                                videbimus.</p>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <div class="py-2 medium:py-4">
                                            <h4 class="title is-5 is-narrow">Our values</h4>
                                            <p class="pt-2 max-w-3 text-medium">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Sed
                                                videbimus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--Pricing section-->
            <div class="section has-bg-dots">
                <div class="container">
                    <!--Title-->
                    <div class="section-title has-text-centered">
                        <h2 class="title is-2">Comprehensive Pricing</h2>
                        <h4>There's a right plan for everyone out there.</h4>
                    </div>

                    <!--Wrapper-->
                    <div class='pricing-wrapper'>
                        <!--Pricing plan-->
                        <div class='pricing-plan'>
                            <div class='name'>Free</div>
                            <img src="assets/img/logos/logo/logo-platinum.svg" alt="">
                            <div class='price'>$0</div>
                            <div class='trial'>Forever free</div>
                            <hr>
                            <ul>
                                <li>
                                    <strong>2</strong>
                                    team members
                                </li>
                                <li>
                                    <strong>3</strong>
                                    team projects
                                </li>
                                <li>
                                    <strong>50GB</strong>
                                    of disk storage
                                </li>
                            </ul>
                        </div>
                        <!--Pricing plan-->
                        <div class='pricing-plan'>
                            <div class='name'>Business</div>
                            <img src="assets/img/logos/logo/logo-accent.svg" alt="">
                            <div class='price'>$49</div>
                            <div class='trial'>Free 14 day trial</div>
                            <hr>
                            <ul>
                                <li>
                                    <strong>10</strong>
                                    team members
                                </li>
                                <li>
                                    <strong>150</strong>
                                    team projects
                                </li>
                                <li>
                                    <strong>500GB</strong>
                                    of disk storage
                                </li>
                            </ul>
                        </div>
                        <!--Pricing plan-->
                        <div class='pricing-plan is-featured'>
                            <div class='name'>Pro</div>
                            <img src="assets/img/logos/logo/logo.svg" alt="">
                            <div class='price'>$119</div>
                            <div class='trial'>Free 14 day trial</div>
                            <hr>
                            <ul>
                                <li>
                                    <strong>Unlimited</strong>
                                    team members
                                </li>
                                <li>
                                    <strong>Unlimited</strong>
                                    team projects
                                </li>
                                <li>
                                    <strong>Unlimited</strong>
                                    disk storage
                                </li>
                                <li>
                                    Team analytics
                                </li>
                                <li>
                                    Custom reports
                                </li>
                            </ul>
                        </div>

                    </div>

                    <!--CTA-->
                    <div class="cta-block no-border">
                        <div class="head-text">
                            <h3>Want to learn more?</h3>
                            <p>Check out the Huro documentation</p>
                        </div>
                        <div class="head-action">
                            <div class="buttons">
                                <a href="https://docs.huro.cssninja.io" class="button h-button is-primary is-rounded is-elevated action-button">Read the Docs</a>
                                <a href="https://cssninja.io" class="button chat-button is-secondary">Chat with
                                    us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Boxed CTA-->
            <div class="section has-bg-dots">
                <div class="container">
                    <div class="">
                        <div class="boxed-cta">
                            <div class="h-avatar h-avatar-1 is-xl">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-2 is-large">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/5.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-3 is-large">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-4 is-xl">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-5 is-large">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/24.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-6 is-xl">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-7 is-medium">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/28.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-8 is-large">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/32.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-9 is-xl">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/41.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-10 is-medium">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-11 is-large">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/33.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-12 is-xl">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/21.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-13 is-large">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/23.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-14 is-large">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/9.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-15 is-large">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/15.jpg" alt="">
                            </div>
                            <div class="h-avatar h-avatar-16 is-large">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/11.jpg" alt="">
                            </div>
                            <div class="boxed-cta-content has-text-centered">
                                <h2 class="title is-1">Get Started Now</h2>
                                <h3 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sin te auctoritas commovebat, nobisne omnibus.</h3>
                                <a class="button h-button is-rounded is-bold">Start your Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <!-- Simple light footer -->
            <footer class="huro-footer">
                <div class="container">
                    <div class="footer-head">
                        <div class="head-text">
                            <h3>Ready to get started?</h3>
                            <p>Get your Huro copy now</p>
                        </div>
                        <div class="head-action">
                            <div class="buttons">
                                <a href="https://themeforest.net/item/huro-multipurpose-admin-and-webapp-ui-kit/28933249" class="button h-button is-primary is-rounded raised action-button">Buy Huro</a>
                                <a href="https://cssninja.io" class="button chat-button">Chat with us</a>
                            </div>
                        </div>
                    </div>
                    <div class="columns footer-body">
                        <!-- Column -->
                        <div class="column is-4">
                            <div class="p-t-10 p-b-10">
                                <img class="small-footer-logo light-image-l" src="assets/img/logos/logo/logo.svg" alt="" />
                                <img class="small-footer-logo dark-image-l" src="assets/img/logos/logo/logo-light.svg" alt="" />
                                <div class="footer-description p-t-10 p-b-10">
                                    Huro is built for developers and designers. It's modular approach lets you create awesome webapps with
                                    incredible layouts and elements.
                                </div>
                            </div>
                            <div>
                                    <span class="moto">Designed and coded with <i class="fa fa-heart text-danger p-l-5 p-r-5"></i> by CSS
                                    Ninja.</span>
                                <div class="social-links p-t-10 p-b-10">
                                    <a href="#">
                                        <span class="icon"><i aria-hidden="true" class="fab fa-facebook"></i></span>
                                    </a>
                                    <a href="#">
                                        <span class="icon"><i aria-hidden="true" class="fab fa-twitter"></i></span>
                                    </a>
                                    <a href="#">
                                        <span class="icon"><i aria-hidden="true" class="fab fa-linkedin"></i></span>
                                    </a>
                                    <a href="#">
                                        <span class="icon"><i aria-hidden="true" class="fab fa-dribbble"></i></span>
                                    </a>
                                    <a href="#">
                                        <span class="icon"><i aria-hidden="true" class="fab fa-github"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="column is-6 is-offset-2">
                            <div class="columns is-flex-tablet-p">
                                <!-- Column -->
                                <div class="column">
                                    <ul class="footer-column">
                                        <li class="column-header">
                                            Huro
                                        </li>
                                        <li class="column-item"><a href="#">Home</a></li>
                                        <li class="column-item"><a href="#">Pricing</a></li>
                                        <li class="column-item"><a href="#">Get started</a></li>
                                        <li class="column-item"><a href="#">Help</a></li>
                                    </ul>
                                </div>
                                <!-- Column -->
                                <div class="column">
                                    <ul class="footer-column">
                                        <li class="column-header">
                                            Resources
                                        </li>
                                        <li class="column-item"><a href="#">Learning</a></li>
                                        <li class="column-item"><a href="#">Support center</a></li>
                                        <li class="column-item"><a href="#">Frequent questions</a></li>
                                        <li class="column-item"><a href="#">Schedule a demo</a></li>
                                    </ul>
                                </div>
                                <!-- Column -->
                                <div class="column">
                                    <ul class="footer-column">
                                        <li class="column-header">
                                            Terms
                                        </li>
                                        <li class="column-item"><a href="#">Terms of Service</a></li>
                                        <li class="column-item"><a href="#">Privacy policy</a></li>
                                        <li class="column-item"><a href="#">SaaS services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright has-text-centered">
                        <p>&copy; 2020-2021 | <a href="https://cssninja.io">Css Ninja</a> | All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
            <!-- /Simple light footer -->
            <!-- Back To Top Button -->
            <div id="backtotop">
                <a href="#">
                    <i aria-hidden="true" class="fas fa-angle-up"></i>
                </a>
            </div>
        </div>


    </div>

@endsection
