@extends('layouts.dash')

@section('content')
    <div class="app-overlay"></div>
    <!--Pageloader-->
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <!--Mobile navbar-->
    <nav class="navbar mobile-navbar no-shadow is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
        <div class="container">
            <!-- Brand -->
            <div class="navbar-brand">
                <!-- Mobile menu toggler icon -->
                <div class="brand-start">
                    <div class="navbar-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <a class="navbar-item is-brand" href="index.html">
                    <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="">
                    <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="">
                </a>

                <div class="brand-end">
                    <div class="navbar-item has-dropdown is-notification is-hidden-tablet is-hidden-desktop">
                        <a class="navbar-link is-arrowless" href="javascript:void(0);">
                            <i data-feather="bell"></i>
                            <span class="new-indicator pulsate"></span>
                        </a>
                        <div class="navbar-dropdown is-boxed is-right">
                            <div class="heading">
                                <div class="heading-left">
                                    <h6 class="heading-title">Notifications</h6>
                                </div>
                                <div class="heading-right">
                                    <a class="notification-link" href="#">See all</a>
                                </div>
                            </div>
                            <div class="inner has-slimscroll">

                                <ul class="notification-list">
                                    <li>
                                        <a class="notification-item">
                                            <div class="img-left">
                                                <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" />
                                            </div>
                                            <div class="user-content">
                                                <p class="user-info"><span class="name">Alice C.</span> left a comment.</p>
                                                <p class="time">1 hour ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="notification-item">
                                            <div class="img-left">
                                                <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" />
                                            </div>
                                            <div class="user-content">
                                                <p class="user-info"><span class="name">Joshua S.</span> uploaded a file.</p>
                                                <p class="time">2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="notification-item">
                                            <div class="img-left">
                                                <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" />
                                            </div>
                                            <div class="user-content">
                                                <p class="user-info"><span class="name">Tara S.</span> sent you a message.</p>
                                                <p class="time">2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="notification-item">
                                            <div class="img-left">
                                                <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" />
                                            </div>
                                            <div class="user-content">
                                                <p class="user-info"><span class="name">Melany W.</span> left a comment.</p>
                                                <p class="time">3 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown is-right is-spaced dropdown-trigger user-dropdown">
                        <div class="is-trigger" aria-haspopup="true">
                            <div class="profile-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                            </div>
                        </div>
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <div class="dropdown-head">
                                    <div class="h-avatar is-large">
                                        <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                    </div>
                                    <div class="meta">
                                        <span>Erik Kovalsky</span>
                                        <span>Product Manager</span>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-user-alt"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Profile</span>
                                        <span>View your profile</span>
                                    </div>
                                </a>
                                <a class="dropdown-item is-media layout-switcher">
                                    <div class="icon">
                                        <i class="lnil lnil-layout"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Layout</span>
                                        <span>Switch to admin/webapp</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-briefcase"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Projects</span>
                                        <span>All my projects</span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-users-alt"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Team</span>
                                        <span>Manage your team</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-cog"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Settings</span>
                                        <span>Account settings</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <div class="dropdown-item is-button">
                                    <button class="button h-button is-primary is-raised is-fullwidth logout-button">
                                            <span class="icon is-small">
                                              <i data-feather="log-out"></i>
                                          </span>
                                        <span>Logout</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <!--Mobile sidebar-->
    <div class="mobile-main-sidebar">
        <div class="inner">
            <ul class="icon-side-menu">
                <li>
                    <a href="/admin-dashboards-personal-1.html" id="home-sidebar-menu-mobile">
                        <i data-feather="activity"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin-grid-users-1.html" id="layouts-sidebar-menu-mobile">
                        <i data-feather="grid"></i>
                    </a>
                </li>
                <li>
                    <a href="/elements-hub.html" id="elements-sidebar-menu-mobile">
                        <i data-feather="box"></i>
                    </a>
                </li>
                <li>
                    <a href="/components-hub.html" id="components-sidebar-menu-mobile">
                        <i data-feather="cpu"></i>
                    </a>
                </li>
                <li>
                    <a href="/messaging-chat.html" id="open-messages-mobile">
                        <i data-feather="message-circle"></i>
                    </a>
                </li>
            </ul>

            <ul class="bottom-icon-side-menu">
                <li>
                    <a href="javascript:" class="right-panel-trigger" data-panel="search-panel">
                        <i data-feather="search"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i data-feather="settings"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--Circular menu-->
    <div id="circular-menu" class="circular-menu">

        <a class="floating-btn" onclick="document.getElementById('circular-menu').classList.toggle('active');">
            <i aria-hidden="true" class="fas fa-bars"></i>
            <i aria-hidden="true" class="fas fa-times"></i>
        </a>

        <div class="items-wrapper">
            <div class="menu-item is-flex">
                <label class="dark-mode">
                    <input type="checkbox" checked>
                    <span></span>
                </label>
            </div>
            <a class="menu-item is-flex right-panel-trigger" data-panel="languages-panel">
                <img src="assets/img/icons/flags/united-states-of-america.svg" alt="">
            </a>
            <a href="/admin-profile-notifications.html" class="menu-item is-flex">
                <i data-feather="bell"></i>
            </a>
            <a class="menu-item is-flex right-panel-trigger" data-panel="activity-panel">
                <i data-feather="grid"></i>
            </a>
        </div>

    </div>
    <!--Sidebar-->
    <div class="main-sidebar">
        <div class="sidebar-brand">
            <a href="/">
                <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="">
                <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="">
            </a>
        </div>
        <div class="sidebar-inner">

            <div class="naver"></div>

            <ul class="icon-menu">
                <!-- Activity -->
                <li>
                    <a href="/admin-dashboards-personal-1.html" id="home-sidebar-menu" data-content="Dashboards">
                        <i class="sidebar-svg" data-feather="activity"></i>
                    </a>
                </li> <!-- Layouts -->
                <li>
                    <a href="/admin-grid-users-1.html" id="layouts-sidebar-menu" data-content="Layouts">
                        <i class="sidebar-svg" data-feather="grid"></i>
                    </a>
                </li> <!-- Bounties -->
                <li>
                    <a href="elements-hub.html" id="elements-sidebar-menu" data-content="Elements">
                        <i class="sidebar-svg" data-feather="box"></i>
                    </a>
                </li> <!-- Bugs -->
                <li>
                    <a href="components-hub.html" id="components-sidebar-menu" data-content="Components">
                        <i class="sidebar-svg" data-feather="cpu"></i>
                    </a>
                </li> <!-- Messaging -->
                <li id="messages-menu">
                    <a href="admin-messaging-chat.html" id="open-messages" data-content="Messaging">
                        <i class="sidebar-svg" data-feather="message-circle"></i>
                    </a>
                </li>
            </ul>

            <!-- User account -->
            <ul class="bottom-menu">
                <!-- Notifications -->
                <li class="right-panel-trigger" data-panel="search-panel">
                    <a href="javascript:void(0);" id="open-search" data-content="Search"><i class="sidebar-svg" data-feather="search"></i></a>
                    <a href="javascript:void(0);" id="close-search" class="is-hidden is-inactive"><i class="sidebar-svg" data-feather="x"></i></a>
                </li> <!-- Wallet -->
                <li>
                    <a href="/admin-profile-settings.html" id="open-settings" data-content="Settings">
                        <i class="sidebar-svg" data-feather="settings"></i>
                    </a>
                </li> <!-- Profile -->
                <li id="user-menu">
                    <div id="profile-menu" class="dropdown profile-dropdown dropdown-trigger is-spaced is-up">
                        <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                        <span class="status-indicator"></span>

                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <div class="dropdown-head">
                                    <div class="h-avatar is-large">
                                        <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                    </div>
                                    <div class="meta">
                                        <span>Erik Kovalsky</span>
                                        <span>Product Manager</span>
                                    </div>
                                </div>
                                <a href="/admin-profile-view.html" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-user-alt"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Profile</span>
                                        <span>View your profile</span>
                                    </div>
                                </a>
                                <a class="dropdown-item is-media layout-switcher">
                                    <div class="icon">
                                        <i class="lnil lnil-layout"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Layout</span>
                                        <span>Switch to admin/webapp</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-briefcase"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Projects</span>
                                        <span>All my projects</span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-users-alt"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Team</span>
                                        <span>Manage your team</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-cog"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Settings</span>
                                        <span>Account settings</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <div class="dropdown-item is-button">
                                    <button class="button h-button is-primary is-raised is-fullwidth logout-button">
                                            <span class="icon is-small">
                                              <i data-feather="log-out"></i>
                                          </span>
                                        <span>Logout</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>



            </ul>
        </div>
    </div>
    <!--Languages panel-->
    <div id="languages-panel" class="right-panel-wrapper is-languages">
        <div class="panel-overlay"></div>

        <div class="right-panel">
            <div class="right-panel-head">
                <h3>Select Language</h3>
                <a class="close-panel">
                    <i data-feather="chevron-right"></i>
                </a>
            </div>
            <div class="right-panel-body has-slimscroll">
                <div class="languages-boxes">
                    <div class="language-box">
                        <div class="language-option">
                            <input type="radio" name="language_selection" checked>
                            <div class="language-option-inner">
                                <img src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                <div class="indicator">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="language-box">
                        <div class="language-option">
                            <input type="radio" name="language_selection">
                            <div class="language-option-inner">
                                <img src="assets/img/icons/flags/france.svg" alt="">
                                <div class="indicator">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="language-box">
                        <div class="language-option">
                            <input type="radio" name="language_selection">
                            <div class="language-option-inner">
                                <img src="assets/img/icons/flags/spain.svg" alt="">
                                <div class="indicator">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="language-box">
                        <div class="language-option">
                            <input type="radio" name="language_selection">
                            <div class="language-option-inner">
                                <img src="assets/img/icons/flags/germany.svg" alt="">
                                <div class="indicator">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="language-box">
                        <div class="language-option">
                            <input type="radio" name="language_selection">
                            <div class="language-option-inner">
                                <img src="assets/img/icons/flags/mexico.svg" alt="">
                                <div class="indicator">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="language-box">
                        <div class="language-option">
                            <input type="radio" name="language_selection">
                            <div class="language-option-inner">
                                <img src="assets/img/icons/flags/china.svg" alt="">
                                <div class="indicator">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="img-wrap has-text-centered">
                    <img class="light-image" src="assets/img/illustrations/right-panel/languages.svg" alt="">
                    <img class="dark-image" src="assets/img/illustrations/right-panel/languages-dark.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--Activity panel-->
    <div id="activity-panel" class="right-panel-wrapper is-activity">
        <div class="panel-overlay"></div>

        <div class="right-panel">
            <div class="right-panel-head">
                <h3>Activity</h3>
                <a class="close-panel">
                    <i data-feather="chevron-right"></i>
                </a>
            </div>
            <div class="tabs-wrapper is-triple-slider is-squared">
                <div class="tabs-inner">
                    <div class="tabs">
                        <ul>
                            <li data-tab="team-side-tab" class="is-active"><a><span>Team</span></a></li>
                            <li data-tab="projects-side-tab"><a><span>Projects</span></a></li>
                            <li data-tab="schedule-side-tab"><a><span>Schedule</span></a></li>
                            <li class="tab-naver"></li>
                        </ul>
                    </div>
                </div>

                <div class="right-panel-body">
                    <div id="team-side-tab" class="tab-content is-active">
                        <!--Team Member-->
                        <div class="team-card">
                            <div class="h-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                                <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Joshua S.</span>
                                <span>
                                      <i data-feather="map-pin"></i>
                                      Las Vegas, NV
                                  </span>
                            </div>
                            <a class="link">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>

                        <!--Team Member-->
                        <div class="team-card">
                            <div class="h-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Melany W.</span>
                                <span>
                                      <i data-feather="map-pin"></i>
                                      San Jose, CA
                                  </span>
                            </div>
                            <a class="link">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>

                        <!--Team Member-->
                        <div class="team-card">
                            <div class="h-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/18.jpg" alt="">
                                <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Esteban C.</span>
                                <span>
                                      <i data-feather="map-pin"></i>
                                      Miami, FL
                                  </span>
                            </div>
                            <a class="link">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>

                        <!--Team Member-->
                        <div class="team-card">
                            <div class="h-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Tara S.</span>
                                <span>
                                      <i data-feather="map-pin"></i>
                                      New York, NY
                                  </span>
                            </div>
                            <a class="link">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div id="projects-side-tab" class="tab-content">
                        <!--Project-->
                        <div class="project-card">
                            <div class="project-inner">
                                <img class="project-avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/logos/slicer.svg" alt="">
                                <div class="meta">
                                    <span>The slicer project</span>
                                    <span>getslicer.io</span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                            <div class="project-foot">
                                <progress class="progress is-primary is-tiny" value="31" max="100">31%</progress>
                                <div class="foot-stats">
                                    <span>5 / 24</span>

                                    <div class="avatar-stack">
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                        </div>
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/5.jpg" alt="">
                                        </div>
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project-->
                        <div class="project-card">
                            <div class="project-inner">
                                <img class="project-avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/logos/metamovies.svg" alt="">
                                <div class="meta">
                                    <span>Metamovies reworked</span>
                                    <span>metamovies.co</span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                            <div class="project-foot">
                                <progress class="progress is-primary is-tiny" value="84" max="100">84%</progress>
                                <div class="foot-stats">
                                    <span>28 / 31</span>

                                    <div class="avatar-stack">
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                        </div>
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/18.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project-->
                        <div class="project-card">
                            <div class="project-inner">
                                <img class="project-avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/logos/fastpizza.svg" alt="">
                                <div class="meta">
                                    <span>Fast Pizza redesign</span>
                                    <span>fastpizza.com</span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                            <div class="project-foot">
                                <progress class="progress is-primary is-tiny" value="60" max="100">60%</progress>
                                <div class="foot-stats">
                                    <span>25 / 39</span>

                                    <div class="avatar-stack">
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                        </div>
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="schedule-side-tab" class="tab-content">
                        <!--Timeline-->
                        <div class="icon-timeline">
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="phone-call"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Call Danny at Colby's</p>
                                    <span>Today - 11:30am</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                </div>
                                <div class="timeline-content">
                                    <p>Meeting with Alice</p>
                                    <span>Today - 01:00pm</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="message-circle"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Answer Annie's message</p>
                                    <span>Today - 01:45pm</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="mail"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Send new campaign</p>
                                    <span>Today - 02:30pm</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="smile"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Project review</p>
                                    <span>Today - 03:30pm</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="phone-call"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Call Trisha Jackson</p>
                                    <span>Today - 05:00pm</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="feather"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Write proposal for Don</p>
                                    <span>Today - 06:00pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
    <!--Search panel-->
    <div id="search-panel" class="right-panel-wrapper is-search is-left">
        <div class="panel-overlay"></div>

        <div class="right-panel">
            <div class="right-panel-head">
                <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="" />
                <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="" />
                <a class="close-panel">
                    <i data-feather="chevron-left"></i>
                </a>
            </div>
            <div class="right-panel-body has-slimscroll">
                <div class="field">
                    <div class="control has-icon">
                        <input type="text" class="input is-rounded search-input" placeholder="Search...">
                        <div class="form-icon">
                            <i data-feather="search"></i>
                        </div>
                        <div class="search-results has-slimscroll"></div>
                    </div>
                </div>

                <div class="recent">
                    <h4>Recently viewed</h4>
                    <div class="recent-block">
                        <a class="media-flex-center">
                            <div class="h-icon is-info is-rounded is-small">
                                <i data-feather="chrome"></i>
                            </div>
                            <div class="flex-meta">
                                <span>Browser Support</span>
                                <span>Blog post</span>
                            </div>
                        </a>
                        <a class="media-flex-center">
                            <div class="h-icon is-orange is-rounded is-small">
                                <i data-feather="tv"></i>
                            </div>
                            <div class="flex-meta">
                                <span>Twitch API</span>
                                <span>Blog post</span>
                            </div>
                        </a>
                        <a class="media-flex-center">
                            <div class="h-icon is-green is-rounded is-small">
                                <i data-feather="twitter"></i>
                            </div>
                            <div class="flex-meta">
                                <span>Twitter Auth</span>
                                <span>Blog post</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="recent">
                    <h4>Recent Members</h4>
                    <div class="recent-block">
                        <a class="media-flex-center">
                            <div class="h-avatar is-small">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="" data-user-popover="0">
                            </div>
                            <div class="flex-meta">
                                <span>Alice C.</span>
                                <span>Software Engineer</span>
                            </div>
                        </a>
                        <a class="media-flex-center">
                            <div class="h-avatar is-small">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="" data-user-popover="6">
                            </div>
                            <div class="flex-meta">
                                <span>Tara S.</span>
                                <span>UI/UX Designer</span>
                            </div>
                        </a>
                        <a class="media-flex-center">
                            <div class="h-avatar is-small">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/22.jpg" alt="" data-user-popover="5">
                            </div>
                            <div class="flex-meta">
                                <span>Jimmy H.</span>
                                <span>Project Manager</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Page body-->

    <div id="home-sidebar" class="sidebar-panel is-generic">
        <div class="subpanel-header">

            <div class="dropdown project-dropdown dropdown-trigger is-spaced">
                <div class="h-avatar is-small">
                        <span class="avatar is-fake is-h-green">
                          <span>H</span>
                        </span>
                </div>
                <span class="status-indicator"></span>

                <div class="dropdown-menu" role="menu">
                    <div class="dropdown-content">
                        <div class="dropdown-block">
                            <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-warning">
                                      <span>D</span>
                                    </span>
                            </div>
                            <div class="meta">
                                <span class="dark-inverted">Delivery App Project</span>
                                <span>Food For Good</span>
                            </div>
                        </div>
                        <div class="dropdown-block">
                            <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-h-green">
                                      <span>H</span>
                                    </span>
                            </div>
                            <div class="meta">
                                <span class="dark-inverted">Health and Fitness Dashboard</span>
                                <span>Fit'n'Dance</span>
                            </div>
                        </div>
                        <div class="dropdown-block">
                            <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-info">
                                      <span>L</span>
                                    </span>
                            </div>
                            <div class="meta">
                                <span class="dark-inverted">Learning Tracker Dashboard</span>
                                <span>Fit'n'Dance</span>
                            </div>
                        </div>
                        <div class="dropdown-block">
                            <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-h-purple">
                                      <span>B</span>
                                    </span>
                            </div>
                            <div class="meta">
                                <span class="dark-inverted">Banking and Finance Dashboard</span>
                                <span>H Bank</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="no-mb">Dashboards</h3>
            <div class="panel-close">
                <i data-feather="x"></i>
            </div>
        </div>
        <div class="inner" data-simplebar>
            <ul>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Personal <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-personal-1.html">
                                <i class="lnil lnil-analytics-alt-1"></i>
                                <span>Personal V1</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-personal-2.html">
                                <i class="lnil lnil-pie-chart"></i>
                                <span>Personal V2</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-personal-3.html">
                                <i class="lnil lnil-stats-up"></i>
                                <span>Personal V3</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Finance <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-finance-1.html">
                                <i class="lnil lnil-analytics-alt-1"></i>
                                <span>Analytics Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-finance-2.html">
                                <i class="lnil lnil-stats-up"></i>
                                <span>Stocks Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-finance-3.html">
                                <i class="lnil lnil-credit-card"></i>
                                <span>Sales Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Banking <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-banking-1.html">
                                <i class="lnil lnil-bank"></i>
                                <span>Banking V1</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-banking-2.html">
                                <i class="lnil lnil-bank"></i>
                                <span>Banking V2</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-banking-3.html">
                                <i class="lnil lnil-bank"></i>
                                <span>Banking V3</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Business <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-business-1.html">
                                <i class="lnil lnil-plane-alt"></i>
                                <span>Flights Booking</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-business-2.html">
                                <i class="lnil lnil-apartment"></i>
                                <span>Company Board</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-business-3.html">
                                <i class="lnil lnil-users-alt"></i>
                                <span>HR Board</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-business-4.html">
                                <i class="lnil lnil-graduate"></i>
                                <span>Course Board</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-business-5.html">
                                <i class="lnil lnil-briefcase"></i>
                                <span>Jobs Board</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Lifestyle <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-1.html">
                                <i class="lnil lnil-cardiology"></i>
                                <span>Influencer</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-2.html">
                                <i class="lnil lnil-cloud-sun"></i>
                                <span>Hobbies</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-3.html">
                                <i class="lnil lnil-hospital-alt-3"></i>
                                <span>Health</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-4.html">
                                <i class="lnil lnil-books"></i>
                                <span>Writer</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-5.html">
                                <i class="lnil lnil-video-alt-1"></i>
                                <span>Video</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-6.html">
                                <i class="lnil lnil-tshirt"></i>
                                <span>Soccer</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Ecommerce <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-ecommerce-1.html">
                                <i class="lnil lnil-cart"></i>
                                <span>Ecommerce V1</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Maps <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-map-1.html">
                                <i class="lnil lnil-map"></i>
                                <span>Map View V1</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-map-2.html">
                                <i class="lnil lnil-map"></i>
                                <span>Map View V2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Apps <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-apps-1.html">
                                <i class="lnil lnil-pizza"></i>
                                <span>Food Delivery</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-apps-2.html">
                                <i class="lnil lnil-envelope"></i>
                                <span>Inbox</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-messaging-chat.html">
                                <i class="lnil lnil-bubble"></i>
                                <span>Messaging V1</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/webapp-messaging-chat.html">
                                <i class="lnil lnil-bubble"></i>
                                <span>Messaging V2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/wizard-v1.html">Wizard</a>
                </li>
                <li class="divider"></li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Charts <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-charts-apex.html">
                                <i class="lnil lnil-pie-chart-alt"></i>
                                <span>Apex Charts</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-charts-billboardjs.html">
                                <i class="lnil lnil-bar-chart"></i>
                                <span>Billboard JS</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Widgets <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-widgets-ui.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>UI Widgets</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-widgets-creative.html">
                                <i class="lnil lnil-layout-alt-2"></i>
                                <span>Creative Widgets</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-widgets-list.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>List Widgets</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-widgets-stats.html">
                                <i class="lnil lnil-layout-alt-2"></i>
                                <span>Stat Widgets</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Form Layouts <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-form-layouts-1.html">
                                <i class="lnil lnil-passport"></i>
                                <span>Form Layout V1</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-form-layouts-2.html">
                                <i class="lnil lnil-passport"></i>
                                <span>Form Layout V2</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-form-layouts-3.html">
                                <i class="lnil lnil-passport"></i>
                                <span>Form Layout V3</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-form-layouts-4.html">
                                <i class="lnil lnil-passport"></i>
                                <span>Form Layout V4</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-form-layouts-5.html">
                                <i class="lnil lnil-passport"></i>
                                <span>Form Layout V5</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Starters <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="admin-blank-page-1.html">
                                <i class="lnil lnil-layout"></i>
                                <span>Regular Sidebar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="admin-blank-page-2.html">
                                <i class="lnil lnil-layout"></i>
                                <span>Curved Sidebar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="admin-blank-page-3.html">
                                <i class="lnil lnil-layout"></i>
                                <span>Colored Sidebar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="admin-blank-page-4.html">
                                <i class="lnil lnil-layout"></i>
                                <span>Curved Colored</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="admin-blank-page-5.html">
                                <i class="lnil lnil-layout"></i>
                                <span>Sidebar Labels</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="admin-blank-page-6.html">
                                <i class="lnil lnil-layout"></i>
                                <span>Hover Labels</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="admin-blank-page-7.html">
                                <i class="lnil lnil-layout"></i>
                                <span>Floating Sidebar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-1.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Regular Navbar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-2.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Fading Navbar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-3.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Colored Navbar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-4.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Dropdown Navbar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-5.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Colored Dropdown</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-6.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Clean Navbar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-7.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Clean Centered</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-8.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Clean Transparent</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    <div class="mobile-subsidebar">
        <div class="inner">
            <div class="sidebar-title">
                <h3>Dashboards</h3>
            </div>

            <ul class="submenu" data-simplebar>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Personal <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-personal-1.html">
                                <i class="lnil lnil-analytics-alt-1"></i>
                                <span>Personal V1</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-personal-2.html">
                                <i class="lnil lnil-pie-chart"></i>
                                <span>Personal V2</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-personal-3.html">
                                <i class="lnil lnil-stats-up"></i>
                                <span>Personal V3</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Finance <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-finance-1.html">
                                <i class="lnil lnil-analytics-alt-1"></i>
                                <span>Analytics Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-finance-2.html">
                                <i class="lnil lnil-stats-up"></i>
                                <span>Stocks Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-finance-3.html">
                                <i class="lnil lnil-credit-card"></i>
                                <span>Sales Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Banking <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-banking-1.html">
                                <i class="lnil lnil-bank"></i>
                                <span>Banking V1</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-banking-2.html">
                                <i class="lnil lnil-bank"></i>
                                <span>Banking V2</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-banking-3.html">
                                <i class="lnil lnil-bank"></i>
                                <span>Banking V3</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Business <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-business-1.html">
                                <i class="lnil lnil-plane-alt"></i>
                                <span>Flights Booking</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-business-2.html">
                                <i class="lnil lnil-apartment"></i>
                                <span>Company Board</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-business-3.html">
                                <i class="lnil lnil-users-alt"></i>
                                <span>HR Board</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-business-4.html">
                                <i class="lnil lnil-graduate"></i>
                                <span>Course Board</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-business-5.html">
                                <i class="lnil lnil-briefcase"></i>
                                <span>Jobs Board</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Lifestyle <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-1.html">
                                <i class="lnil lnil-cardiology"></i>
                                <span>Influencer</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-2.html">
                                <i class="lnil lnil-cloud-sun"></i>
                                <span>Hobbies</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-3.html">
                                <i class="lnil lnil-hospital-alt-3"></i>
                                <span>Health</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-4.html">
                                <i class="lnil lnil-books"></i>
                                <span>Writer</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-5.html">
                                <i class="lnil lnil-video-alt-1"></i>
                                <span>Video</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-lifestyle-6.html">
                                <i class="lnil lnil-tshirt"></i>
                                <span>Soccer</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Ecommerce <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-ecommerce-1.html">
                                <i class="lnil lnil-cart"></i>
                                <span>Ecommerce V1</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Maps <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-map-1.html">
                                <i class="lnil lnil-map"></i>
                                <span>Map View V1</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-map-2.html">
                                <i class="lnil lnil-map"></i>
                                <span>Map View V2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Apps <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-apps-1.html">
                                <i class="lnil lnil-pizza"></i>
                                <span>Food Delivery</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-apps-2.html">
                                <i class="lnil lnil-envelope"></i>
                                <span>Inbox</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-messaging-chat.html">
                                <i class="lnil lnil-bubble"></i>
                                <span>Messaging V1</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/webapp-messaging-chat.html">
                                <i class="lnil lnil-bubble"></i>
                                <span>Messaging V2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/wizard-v1.html">Wizard</a>
                </li>
                <li class="divider"></li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Charts <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-charts-apex.html">
                                <i class="lnil lnil-pie-chart-alt"></i>
                                <span>Apex Charts</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-charts-billboardjs.html">
                                <i class="lnil lnil-bar-chart"></i>
                                <span>Billboard JS</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Widgets <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-widgets-ui.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>UI Widgets</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-widgets-creative.html">
                                <i class="lnil lnil-layout-alt-2"></i>
                                <span>Creative Widgets</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-widgets-list.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>List Widgets</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-dashboards-widgets-stats.html">
                                <i class="lnil lnil-layout-alt-2"></i>
                                <span>Stat Widgets</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Form Layouts <i
                                data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="/admin-form-layouts-1.html">
                                <i class="lnil lnil-passport"></i>
                                <span>Form Layout V1</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-form-layouts-2.html">
                                <i class="lnil lnil-passport"></i>
                                <span>Form Layout V2</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-form-layouts-3.html">
                                <i class="lnil lnil-passport"></i>
                                <span>Form Layout V3</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-form-layouts-4.html">
                                <i class="lnil lnil-passport"></i>
                                <span>Form Layout V4</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="/admin-form-layouts-5.html">
                                <i class="lnil lnil-passport"></i>
                                <span>Form Layout V5</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <div class="collapse-wrap">
                        <a href="javascript:void(0);" class="parent-link">Starters <i data-feather="chevron-right"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a class="is-submenu" href="admin-blank-page-1.html">
                                <i class="lnil lnil-layout"></i>
                                <span>Regular Sidebar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="admin-blank-page-2.html">
                                <i class="lnil lnil-layout"></i>
                                <span>Curved Sidebar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="admin-blank-page-3.html">
                                <i class="lnil lnil-layout"></i>
                                <span>Colored Sidebar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="admin-blank-page-4.html">
                                <i class="lnil lnil-layout"></i>
                                <span>Curved Colored</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-1.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Regular Navbar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-2.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Fading Navbar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-3.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Colored Navbar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-4.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Dropdown Navbar</span>
                            </a>
                        </li>
                        <li>
                            <a class="is-submenu" href="webapp-blank-page-5.html">
                                <i class="lnil lnil-layout-alt-1"></i>
                                <span>Colored Dropdown</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Content Wrapper -->
    <div class="view-wrapper" data-naver-offset="150" data-menu-item="#home-sidebar-menu" data-mobile-item="#home-sidebar-menu-mobile">

        <div class="page-content-wrapper">
            <div class="page-content is-relative">

                <div class="page-title has-text-centered">
                    <!-- Sidebar Trigger -->
                    <div class="huro-hamburger nav-trigger push-resize" data-sidebar="home-sidebar">
                            <span class="menu-toggle has-chevron">
                              <span class="icon-box-toggle">
                                  <span class="rotate">
                                      <i class="icon-line-top"></i>
                                      <i class="icon-line-center"></i>
                                      <i class="icon-line-bottom"></i>
                                  </span>
                            </span>
                            </span>
                    </div>

                    <div class="title-wrap">
                        <h1 class="title is-4">Dashboard</h1>
                    </div>

                    <div class="toolbar ml-auto">

                        <div class="toolbar-link">
                            <label class="dark-mode ml-auto">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>

                        <a class="toolbar-link right-panel-trigger" data-panel="languages-panel">
                            <img src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                        </a>

                        <div class="toolbar-notifications is-hidden-mobile">
                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                <div class="is-trigger" aria-haspopup="true">
                                    <i data-feather="bell"></i>
                                    <span class="new-indicator pulsate"></span>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <div class="heading">
                                            <div class="heading-left">
                                                <h6 class="heading-title">Notifications</h6>
                                            </div>
                                            <div class="heading-right">
                                                <a class="notification-link" href="/admin-profile-notifications.html">See all</a>
                                            </div>
                                        </div>
                                        <ul class="notification-list">
                                            <li>
                                                <a class="notification-item">
                                                    <div class="img-left">
                                                        <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" />
                                                    </div>
                                                    <div class="user-content">
                                                        <p class="user-info"><span class="name">Alice C.</span> left a comment.</p>
                                                        <p class="time">1 hour ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="notification-item">
                                                    <div class="img-left">
                                                        <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" />
                                                    </div>
                                                    <div class="user-content">
                                                        <p class="user-info"><span class="name">Joshua S.</span> uploaded a file.</p>
                                                        <p class="time">2 hours ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="notification-item">
                                                    <div class="img-left">
                                                        <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" />
                                                    </div>
                                                    <div class="user-content">
                                                        <p class="user-info"><span class="name">Tara S.</span> sent you a message.</p>
                                                        <p class="time">2 hours ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="notification-item">
                                                    <div class="img-left">
                                                        <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" />
                                                    </div>
                                                    <div class="user-content">
                                                        <p class="user-info"><span class="name">Melany W.</span> left a comment.</p>
                                                        <p class="time">3 hours ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <a class="toolbar-link right-panel-trigger" data-panel="activity-panel">
                            <i data-feather="grid"></i>
                        </a>
                    </div>
                </div>

                <div class="page-content-inner">

                    <!--Ecommerce Dashboard V1-->
                    <div class="ecommerce-dashboard ecommerce-dashboard-v1">

                        <!--Header-->
                        <div class="dashboard-header">
                            <div class="h-avatar is-large">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                            </div>
                            <div class="start">
                                <h3 class="dark-inverted">Welcome back, Erik Kovalsky</h3>
                                <p>We're very happy to see you again on your dashboard.</p>
                            </div>
                            <div class="end">
                                <button class="button h-button is-dark-outlined">View Reports</button>
                                <button class="button h-button is-primary is-elevated">Manage Shop</button>
                            </div>
                        </div>

                        <div class="columns is-multiline">

                            <!--Dashboard tile-->
                            <div class="column is-3">
                                <div class="dashboard-tile">
                                    <div class="tile-head">
                                        <h3>Total Sales</h3>
                                        <div class="h-icon is-info is-rounded">
                                            <i data-feather="gift"></i>
                                        </div>
                                    </div>
                                    <div class="dashboard-tile-inner">
                                        <div class="left">
                                            <span class="dark-inverted">641.4K</span>
                                        </div>
                                        <div class="right">
                                            <div id="spark1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Dashboard tile-->
                            <div class="column is-3">
                                <div class="dashboard-tile">
                                    <div class="tile-head">
                                        <h3>Total Income</h3>
                                        <div class="h-icon is-purple is-rounded">
                                            <i data-feather="dollar-sign"></i>
                                        </div>
                                    </div>
                                    <div class="dashboard-tile-inner">
                                        <div class="left">
                                            <span class="dark-inverted">$389.9K</span>
                                        </div>
                                        <div class="right">
                                            <div id="spark2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Dashboard tile-->
                            <div class="column is-3">
                                <div class="dashboard-tile">
                                    <div class="tile-head">
                                        <h3>New Orders</h3>
                                        <div class="h-icon is-green is-rounded">
                                            <i data-feather="box"></i>
                                        </div>
                                    </div>
                                    <div class="dashboard-tile-inner">
                                        <div class="left">
                                            <span class="dark-inverted">371</span>
                                        </div>
                                        <div class="right">
                                            <div id="spark3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Dashboard tile-->
                            <div class="column is-3">
                                <div class="dashboard-tile">
                                    <div class="tile-head">
                                        <h3>Abandonned</h3>
                                        <div class="h-icon is-orange is-rounded">
                                            <i data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="dashboard-tile-inner">
                                        <div class="left">
                                            <span class="dark-inverted">29</span>
                                        </div>
                                        <div class="right">
                                            <div id="spark4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Line Stats Widget-->
                            <div class="column is-6">
                                <div class="stat-widget line-stats-widget is-straight">
                                    <div class="widget-head">
                                        <h3 class="dark-inverted">Revenue</h3>
                                        <!--Dropdown-->
                                        <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                            <div class="is-trigger" aria-haspopup="true">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-reload"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Reload</span>
                                                            <span>Reload chart</span>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-users-alt"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Customers</span>
                                                            <span>View customer reports</span>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-gift-alt-1"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Products</span>
                                                            <span>View product reports</span>
                                                        </div>
                                                    </a>
                                                    <hr class="dropdown-divider">
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-bank"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Finance</span>
                                                            <span>View financial reports</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line-stats">
                                        <div class="line-stat">
                                            <span>This Month</span>
                                            <span class="current">$75,648.43</span>
                                        </div>
                                        <div class="line-stat">
                                            <span>Last Month</span>
                                            <span class="dark-inverted">$91,512.18</span>
                                        </div>
                                    </div>
                                    <div id="line-stats-widget-chart"></div>
                                </div>
                            </div>

                            <!--Line Stats Widget-->
                            <div class="column is-6">
                                <div class="stat-widget area-stats-widget is-straight">
                                    <div class="widget-head">
                                        <h3 class="dark-inverted">Customers</h3>
                                        <!--Dropdown-->
                                        <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                            <div class="is-trigger" aria-haspopup="true">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-reload"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Reload</span>
                                                            <span>Reload chart</span>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-users-alt"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Customers</span>
                                                            <span>View customer reports</span>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-gift-alt-1"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Products</span>
                                                            <span>View product reports</span>
                                                        </div>
                                                    </a>
                                                    <hr class="dropdown-divider">
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-bank"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Finance</span>
                                                            <span>View financial reports</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="area-stats">
                                        <div class="area-stat">
                                            <span>New Customers</span>
                                            <span class="current">249</span>
                                        </div>
                                        <div class="area-stat">
                                            <span>Returning</span>
                                            <span class="dark-inverted">684</span>
                                        </div>
                                    </div>
                                    <div id="area-stats-widget-chart"></div>
                                </div>
                            </div>

                            <!--Flex Stat Widget-->
                            <div class="column is-6">
                                <div class="stat-widget flex-stat-widget is-straight">
                                    <div class="chart-media">
                                        <div class="meta">
                                            <h4 class="dark-inverted">Product Returns</h4>
                                            <span class="is-dark-primary">Avg. 642</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bonum integritas
                                                corporis: misera debilitas. Ita ne hoc quidem modo paria.</p>
                                        </div>
                                        <div class="chart-container">
                                            <div id="flex-stat-circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Flex Stat Widget-->
                            <div class="column is-6">
                                <div class="stat-widget flex-stat-widget is-straight has-fullheight">
                                    <div class="chart-media">
                                        <div class="meta">
                                            <h4 class="dark-inverted">Customer Engagement</h4>
                                            <span class="is-dark-primary">+34.2%</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bonum integritas
                                                corporis: misera debilitas. Ita ne hoc quidem modo paria.</p>
                                        </div>
                                        <div class="chart-container">
                                            <div id="flex-stat-radial"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Grouped Stat Widget-->
                            <div class="column is-6">
                                <div class="stat-widget grouped-stat-widget is-straight">
                                    <div class="widget-head">
                                        <h3 class="dark-inverted">Shipping Stats</h3>
                                    </div>
                                    <div class="chart-group">
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container">
                                                    <div id="widget-group-radial-1"></div>
                                                </div>
                                                <span class="dark-inverted">36.8K</span>
                                                <p>Free Shipping</p>
                                            </div>
                                        </div>
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container">
                                                    <div id="widget-group-radial-2"></div>
                                                </div>
                                                <span class="dark-inverted">292.3K</span>
                                                <p>Ground Shipping</p>
                                            </div>
                                        </div>
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container">
                                                    <div id="widget-group-radial-3"></div>
                                                </div>
                                                <span class="dark-inverted">108.2K</span>
                                                <p>Next Day Air</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Grouped Stat Widget-->
                            <div class="column is-6">
                                <div class="stat-widget grouped-stat-widget is-straight">
                                    <div class="widget-head">
                                        <h3 class="dark-inverted">Customer Support</h3>
                                    </div>
                                    <div class="chart-group">
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container is-gauge">
                                                    <div id="widget-group-radial-4"></div>
                                                </div>
                                                <span class="dark-inverted">641</span>
                                                <p>Active Tickets</p>
                                            </div>
                                        </div>
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container is-gauge">
                                                    <div id="widget-group-radial-5"></div>
                                                </div>
                                                <span class="dark-inverted">84</span>
                                                <p>Escalated</p>
                                            </div>
                                        </div>
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container is-gauge">
                                                    <div id="widget-group-radial-6"></div>
                                                </div>
                                                <span class="dark-inverted">1,749</span>
                                                <p>Closed Tickets</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Table-->
                            <div class="column is-12">

                                <!--Header-->
                                <div class="table-header">
                                    <h3 class="dark-inverted">Recent Orders</h3>
                                    <div class="field">
                                        <div class="control">
                                            <div class="h-select">
                                                <div class="select-box">
                                                    <span>Last 30 days</span>
                                                </div>
                                                <div class="select-icon">
                                                    <i data-feather="chevron-down"></i>
                                                </div>
                                                <div class="select-drop has-slimscroll-sm">
                                                    <div class="drop-inner">
                                                        <div class="option-row">
                                                            <input type="radio" name="instagram_period_select">
                                                            <div class="option-meta">
                                                                <span>Last Week</span>
                                                            </div>
                                                        </div>
                                                        <div class="option-row">
                                                            <input type="radio" name="instagram_period_select">
                                                            <div class="option-meta">
                                                                <span>Last 30 days</span>
                                                            </div>
                                                        </div>
                                                        <div class="option-row">
                                                            <input type="radio" name="instagram_period_select">
                                                            <div class="option-meta">
                                                                <span>Last 60 days</span>
                                                            </div>
                                                        </div>
                                                        <div class="option-row">
                                                            <input type="radio" name="instagram_period_select">
                                                            <div class="option-meta">
                                                                <span>Last 90 days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-table">

                                    <!--Table header-->
                                    <div class="flex-table-header">
                                        <span class="is-grow">Customer</span>
                                        <span>Date</span>
                                        <span>Amount</span>
                                        <span>Status</span>
                                        <span>Tracking</span>
                                        <span class="cell-end">Actions</span>
                                    </div>

                                    <!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-media is-grow" data-th="">
                                            <div class="h-avatar is-medium">
                                                <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                            </div>
                                            <div>
                                                <span class="item-name dark-inverted is-font-alt is-weight-600">Erik K.</span>
                                                <span class="item-meta">
                                                      <span>#158456</span>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex-table-cell" data-th="Date">
                                            <span class="light-text">Oct 31, 2020</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Amount">
                                            <span class="dark-inverted is-weight-600">$863.42</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Status">
                                            <span class="tag is-green is-rounded">Paid</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Tracking">
                                            <a class="action-link is-pushed-mobile">TR-7295</a>
                                        </div>
                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                            <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                        </div>
                                    </div>

                                    <!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-media is-grow" data-th="">
                                            <div class="h-avatar is-medium">
                                                <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/22.jpg" alt="">
                                            </div>
                                            <div>
                                                <span class="item-name dark-inverted is-font-alt is-weight-600">Jimmy H.</span>
                                                <span class="item-meta">
                                                      <span>#15893</span>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex-table-cell" data-th="Date">
                                            <span class="light-text">Oct 31, 2020</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Amount">
                                            <span class="dark-inverted is-weight-600">$128.00</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Status">
                                            <span class="tag is-green is-rounded">Paid</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Tracking">
                                            <a class="action-link is-pushed-mobile">TR-6259</a>
                                        </div>
                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                            <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                        </div>
                                    </div>

                                    <!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-media is-grow" data-th="">
                                            <div class="h-avatar is-medium">
                                                <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                            </div>
                                            <div>
                                                <span class="item-name dark-inverted is-font-alt is-weight-600">Melany W.</span>
                                                <span class="item-meta">
                                                      <span>#155848</span>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex-table-cell" data-th="Date">
                                            <span class="light-text">Oct 31, 2020</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Amount">
                                            <span class="dark-inverted is-weight-600">$236.79</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Status">
                                            <span class="tag is-orange is-rounded">Pending</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Tracking">
                                            <span class="light-text is-pushed-mobile">N/A</span>
                                        </div>
                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                            <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                        </div>
                                    </div>

                                    <!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-media is-grow" data-th="">
                                            <div class="h-avatar is-medium">
                                                <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                                            </div>
                                            <div>
                                                <span class="item-name dark-inverted is-font-alt is-weight-600">Joshua S.</span>
                                                <span class="item-meta">
                                                      <span>#154736</span>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex-table-cell" data-th="Date">
                                            <span class="light-text">Oct 30, 2020</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Amount">
                                            <span class="dark-inverted is-weight-600">$98.31</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Status">
                                            <span class="tag is-green is-rounded">Paid</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Tracking">
                                            <a class="action-link is-pushed-mobile">TR-48951</a>
                                        </div>
                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                            <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                        </div>
                                    </div>

                                    <!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-media is-grow" data-th="">
                                            <div class="h-avatar is-medium">
                                                <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                            </div>
                                            <div>
                                                <span class="item-name dark-inverted is-font-alt is-weight-600">Tina C.</span>
                                                <span class="item-meta">
                                                      <span>#158315</span>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex-table-cell" data-th="Date">
                                            <span class="light-text">Oct 30, 2020</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Amount">
                                            <span class="dark-inverted is-weight-500">$112.00</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Status">
                                            <span class="tag is-green is-rounded">Paid</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Tracking">
                                            <a class="action-link is-pushed-mobile">TR-48555</a>
                                        </div>
                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                            <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
