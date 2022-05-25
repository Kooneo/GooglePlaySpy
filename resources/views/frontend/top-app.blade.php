<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Huro :: Banking Dashboard</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!--Core CSS -->
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/main2.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet" />


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <!--Mapbox styles-->
{{--    @livewireStyles--}}
</head>

<body>
<div id="huro-app" class="app-wrapper">
    <div class="app-overlay"></div>

    <!--Full pageloader-->
    <!-- Pageloader -->
    <div class="pageloader is-full"></div>
    <div class="infraloader is-full is-active"></div>
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
    <!--Webapp navbar regular-->
    <div class="webapp-navbar">
        <div class="webapp-navbar-inner">
            <div class="left">
                <a href="/" class="brand">
                    <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="" />
                    <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="" />
                </a>
                <div class="separator"></div>
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
                <h1 id="webapp-page-title" class="title is-5">Welcome</h1>
            </div>
            <div class="center">
                <div id="webapp-navbar-menu" class="centered-links">
                    <a id="dashboards-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="dashboards-webapp-menu">
                        <i data-feather="activity"></i>
                        <span>Dashboards</span>
                    </a>
                    <a id="layouts-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="layouts-webapp-menu">
                        <i data-feather="grid"></i>
                        <span>Layouts</span>
                    </a>
                    <a id="elements-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="elements-webapp-menu">
                        <i data-feather="box"></i>
                        <span>Elements</span>
                    </a>
                    <a id="components-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="components-webapp-menu">
                        <i data-feather="cpu"></i>
                        <span>Components</span>
                    </a>
                    <a href="/webapp-messaging-chat.html" class="centered-link">
                        <i data-feather="message-circle"></i>
                        <span>Chat</span>
                    </a>
                    <a class="centered-link centered-link-search">
                        <i data-feather="search"></i>
                        <span>Search</span>
                    </a>
                </div>
                <div id="webapp-navbar-search" class="centered-search is-hidden">
                    <div class="field">
                        <div class="control has-icon">
                            <input type="text" class="input is-rounded search-input" placeholder="Search records...">
                            <div class="form-icon">
                                <i data-feather="search"></i>
                            </div>
                            <div id="webapp-navbar-search-close" class="form-icon is-right">
                                <i data-feather="x"></i>
                            </div>
                            <div class="search-results has-slimscroll"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
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
                <div class="dropdown profile-dropdown dropdown-trigger is-spaced is-right">
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
            </div>
        </div>
    </div>

    <div class="webapp-subnavbar">

        <!--src/partials/navbar/webapp/menus/-->
        <div id="dashboards-webapp-menu" class="webapp-subnavbar-inner tabs-wrapper">
            <div class="tabs-inner">
                <div class="tabs is-centered is-3">
                    <ul>
                        <li data-tab="dashboard-pages-tab" class="is-active"><a>Dashboards</a></li>
                        <li data-tab="templates-pages-tab"><a>Templates</a></li>
                    </ul>
                </div>
            </div>


            <div class="container">
                <div id="dashboard-pages-tab" class="tab-content is-active">
                    <div class="tab-content-inner">
                        <div class="center has-slimscroll">
                            <div class="columns">
                                <div class="column is-3">
                                    <h4 class="column-heading">Personal</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-dashboards-personal-1.html">
                                                <i class="lnil lnil-analytics-alt-1"></i>
                                                <span>Personal V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-personal-2.html">
                                                <i class="lnil lnil-pie-chart"></i>
                                                <span>Personal V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-personal-3.html">
                                                <i class="lnil lnil-stats-up"></i>
                                                <span>Personal V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-lifestyle-1.html">
                                                <i class="lnil lnil-cardiology"></i>
                                                <span>Influencer</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-lifestyle-2.html">
                                                <i class="lnil lnil-cloud-sun"></i>
                                                <span>Hobbies</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-lifestyle-3.html">
                                                <i class="lnil lnil-hospital-alt-3"></i>
                                                <span>Health</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-lifestyle-4.html">
                                                <i class="lnil lnil-books"></i>
                                                <span>Writer</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-lifestyle-5.html">
                                                <i class="lnil lnil-video-alt-1"></i>
                                                <span>Video</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-lifestyle-6.html">
                                                <i class="lnil lnil-tshirt"></i>
                                                <span>Soccer</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Finance</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-dashboards-finance-1.html">
                                                <i class="lnil lnil-analytics-alt-1"></i>
                                                <span>Analytics</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-finance-2.html">
                                                <i class="lnil lnil-stats-up"></i>
                                                <span>Stocks</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-finance-3.html">
                                                <i class="lnil lnil-credit-card"></i>
                                                <span>Sales</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-banking-1.html">
                                                <i class="lnil lnil-bank"></i>
                                                <span>Banking V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-banking-2.html">
                                                <i class="lnil lnil-bank"></i>
                                                <span>Banking V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-banking-3.html">
                                                <i class="lnil lnil-bank"></i>
                                                <span>Banking V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Business</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-dashboards-business-1.html">
                                                <i class="lnil lnil-plane-alt"></i>
                                                <span>Flights Booking</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-business-2.html">
                                                <i class="lnil lnil-apartment"></i>
                                                <span>Company Board</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-business-3.html">
                                                <i class="lnil lnil-users-alt"></i>
                                                <span>HR Board</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-business-4.html">
                                                <i class="lnil lnil-graduate"></i>
                                                <span>Course Board</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-ecommerce-1.html">
                                                <i class="lnil lnil-cart"></i>
                                                <span>Ecommerce V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-map-1.html">
                                                <i class="lnil lnil-map"></i>
                                                <span>Map V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-map-2.html">
                                                <i class="lnil lnil-map"></i>
                                                <span>Map V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-business-5.html">
                                                <i class="lnil lnil-briefcase"></i>
                                                <span>Jobs</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Apps</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-dashboards-apps-1.html">
                                                <i class="lnil lnil-pizza"></i>
                                                <span>Food Delivery</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-apps-2.html">
                                                <i class="lnil lnil-envelope"></i>
                                                <span>Inbox</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/admin-messaging-chat.html">
                                                <i class="lnil lnil-bubble"></i>
                                                <span>Messaging V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-messaging-chat.html">
                                                <i class="lnil lnil-bubble"></i>
                                                <span>Messaging V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="templates-pages-tab" class="tab-content">
                    <div class="tab-content-inner">
                        <div class="center has-slimscroll">
                            <div class="columns">
                                <div class="column is-3">
                                    <h4 class="column-heading">Sidebars</h4>
                                    <ul>
                                        <li>
                                            <a href="admin-blank-page-1.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Regular Sidebar</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin-blank-page-2.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Curved Sidebar</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin-blank-page-3.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Colored Sidebar</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin-blank-page-4.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Curved Colored</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin-blank-page-5.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Sidebar Labels</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin-blank-page-6.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Hover Labels</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin-blank-page-7.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Floating Sidebar</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Navbars</h4>
                                    <ul>
                                        <li>
                                            <a href="webapp-blank-page-1.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Regular Navbar</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="webapp-blank-page-2.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Fading Navbar</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="webapp-blank-page-3.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Colored Navbar</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="webapp-blank-page-4.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Drop Navbar</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="webapp-blank-page-5.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Colored Drop</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="webapp-blank-page-6.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Clean Navbar</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="webapp-blank-page-7.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Clean Centered</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="webapp-blank-page-8.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Clean Trans.</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Widgets</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-dashboards-charts-apex.html">
                                                <i class="lnil lnil-pie-chart-alt"></i>
                                                <span>Apex Charts</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-charts-billboardjs.html">
                                                <i class="lnil lnil-bar-chart"></i>
                                                <span>Billboard JS</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-widgets-ui.html">
                                                <i class="lnil lnil-layout-alt-1"></i>
                                                <span>UI Widgets</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-widgets-creative.html">
                                                <i class="lnil lnil-layout-alt-2"></i>
                                                <span>Creative Widgets</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-widgets-list.html">
                                                <i class="lnil lnil-layout-alt-1"></i>
                                                <span>List Widgets</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-dashboards-widgets-stats.html">
                                                <i class="lnil lnil-layout-alt-1"></i>
                                                <span>Stat Widgets</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Wizard</h4>
                                    <ul>
                                        <li>
                                            <a href="/wizard-v1.html">
                                                <span>Wizard V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="/webapp-form-layouts-1.html">
                                                <span>Form V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="/webapp-form-layouts-2.html">
                                                <span>Form V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="/webapp-form-layouts-3.html">
                                                <span>Form V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="/webapp-form-layouts-4.html">
                                                <span>Form V4</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="/webapp-form-layouts-5.html">
                                                <span>Form V5</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--src/partials/navbar/webapp/menus/-->
        <div id="layouts-webapp-menu" class="webapp-subnavbar-inner tabs-wrapper is-active">
            <div class="tabs-inner">
                <div class="tabs is-centered is-4">
                    <ul>
                        <li data-tab="list-pages-tab" class="is-active"><a>List Views</a></li>
                        <li data-tab="grid-pages-tab"><a>Grid Views</a></li>
                        <li data-tab="app-pages-tab"><a>Pages</a></li>
                        <li data-tab="utility-pages-tab"><a>Utility</a></li>
                    </ul>
                </div>
            </div>


            <div class="container">
                <div id="list-pages-tab" class="tab-content is-active">
                    <div class="tab-content-inner">
                        <div class="center has-slimscroll">
                            <div class="columns">
                                <div class="column is-3">
                                    <h4 class="column-heading">Lists</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-list-view-1.html">
                                                <i class="lnil lnil-list-alt"></i>
                                                <span>List View V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-list-view-2.html">
                                                <i class="lnil lnil-list-alt"></i>
                                                <span>List View V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-list-view-3.html">
                                                <i class="lnil lnil-list-alt"></i>
                                                <span>List View V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-list-view-4.html">
                                                <i class="lnil lnil-list-alt"></i>
                                                <span>List View V4</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Flex Lists</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-list-flex-1.html">
                                                <i class="lnil lnil-list-alt-1"></i>
                                                <span>Flex List V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-list-flex-2.html">
                                                <i class="lnil lnil-list-alt-1"></i>
                                                <span>Flex List V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-list-flex-3.html">
                                                <i class="lnil lnil-list-alt-1"></i>
                                                <span>Flex List V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Datatables</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-list-datatable-1.html">
                                                <i class="lnil lnil-layout-alt"></i>
                                                <span>Datatable V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-list-datatable-2.html">
                                                <i class="lnil lnil-layout-alt"></i>
                                                <span>Datatable V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-list-datatable-3.html">
                                                <i class="lnil lnil-layout-alt"></i>
                                                <span>Datatable V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-list-datatable-4.html">
                                                <i class="lnil lnil-layout-alt"></i>
                                                <span>Datatable V4</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <a href="https://cssninja.io" class="column-placeholder">
                                        <img class="light-image" src="assets/img/icons/misc/buoy.svg" alt="">
                                        <img class="dark-image" src="assets/img/icons/misc/buoy-dark.svg" alt="">
                                        <h3>Support</h3>
                                    </a>
                                    <a href="https://docs.huro.cssninja.io" class="column-placeholder">
                                        <img class="light-image" src="assets/img/icons/misc/docs.svg" alt="">
                                        <img class="dark-image" src="assets/img/icons/misc/docs-dark.svg" alt="">
                                        <h3>Documentation</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="grid-pages-tab" class="tab-content">
                    <div class="tab-content-inner">
                        <div class="center has-slimscroll">
                            <div class="columns">
                                <div class="column is-3">
                                    <h4 class="column-heading">Cards</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-grid-cards-1.html">
                                                <i class="lnil lnil-grid-alt"></i>
                                                <span>Card Grid V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-grid-cards-2.html">
                                                <i class="lnil lnil-grid-alt"></i>
                                                <span>Card Grid V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-grid-cards-3.html">
                                                <i class="lnil lnil-grid-alt"></i>
                                                <span>Card Grid V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-grid-cards-4.html">
                                                <i class="lnil lnil-grid-alt"></i>
                                                <span>Card Grid V4</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Tiles</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-grid-tiles-1.html">
                                                <i class="lnil lnil-layout-alt-2"></i>
                                                <span>Tile Grid V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-grid-tiles-2.html">
                                                <i class="lnil lnil-layout-alt-2"></i>
                                                <span>Tile Grid V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-grid-tiles-3.html">
                                                <i class="lnil lnil-layout-alt-2"></i>
                                                <span>Tile Grid V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Users</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-grid-users-1.html">
                                                <i class="lnil lnil-users-alt"></i>
                                                <span>User Grid V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-grid-users-2.html">
                                                <i class="lnil lnil-users-alt"></i>
                                                <span>User Grid V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-grid-users-3.html">
                                                <i class="lnil lnil-users-alt"></i>
                                                <span>User Grid V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-grid-users-4.html">
                                                <i class="lnil lnil-users-alt"></i>
                                                <span>User Grid V4</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <a href="https://cssninja.io" class="column-placeholder">
                                        <img class="light-image" src="assets/img/icons/misc/buoy.svg" alt="">
                                        <img class="dark-image" src="assets/img/icons/misc/buoy-dark.svg" alt="">
                                        <h3>Support</h3>
                                    </a>
                                    <a href="https://docs.huro.cssninja.io" class="column-placeholder">
                                        <img class="light-image" src="assets/img/icons/misc/docs.svg" alt="">
                                        <img class="dark-image" src="assets/img/icons/misc/docs-dark.svg" alt="">
                                        <h3>Documentation</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="app-pages-tab" class="tab-content">
                    <div class="tab-content-inner">
                        <div class="center has-slimscroll">
                            <div class="columns">
                                <div class="column is-3">
                                    <h4 class="column-heading">Personal</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-profile-view.html">
                                                <i class="lnil lnil-user-alt"></i>
                                                <span>Profile</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-profile-edit-1.html">
                                                <i class="lnil lnil-pencil"></i>
                                                <span>Edit Profile</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-profile-notifications.html">
                                                <i class="lnil lnil-notification"></i>
                                                <span>Notifications</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-profile-settings.html">
                                                <i class="lnil lnil-cog"></i>
                                                <span>Settings</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Pages</h4>
                                    <ul>
                                        <li>
                                            <a href="/auth-login-1.html">
                                                <i class="lnil lnil-pointer-right"></i>
                                                <span>Login v1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/auth-login-2.html">
                                                <i class="lnil lnil-pointer-right"></i>
                                                <span>Login v2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/auth-login-3.html">
                                                <i class="lnil lnil-pointer-right"></i>
                                                <span>Login v3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/auth-signup-2.html">
                                                <i class="lnil lnil-crown"></i>
                                                <span>Signup v1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/auth-signup-3.html">
                                                <i class="lnil lnil-crown"></i>
                                                <span>Signup v2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/auth-signup-1.html">
                                                <i class="lnil lnil-crown"></i>
                                                <span>Signup Flow</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Subpages</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-saas-billing.html">
                                                <i class="lnil lnil-credit-card"></i>
                                                <span>Saas Billing</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-welcome.html">
                                                <i class="lnil lnil-door-alt"></i>
                                                <span>Welcome</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-action-page-1.html">
                                                <i class="lnil lnil-thunderbolt"></i>
                                                <span>Action Page V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-action-page-2.html">
                                                <i class="lnil lnil-thunderbolt"></i>
                                                <span>Action Page V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-search-results.html">
                                                <i class="lnil lnil-search-alt"></i>
                                                <span>Search Results</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-search-empty.html">
                                                <i class="lnil lnil-search-alt"></i>
                                                <span>Empty Search</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Projects</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-projects-projects.html">
                                                <i class="lnil lnil-grid-alt"></i>
                                                <span>Projects V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-projects-projects-2.html">
                                                <i class="lnil lnil-grid-alt"></i>
                                                <span>Projects V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-projects-projects-3.html">
                                                <i class="lnil lnil-grid-alt"></i>
                                                <span>Projects V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-projects-project.html">
                                                <i class="lnil lnil-layout"></i>
                                                <span>Project Details</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-kanban-board.html">
                                                <i class="lnil lnil-layout-alt-1"></i>
                                                <span>Project Board</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="utility-pages-tab" class="tab-content">
                    <div class="tab-content-inner">
                        <div class="center has-slimscroll">
                            <div class="columns">
                                <div class="column is-3">
                                    <h4 class="column-heading">Utility</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-utility-account-confirm.html">
                                                <i class="lnil lnil-thunderbolt"></i>
                                                <span>Confirm Account</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-utility-promotion.html">
                                                <i class="lnil lnil-magnet"></i>
                                                <span>Promotion Page</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-utility-invoice.html">
                                                <i class="lnil lnil-calculator-alt"></i>
                                                <span>Invoice</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/admin-utility-status.html">
                                                <i class="lnil lnil-checkmark-circle"></i>
                                                <span>App Status</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Onboarding</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-onboarding-page-1.html">
                                                <i class="lnil lnil-train"></i>
                                                <span>Onboarding V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-onboarding-page-2.html">
                                                <i class="lnil lnil-train-alt"></i>
                                                <span>Onboarding V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-onboarding-page-3.html">
                                                <i class="lnil lnil-car"></i>
                                                <span>Onboarding V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-onboarding-page-4.html">
                                                <i class="lnil lnil-car-alt"></i>
                                                <span>Onboarding V4</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-onboarding-page-5.html">
                                                <i class="lnil lnil-train-alt"></i>
                                                <span>Onboarding V5</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Error</h4>
                                    <ul>
                                        <li>
                                            <a href="/error-page-1.html">
                                                <i class="lnil lnil-cross-circle"></i>
                                                <span>Error Page V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/error-page-2.html">
                                                <i class="lnil lnil-cross-circle"></i>
                                                <span>Error Page V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/error-page-3.html">
                                                <i class="lnil lnil-cross-circle"></i>
                                                <span>Error Page V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/error-page-4.html">
                                                <i class="lnil lnil-cross-circle"></i>
                                                <span>Error Page V4</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/error-page-5.html">
                                                <i class="lnil lnil-cross-circle"></i>
                                                <span>Error Page V5</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Placeload</h4>
                                    <ul>
                                        <li>
                                            <a href="/webapp-placeload-1.html">
                                                <i class="lnil lnil-reload"></i>
                                                <span>Placeload V1</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-placeload-2.html">
                                                <i class="lnil lnil-reload"></i>
                                                <span>Placeload V2</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-placeload-3.html">
                                                <i class="lnil lnil-reload"></i>
                                                <span>Placeload V3</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/webapp-placeload-4.html">
                                                <i class="lnil lnil-reload"></i>
                                                <span>Placeload V4</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--src/partials/navbar/webapp/menus/-->
        <div id="elements-webapp-menu" class="webapp-subnavbar-inner tabs-wrapper">
            <div class="tabs-inner">
                <div class="tabs is-centered is-2">
                    <ul>
                        <li data-tab="elements-basic-pages-tab" class="is-active"><a>Basic UI</a></li>
                        <li data-tab="elements-forms-pages-tab"><a>Form Controls</a></li>
                    </ul>
                </div>
            </div>


            <div class="container">
                <div id="elements-basic-pages-tab" class="tab-content is-active">
                    <div class="tab-content-inner">
                        <div class="center has-slimscroll">
                            <div class="columns">
                                <div class="column is-3">
                                    <h4 class="column-heading">General</h4>
                                    <ul>
                                        <li>
                                            <a href="/elements-hub.html">
                                                <i class="lnil lnil-home"></i>
                                                <span>Elements Hub</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-colors.html">
                                                <i class="lnil lnil-color-palette"></i>
                                                <span>Colors</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-helpers.html">
                                                <i class="lnil lnil-help"></i>
                                                <span>Helpers</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Icons</h4>
                                    <ul>
                                        <li>
                                            <a href="/elements-icons-lnil.html">
                                                <span>Line Icons Light</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-icons-lnir.html">
                                                <span>Line Icons Regular</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-icons-fa.html">
                                                <span>Font Awesome 5</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-icons-feather.html">
                                                <span>Feather Icons</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Base</h4>
                                    <ul>
                                        <li>
                                            <a href="/elements-buttons.html">
                                                <span>Buttons</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-blocks.html">
                                                <span>Blocks</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-content.html">
                                                <span>Content</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-tags.html">
                                                <span>Tags</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Advanced</h4>
                                    <ul>
                                        <li>
                                            <a href="/elements-cards-basic.html">
                                                <span>Basic Cards</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-cards-advanced.html">
                                                <span>Advanced Cards</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-cards-bulma.html">
                                                <span>Bulma Cards</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-table.html">
                                                <span>Table</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-tooltips.html">
                                                <span>Tooltips</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="elements-forms-pages-tab" class="tab-content">
                    <div class="tab-content-inner">
                        <div class="center has-slimscroll">
                            <div class="columns">
                                <div class="column is-3">
                                    <h4 class="column-heading">Input</h4>
                                    <ul>
                                        <li>
                                            <a href="/elements-forms-inputs.html">
                                                <span>Inputs</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-forms-addons.html">
                                                <span>Input Addons</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-forms-textarea.html">
                                                <span>Textarea</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Selects</h4>
                                    <ul>
                                        <li>
                                            <a href="/elements-forms-selects.html">
                                                <span>Regular</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-forms-custom.html">
                                                <span>Custom</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-forms-file.html">
                                                <span>File Input</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Toggles</h4>
                                    <ul>
                                        <li>
                                            <a href="/elements-forms-checkboxes.html">
                                                <span>Checkboxes</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-forms-radios.html">
                                                <span>Radio Buttons</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/elements-forms-switch.html">
                                                <span>Switches</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <a href="https://cssninja.io" class="column-placeholder">
                                        <img class="light-image" src="assets/img/icons/misc/buoy.svg" alt="">
                                        <img class="dark-image" src="assets/img/icons/misc/buoy-dark.svg" alt="">
                                        <h3>Support</h3>
                                    </a>
                                    <a href="https://docs.huro.cssninja.io" class="column-placeholder">
                                        <img class="light-image" src="assets/img/icons/misc/docs.svg" alt="">
                                        <img class="dark-image" src="assets/img/icons/misc/docs-dark.svg" alt="">
                                        <h3>Documentation</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--src/partials/navbar/webapp/menus/-->
        <div id="components-webapp-menu" class="webapp-subnavbar-inner tabs-wrapper">
            <div class="tabs-inner">
                <div class="tabs is-centered is-2">
                    <ul>
                        <li data-tab="components-basic-pages-tab" class="is-active"><a>UI Components</a></li>
                        <li data-tab="components-plugins-pages-tab"><a>JS Plugins</a></li>
                    </ul>
                </div>
            </div>


            <div class="container">
                <div id="components-basic-pages-tab" class="tab-content is-active">
                    <div class="tab-content-inner">
                        <div class="center has-slimscroll">
                            <div class="columns">
                                <div class="column is-3">
                                    <h4 class="column-heading">General</h4>
                                    <ul>
                                        <li>
                                            <a href="/components-avatars.html">
                                                <span>Avatars</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-accordion-basic.html">
                                                <span>Accordion</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-accordion-collapse.html">
                                                <span>Collapse</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-calendar.html">
                                                <span>Calendar</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-accordion-images.html">
                                                <span>Image Accordion</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-breadcrumb.html">
                                                <span>Breadcrumb</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Interaction</h4>
                                    <ul>
                                        <li>
                                            <a href="/components-loader.html">
                                                <span>Loader</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-dropdown.html">
                                                <span>Dropdown</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-modal.html">
                                                <span>Modal Dialogs</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-tabs-regular.html">
                                                <span>Regular Tabs</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-tabs-slider.html">
                                                <span>Slider Tabs</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Presentation</h4>
                                    <ul>
                                        <li>
                                            <a href="/components-icon-box.html">
                                                <span>Icon Box</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-messages.html">
                                                <span>Message</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-progress.html">
                                                <span>Progress</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-snacks.html">
                                                <span>Snacks</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h4 class="column-heading">Flex Table</h4>
                                    <ul>

                                        <li>
                                            <a href="/components-table-flex.html">
                                                <span>Base Table</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-table-flex-compact.html">
                                                <span>Compact Table</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-table-flex-media.html">
                                                <span>Media Table</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-table-flex-advanced.html">
                                                <span>Advanced Table</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="components-plugins-pages-tab" class="tab-content">
                    <div class="tab-content-inner">
                        <div class="center has-slimscroll">
                            <div class="columns">
                                <div class="column is-3">
                                    <ul>
                                        <li>
                                            <a href="/components-plugins-alertify.html">
                                                <span>Alertify</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-plugins-autocomplete.html">
                                                <span>Autocomplete</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-plugins-datepicker.html">
                                                <span>Datepicker</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-plugins-choices.html">
                                                <span>Choices JS</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <ul>
                                        <li>
                                            <a href="/components-plugins-filepond.html">
                                                <span>Filepond</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-plugins-lightgallery.html">
                                                <span>Light Gallery</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-plugins-videogallery.html">
                                                <span>Video Gallery</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-plugins-video-player.html">
                                                <span>Video Player</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <ul>
                                        <li>
                                            <a href="/components-plugins-toasts.html">
                                                <span>Toast Messages</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-plugins-webuipopover.html">
                                                <span>WebUI Popovers</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-plugins-nouislider.html">
                                                <span>NoUI Slider</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-plugins-editor-summernote.html">
                                                <span>Summernote</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/components-plugins-editor-sun.html">
                                                <span>Sun Editor</span>
                                                <i data-feather="circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <a href="https://cssninja.io" class="column-placeholder">
                                        <img class="light-image" src="assets/img/icons/misc/buoy.svg" alt="">
                                        <img class="dark-image" src="assets/img/icons/misc/buoy-dark.svg" alt="">
                                        <h3>Support</h3>
                                    </a>
                                    <a href="https://docs.huro.cssninja.io" class="column-placeholder">
                                        <img class="light-image" src="assets/img/icons/misc/docs.svg" alt="">
                                        <img class="dark-image" src="assets/img/icons/misc/docs-dark.svg" alt="">
                                        <h3>Documentation</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
    <!--Page body-->

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
    <div class="view-wrapper is-webapp" data-page-title="Dashboard" data-naver-offset="150" data-menu-item="#dashboards-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">

        <div class="page-content-wrapper ">
            <div class="page-content is-relative">

                <div class="page-title has-text-centered is-webapp">

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

                <div class="page-content-inner is-full">
                    <div class="card-grid-toolbar">
                        <div class="control has-icon">
                            <input class="input custom-text-filter" placeholder="Search..." data-filter-target=".column">
                            <div class="form-icon">
                                <i data-feather="search"></i>
                            </div>
                        </div>

                        <div class="buttons">
                            <div class="field h-hidden-mobile">
                                <div class="control">
                                    <div class="h-select">
                                        <div class="select-box">
                                            <span>Filter</span>
                                        </div>
                                        <div class="select-icon">
                                            <i data-feather="chevron-down"></i>
                                        </div>
                                        <div class="select-drop has-slimscroll-sm">
                                            <div class="drop-inner">
                                                @foreach($categories as $key => $category)
                                                    <div class="option-row">
                                                        <input type="radio" name="grid_filter">
                                                        <div class="option-meta">
                                                            <span>{{ $category }}</span>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                <div class="option-row">
                                                    <input type="radio" name="grid_filter">
                                                    <div class="option-meta">
                                                        <span>Web Development</span>
                                                    </div>
                                                </div>
                                                <div class="option-row">
                                                    <input type="radio" name="grid_filter">
                                                    <div class="option-meta">
                                                        <span>Software Engineering</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="button h-button is-primary is-raised">
                                <span class="icon">
                                  <i aria-hidden="true" class="fas fa-plus"></i>
                              </span>
                                <span>Add User</span>
                            </button>
                        </div>
                    </div>

                    <!--Banking Dashboard V1-->
                    <div class="banking-dashboard banking-dashboard-v1 ">

                        <div class="columns is-multiline">

                            <!--List Empty Search Placeholder -->
                            <div class="page-placeholder custom-text-filter-placeholder is-hidden">
                                <div class="placeholder-content">
                                    <img class="light-image" src="assets/img/illustrations/placeholders/search-3.svg" alt="" />
                                    <img class="dark-image" src="assets/img/illustrations/placeholders/search-3-dark.svg" alt="" />
                                    <h3>We couldn't find any matching results.</h3>
                                    <p class="is-larger">Too bad. Looks like we couldn't find any matching results for the
                                        search terms you've entered. Please try different search terms or criteria.</p>
                                </div>
                            </div>
                            <div class="column is-12" >
{{--                                <livewire:app-list-result/>--}}
                                <div class="columns is-multilin" id="apps" style="display: flex;flex-wrap: wrap;" >

                                    @foreach($appslist as $app)
                                        @php
                                            if (is_array($app)) {
                                               $date = $app['released'];
                                            } else {
                                               $date = $app->getReleased()->date;
                                            }

                                            $relasedate = \Illuminate\Support\Carbon::createFromTimeString($date);
                                            $now = \Illuminate\Support\Carbon::now();
                                            // check if less than a week
                                            $diff = $now->diffInDays($relasedate);
                                            if ($diff > 356) {
                                                // red
                                                $style =  "background-color: #fda9a9;";
                                            } elseif ($diff > 30) {
                                                // yallow
                                                $style =  "background-color:  #FEFF7F;";
                                            } else{
                                                // green
                                                 $style = "background-color:#a8ff5c;";
                                            }

                                        @endphp
                                        <!--Credit Cards-->
                                            <div class="column is-2 app-item-card "  >
                                                <div class="dashboard-card is-credit-cards"  style="{{ $style }}" >
                                                    <div class="title-wrap py-2 mb-0 mt-3 ">
                                                        <div class="status-icon is-success" style="background: #06d6a0;border-color: #06d6a0;color: #fff;height: 28px;width: 28px;min-width: 28px;border-radius: 50%;border: 1px solid #e5e5e5;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 2px">
{{--                                                            <i aria-hidden="true" class="fas fa-check"></i>--}}
                                                            <span style="font-size: 1.1rem;font-weight: bold">{{ $loop->iteration }}</span>
                                                        </div>
                                                        <a href="{{ $app['url'] }}" target="_blank" style="text-align: center !important;font-weight: bold;font-size: 1rem;" class="dark-inverted action-link" data-target="webuiPopover14" data-filter-match>{{ is_array( $app ) ? $app['name'] :  $app->getName() }}</a>
{{--                                                         style="white-space: nowrap; overflow: hidden"--}}
                                                    </div>

                                                    <div class="card-block">
                                                        <div class="card-block-inner is-dark-bordered-12 py-1 ">
                                                            <div class="h-avatar is-large" style="width: 100%;max-width: inherit">
{{--                                                                <a href="{{ is_array( $app ) ? $app['url'] : $app->getUrl() }}" target="_blank" data-user-popover-screenshots-number="{{ count($app['screenshots']) }}" data-user-popover-screenshots="{{ is_array( $app ) ? $app['screenshots'][0] :  $app->getIcon() . '=s180' }}" data-target="webuiPopover{{ $loop->iteration }}">--}}

                                                                    <img src="{{ is_array( $app ) ? $app['icon'] . '=s180' :  $app->getIcon() . '=s180' }}" class="avatar is-squared" style="width: 100%;height: 100%">
                                                                </a>
                                                                <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/stacks/illustrator.svg" alt="">
                                                            </div>

{{--                                                                                                                    <div class="h-avatar is-large">--}}
{{--                                                                                                                        <img class="avatar is-squared"  src="{{ $app->getIcon() }}" data-demo-src="assets/img/photo/demo/apps/1.jpg" alt="">--}}
{{--                                                                                                                    </div>--}}
                                                            <div class="credit-card-end">
                                                                <!--Dropdown-->
                                                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                                    <div class="is-trigger" aria-haspopup="true">
                                                                        <i data-feather="more-vertical"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" role="menu">
                                                                        <div class="dropdown-content">
                                                                            <a href="#" class="dropdown-item is-media">
                                                                                <div class="icon">
                                                                                    <i class="lnil lnil-coins"></i>
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span>Invest</span>
                                                                                    <span>Buy more stocks</span>
                                                                                </div>
                                                                            </a>
                                                                            <a href="#" class="dropdown-item is-media">
                                                                                <div class="icon">
                                                                                    <i class="lnil lnil-dollar-up"></i>
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span>Compare</span>
                                                                                    <span>Compare with others</span>
                                                                                </div>
                                                                            </a>
                                                                            <a href="#" class="dropdown-item is-media">
                                                                                <div class="icon">
                                                                                    <i class="lnil lnil-bank"></i>
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span>Trade</span>
                                                                                    <span>View opportunities</span>
                                                                                </div>
                                                                            </a>
                                                                            <hr class="dropdown-divider">
                                                                            <a href="{{ is_array( $app ) ? $app['url'] :  $app->getUrl()  }}" target="_blank" class="dropdown-item is-media">
                                                                                <div class="icon">
                                                                                    <i class="lnil lnil-wallet-alt-1"></i>
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span>Google Play</span>
                                                                                    <span>Open on App Store </span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="info-block-inner py-1"  data-user-popover-app-summary="{{ $app['summary'] }}" >
                                                            <div class="title-wrap" style="margin-bottom: 0 !important;">
{{--                                                                                                                        <h3 class="dark-inverted" style="white-space: nowrap; overflow: hidden" >Linerock Investm</h3>--}}
{{--                                                                                                    <span class="" style="color: #283252 !important;">Dev: </span>--}}

                                                                <div class="info-block-line py-0">
                                                                    <h4 class="dark-inverted"> </h4>
                                                                </div>
                                                                <a style="white-space: nowrap; overflow: hidden" href="{{ is_array( $app ) ? $app['developer']['url'] : $app->getDeveloper()->getUrl() }}"  target="_blank" class="action-link" data-filter-match>
                                                                    {{ is_array( $app ) ? $app['developer']['name'] :  $app->getDeveloper()->getName() }}
                                                                </a>
                                                            </div>
                                                            <div class="info-block-line my-0 py-0">
                                                                <span style="color: #505156 !important;font-weight: bolder !important;text-transform: uppercase;" >{{ is_array( $app ) ?$app['category']['name'] :  $app->getCategory()->getName() }}</span>
                                                            </div>
                                                            <div class="info-block-line py-0">
                                                                <h4 class="">Installs</h4>
                                                                @if($app["installs"] > 1000000000)
                                                                    <span class="is-dark-bordered-12" style="color: #283252 !important;font-weight: bold"><i aria-hidden="true" class="fas fa-circle text-success"></i>{{ number_format($app["installs"]/1000000) }} B</span>
                                                                @elseif($app["installs"] > 1000000)
                                                                    <span class="is-dark-bordered-12" style="color: #283252 !important;font-weight: bold"><i aria-hidden="true" class="fas fa-circle text-success"></i>{{ number_format($app["installs"]/1000) }} M</span>
                                                                @elseif($app["installs"] > 1000)
                                                                    <span class="is-dark-bordered-12" style="color: #283252 !important;font-weight: bold"><i aria-hidden="true" class="fas fa-circle text-success"></i>{{ number_format($app["installs"]/1000) }} K</span>
                                                                @else
                                                                    <span class="is-dark-bordered-12" style="color: #283252 !important;font-weight: bold"><i aria-hidden="true" class="fas fa-circle text-success"></i>{{ $app["installs"] }}</span>
                                                                @endif
{{--                                                                                                                            <span  style="font-weight: 600"><i aria-hidden="true" class="fas fa-circle text-success"></i>{{ ($app->getInstalls() > 1000) ? }}</span>--}}
                                                            </div>
                                                            <div class="info-block-line py-0">
                                                                <h4 class="">Release</h4>
                                                                @php

                                                                    if (is_array($app)) {
                                                                        $date = $app['released'];
                                                                    } else {
                                                                        $date = $app->getReleased()->date;
                                                                    }
                                                                    $relasedate = \Illuminate\Support\Carbon::createFromTimeString($date)->diffForHumans();

                                                                    $arrdate = explode(' ',$relasedate);
                                                                    $value = $arrdate[0];
                                                                    $short = $arrdate[1];
                                                                    $code = $short[0];

                                                                @endphp
                                                                <span style="color: #283252 !important;font-weight: bold">{{  $value . " " . $code }}</span>
                                                            </div>


                                                            <div class="info-block-line py-0">
                                                                <h4 class="">Updated </h4>
                                                                @php

                                                                    if (is_array($app)) {
                                                                        $updated_date = $app['updated'];
                                                                    } else {
                                                                        $updated_date = $app->getUpdated()->date;
                                                                    }
                                                                    $updatedDate = \Illuminate\Support\Carbon::createFromTimeString($updated_date)->diffForHumans();
/*
                                                                    $arrUpdatedDate = explode(' ',$updatedDate);
                                                                    $val = $arrUpdatedDate[0];
                                                                    $short = $arrUpdatedDate[1];
                                                                    $code = $short[0];
*/
                                                                @endphp
                                                                <span style="color: #283252 !important;font-weight: bold">{{  $updatedDate }}</span>
                                                            </div>
                                                            <div class="info-block-line py-0">
                                                                <h4 class="">{!! $app["price"] == 0 ? '<i aria-hidden="true" class="fas fa-circle text-success"></i> Free' : '<i aria-hidden="true" class="fas fa-circle text-danger"></i> ' . "{$app["priceText"]}"  !!} </h4>
                                                                <h4 class="">{!! $app["containsAds"] == true ? '<i aria-hidden="true" class="fas fa-circle text-success"></i> ' : '<i aria-hidden="true" class="fas fa-circle text-danger"></i> ' !!} Ads</h4>
                                                            </div>

                                                            @if($app["offersIAP"] )
                                                                <div class="info-block-line py-0">
                                                                    <h4 class=""><i aria-hidden="true" class="fas fa-circle text-success"></i> IAP</h4>
                                                                    {{--                                                                    @if($app["offersIAP"])--}}
                                                                    {{--                                                                        <span style="color: #283252 !important;font-weight: bold">{{ $app['offersIAPCost'] }}</span>--}}
                                                                    {{--                                                                    @endif--}}
                                                                </div>
                                                            @endif
                                                            <div class="info-block-line  py-0">
{{--                                                                <h4 class="">Rating </h4>--}}
                                                                @php
                                                                    $rating = $app['score'];
                                                                    $whole = floor($rating);      // 1
                                                                    $fraction = $rating - $whole; // .25

                                                                    $fRating = (int) $rating + number_format($fraction, 1);


                                                                    //
                                                                    $stars = [];
                                                                    for ($i = 0; $i < $whole; $i++) {
                                                                        $stars[] = '<i class="lnir lnir-star"></i>';
                                                                        if ($i == ($whole - 1) && $fraction > 0.25) {
                                                                            $stars[] = '<i class="lnir lnir-star-half"></i>';
                                                                        }
                                                                    }

                                                                @endphp

                                                                @foreach($stars as $star){!! $star !!}@endforeach
                                                                <span class="" style="color: #283252 !important;font-weight: bold; font-size: 0.9rem;">
                                                                    {{ $fRating }}
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach


                                    <!--Infinite Loader-->
                                        <div class="infinite-scroll-loader" data-filter-hide  style="opacity: 1 !important;">
                                            <div class="infinite-scroll-loader-inner">
                                                <div class="loader is-loading"></div>
                                                <div class="loader-end ">
                                                    <span>&emsp; No more apps to load.</span>
                                                </div>
                                            </div>
                                        </div>

                                </div>



{{--                            </div>--}}
{{--                                <div id="load_more">--}}
{{--                                    <button class="button h-button is-primary is-raised">--}}
{{--                                            <span class="icon">--}}
{{--                                              <i aria-hidden="true" class="fas fa-truck-loading"></i>--}}
{{--                                            </span>--}}
{{--                                        <span>Load More...</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                        here--}}
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>



    <script>
        $(document).ready(function () {
               let _token = '{{ csrf_token() }}';
                var ofset = 0;
               // on click call load more function
                $('#load_more').click(function () {
                     // $('#load_more').html('<span class="icon"><i aria-hidden="true" class="fas fa-truck-loading"></i></span><span>Loading...</span>');
                    ofset += 1;
                     $.ajax({
                          url: '{{ route('ajax.loadmore.apps') }}',
                          type: 'POST',
                          data: {
                              _token: _token,
                              ofset: ofset,
                            // page: $('.pagination .active').next().find('a').attr('href')
                          },
                          success: function (data) {
                              console.log(data);
                              if (data) {
                                  let apps = data.apps;
                                  let html = '';
                                  for (let i = 0; i < apps.length; i++) {
                                      let app = apps[i];
                                      html += '<div class="column is-2 app-item-card" >' +
                                               ' <div class="dashboard-card is-credit-cards"> ' +
                                                   '<div class="title-wrap py-2 mb-0 mt-3">' +
                                                        '<a href="" target="_blank" class="dark-inverted action-link" style="white-space: nowrap; overflow: hidden" data-filter-match>' + app.name +'</a>' +
                                                    '</div>' +

                                                    '<div class="card-block">' +
                                                        '<div class="card-block-inner is-dark-bordered-12 py-1 ">' +
                                                            '<div class="h-avatar is-large" style="width: 100%;max-width: inherit">' +
                                                                '<a href="" target="_blank">' +
                                                                    '<img src="'+ app.icon + '" class="avatar is-squared" style="width: 100%;height: 100%">' +
                                                                '</a>' +
                                                                '<img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/stacks/illustrator.svg" alt="">' +
                                                            '</div>' +

                                                            '<div class="credit-card-end">' +
                                                                '<div class="dropdown is-spaced is-dots is-right dropdown-trigger">' +
                                                                    '<div class="is-trigger" aria-haspopup="true">' +
                                                                        '<i data-feather="more-vertical"></i>' +
                                                                    '</div>' +
                                                                    '<div class="dropdown-menu" role="menu">' +
                                                                        '<div class="dropdown-content">' +
                                                                            '<a href="#" class="dropdown-item is-media">' +
                                                                                '<div class="icon">' +
                                                                                    '<i class="lnil lnil-coins"></i>' +
                                                                                '</div>' +
                                                                                '<div class="meta">' +
                                                                                    '<span>Invest</span>' +
                                                                                    '<span>Buy more stocks</span>' +
                                                                                '</div>' +
                                                                            '</a>' +
                                                                            '<a href="#" class="dropdown-item is-media">' +
                                                                                '<div class="icon">' +
                                                                                    '<i class="lnil lnil-dollar-up"></i>' +
                                                                                '</div>' +
                                                                                '<div class="meta">' +
                                                                                    '<span>Compare</span>' +
                                                                                    '<span>Compare with others</span>' +
                                                                                '</div>' +
                                                                            '</a>' +
                                                                            '<a href="#" class="dropdown-item is-media">' +
                                                                                '<div class="icon">' +
                                                                                    '<i class="lnil lnil-bank"></i>' +
                                                                                '</div>' +
                                                                                '<div class="meta">' +
                                                                                    '<span>Trade</span>' +
                                                                                    '<span>View opportunities</span>' +
                                                                                '</div>' +
                                                                            '</a>' +
                                                                            '<hr class="dropdown-divider">' +
                                                                            '<a href="" target="_blank" class="dropdown-item is-media">' +
                                                                                '<div class="icon">' +
                                                                                    '<i class="lnil lnil-wallet-alt-1"></i>' +
                                                                                '</div>' +
                                                                                '<div class="meta">' +
                                                                                    '<span>Google Play</span>' +
                                                                                    '<span>Open on App Store </span>' +
                                                                                '</div>' +
                                                                            '</a>' +
                                                                        '</div>' +
                                                                    '</div>' +
                                                                '</div>' +
                                                            '</div>' +
                                                        '</div>' +
                                                        '<div class="info-block-inner py-1">' +
                                                            '<div class="title-wrap">' +

                                                                '<div class="info-block-line py-0">' +
                                                                    '<h4 class="dark-inverted"> </h4>' +
                                                                '</div>' +
                                                                '<a href="" target="_blank" class="action-link">devname</a>' +
                                                            '</div>' +
                                                            '<div class="info-block-line my-0 py-0"> ' +
                                                                '<span style="font-weight: 400" >get name</span>' +
                                                            '</div>'+
                                                            '<div class="info-block-line py-0">' +
                                                                '<h4 class="dark-inverted">Installs</h4>' +
                                                                '<span class="is-dark-bordered-12"><i aria-hidden="true" class="fas fa-circle text-success"></i>1 B</span>' +
                                                            '</div>' +
                                                            '<div class="info-block-line py-0">' +
                                                                '<h4 class="dark-inverted">Release</h4>' +

                                                                '<span  style="font-weight: 600">1y </span>' +
                                                            '</div>' +
                                                            '<div class="info-block-line  py-0">' +
                                                                '<h4 class="dark-inverted">iap ads</h4>' +
                                                                '<span class="dark-inverted" style="font-weight: bold">4.6</span>' +
                                                            '</div>' +
                                                        '</div>' +
                                                    '</div>' +
                                                '</div>' +
                                            '</div>';

                                    }

                                  $('#apps').append(html);
                                  // $('#load_more').html('<button class="button h-button is-primary is-raised"><span class="icon"><i aria-hidden="true" class="fas fa-truck-loading"></i></span><span>Load More...</span></button>');
                                  // $('.pagination').html(data);
                            } else {
                                 $('#load_more').html('<button class="button h-button is-primary is-raised"><span class="icon"><i aria-hidden="true" class="fas fa-truck-loading"></i></span><span>No More Data...</span></button>');
                            }
                          }
                     });
                });



        });
    </script>



    <!--Huro Scripts-->
    <!--Load Mapbox-->
{{--    @livewireScripts--}}

    <!-- Concatenated plugins -->
    <script src="assets/js/app.js"></script>

    <!-- Huro js -->
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/main.js" async></script>
    <script src="assets/js/components.js" async></script>
{{--    <script src="assets/js/popover.js" async></script>--}}

    <script async>
        "use strict";



        // function changeScreenshot(screenshotsNumber) {
        //     var currentIndex = 0;
        //     if (currentIndex < screenshotsNumber) {
        //         currentIndex++;
        //         document.getElementById("currentScreenshot").src = "";
        //     }
        //     // var backArrow = $("#backArrow");
        //     //
        //     // // on click on next arrow change the image of current shot
        //     // $("#nextArrow").click(function () {
        //     //     $("#currentScreenshot").attr("src", "");
        //     // });
        // }

        $(document).ready(function () {



            function initShotsPopovers() {
                $("*[data-user-popover-screenshots]").each(function () {
                    var e = $(this);
                    var appRef = $(this).attr("data-user-popover-screenshots");
                    var screenshotsNumber = $(this).attr("data-user-popover-screenshots-number");
                    var screenshots = $(this).attr("data-user-popover-screenshots-list");

                    console.log(screenshots);
                    var nextArrowIcon = '<i class="lnir lnir-arrow-right"></i>';
                    var backArrowIcon = '<i class="lnir lnir-arrow-left"></i>';

                    e.webuiPopover({
                        trigger: "hover",
                        placement: "auto",
                        width: 300,
                        padding: false,
                        offsetLeft: 0,
                        offsetTop: 20,
                        animation: "pop",
                        style: "profile",
                        cache: false,
                        content: function () {
                            var destroyLoader = setTimeout(function () {
                                $(".loader-overlay").removeClass("is-active");
                            }, 500);

                            if (appRef != null) {
                                var html = `
                                    <div class="profile-popover-block">

                                        <div class="loader-overlay is-active">
                                            <div class="loader is-loading"></div>
                                        </div>

                                        <div class="profile-popover-wrapper">
                                            <img class="avatar" src="${appRef}" width="100%" id="currentScreenshot">
                                        </div>

                                    </div>
                                `;
                            }
                            return html;
                            return destroyLoader;
                        },
                    });


                    // $.ajax({
                    //     url: "assets/data/user.json",
                    //     dataType: "json",
                    //     success: function (data) {
                    //         e.webuiPopover({
                    //             trigger: "hover",
                    //             placement: "auto",
                    //             width: 300,
                    //             padding: false,
                    //             offsetLeft: 0,
                    //             offsetTop: 20,
                    //             animation: "pop",
                    //             style: "profile",
                    //             cache: false,
                    //             content: function () {
                    //                 var destroyLoader = setTimeout(function () {
                    //                     $(".loader-overlay").removeClass("is-active");
                    //                 }, 500);
                    //
                    //                 if (data[userRef].pic != null) {
                    //                     var html = `
                    //                 <div class="profile-popover-block">
                    //
                    //                     <div class="loader-overlay is-active">
                    //                         <div class="loader is-loading"></div>
                    //                     </div>
                    //
                    //                     <div class="profile-popover-wrapper">
                    //                         <div class="popover-avatar">
                    //                             <img class="avatar" src="${data[userRef].pic}">
                    //                             <img class="badge" src="${data[userRef].badge}">
                    //                         </div>
                    //                         <div class="popover-meta">
                    //                             <span class="user-meta">
                    //                                 <span class="username">${data[userRef].name}</span>
                    //                                 <span class="location">${data[userRef].location}</span>
                    //                             </span>
                    //                             <span class="job-title">${data[userRef].position}</span>
                    //                             <span class="bio">${data[userRef].bio}</span>
                    //                         </div>
                    //                     </div>
                    //                     <div class="popover-actions">
                    //                         <a class="popover-icon">
                    //                             ${phoneIcon}
                    //                         </a>
                    //                         <a class="popover-icon">
                    //                             ${mailIcon}
                    //                         </a>
                    //                         <a class="popover-icon">
                    //                             ${profileIcon}
                    //                         </a>
                    //                     </div>
                    //                 </div>
                    //             `;
                    //                 } else {
                    //                     var classes = new Array(
                    //                         "is-danger",
                    //                         "is-info",
                    //                         "is-primary",
                    //                         "is-success",
                    //                         "is-warning",
                    //                         "is-h-purple",
                    //                         "is-h-blue",
                    //                         "is-h-green",
                    //                         "is-h-orange",
                    //                         "is-h-red",
                    //                         "is-h-green"
                    //                     );
                    //                     var length = classes.length;
                    //                     var randomClass = classes[Math.floor(Math.random() * length)];
                    //
                    //                     var html = `
                    //
                    //                 <div class="profile-popover-block">
                    //
                    //                     <div class="loader-overlay is-active">
                    //                         <div class="loader is-loading"></div>
                    //                     </div>
                    //
                    //                     <div class="profile-popover-wrapper">
                    //                         <div class="popover-fake-avatar ${randomClass}">
                    //                             <div class="fake-avatar">
                    //                                 <span>${data[userRef].initials}</span>
                    //                             </div>
                    //                             <img class="badge" src="${data[userRef].badge}">
                    //                         </div>
                    //                         <div class="popover-meta">
                    //                             <span class="user-meta">
                    //                                 <span class="username">${data[userRef].name}</span>
                    //                                 <span class="location">${data[userRef].location}</span>
                    //                             </span>
                    //                             <span class="job-title">${data[userRef].position}</span>
                    //                             <span class="bio">${data[userRef].bio}</span>
                    //                         </div>
                    //                     </div>
                    //                     <div class="popover-actions">
                    //                         <a class="popover-icon">
                    //                             ${phoneIcon}
                    //                         </a>
                    //                         <a class="popover-icon">
                    //                             ${mailIcon}
                    //                         </a>
                    //                         <a class="popover-icon">
                    //                             ${profileIcon}
                    //                         </a>
                    //                     </div>
                    //
                    //                 </div>
                    //             `;
                    //                 }
                    //                 return html;
                    //                 return destroyLoader;
                    //             },
                    //         });
                    //     },
                    // });
                });
            }

            initShotsPopovers();




            function initSummaryPopovers() {
                $("*[data-user-popover-app-summary]").each(function () {
                    var e = $(this);
                    var appSummary = $(this).attr("data-user-popover-app-summary");

                    e.webuiPopover({
                        trigger: "hover",
                        placement: "bottom",
                        width: 300,
                        padding: false,
                        offsetLeft: 0,
                        offsetTop: 20,
                        animation: "pop",
                        style: "profile",
                        cache: false,
                        content: function () {
                            var destroyLoader = setTimeout(function () {
                                $(".loader-overlay").removeClass("is-active");
                            }, 500);

                            if (appSummary != null) {
                                var html = `
                                    <div class="profile-popover-block">

                                        <div class="loader-overlay is-active">
                                            <div class="loader is-loading"></div>
                                        </div>

                                        <div class="profile-popover-wrapper">
                                            <div class="popover-meta">
                                                <span class="bio">${appSummary}</span>
                                            </div>
                                        </div>

                                    </div>
                                `;
                            }
                            return html;
                            return destroyLoader;
                        },
                    });

                    // $.ajax({
                    //     url: "assets/data/user.json",
                    //     dataType: "json",
                    //     success: function (data) {
                    //         e.webuiPopover({
                    //             trigger: "hover",
                    //             placement: "auto",
                    //             width: 300,
                    //             padding: false,
                    //             offsetLeft: 0,
                    //             offsetTop: 20,
                    //             animation: "pop",
                    //             style: "profile",
                    //             cache: false,
                    //             content: function () {
                    //                 var destroyLoader = setTimeout(function () {
                    //                     $(".loader-overlay").removeClass("is-active");
                    //                 }, 500);
                    //
                    //                 if (data[userRef].pic != null) {
                    //                     var html = `
                    //                 <div class="profile-popover-block">
                    //
                    //                     <div class="loader-overlay is-active">
                    //                         <div class="loader is-loading"></div>
                    //                     </div>
                    //
                    //                     <div class="profile-popover-wrapper">
                    //                         <div class="popover-avatar">
                    //                             <img class="avatar" src="${data[userRef].pic}">
                    //                             <img class="badge" src="${data[userRef].badge}">
                    //                         </div>
                    //                         <div class="popover-meta">
                    //                             <span class="user-meta">
                    //                                 <span class="username">${data[userRef].name}</span>
                    //                                 <span class="location">${data[userRef].location}</span>
                    //                             </span>
                    //                             <span class="job-title">${data[userRef].position}</span>
                    //                             <span class="bio">${data[userRef].bio}</span>
                    //                         </div>
                    //                     </div>
                    //                     <div class="popover-actions">
                    //                         <a class="popover-icon">
                    //                             ${phoneIcon}
                    //                         </a>
                    //                         <a class="popover-icon">
                    //                             ${mailIcon}
                    //                         </a>
                    //                         <a class="popover-icon">
                    //                             ${profileIcon}
                    //                         </a>
                    //                     </div>
                    //                 </div>
                    //             `;
                    //                 } else {
                    //                     var classes = new Array(
                    //                         "is-danger",
                    //                         "is-info",
                    //                         "is-primary",
                    //                         "is-success",
                    //                         "is-warning",
                    //                         "is-h-purple",
                    //                         "is-h-blue",
                    //                         "is-h-green",
                    //                         "is-h-orange",
                    //                         "is-h-red",
                    //                         "is-h-green"
                    //                     );
                    //                     var length = classes.length;
                    //                     var randomClass = classes[Math.floor(Math.random() * length)];
                    //
                    //                     var html = `
                    //
                    //                 <div class="profile-popover-block">
                    //
                    //                     <div class="loader-overlay is-active">
                    //                         <div class="loader is-loading"></div>
                    //                     </div>
                    //
                    //                     <div class="profile-popover-wrapper">
                    //                         <div class="popover-fake-avatar ${randomClass}">
                    //                             <div class="fake-avatar">
                    //                                 <span>${data[userRef].initials}</span>
                    //                             </div>
                    //                             <img class="badge" src="${data[userRef].badge}">
                    //                         </div>
                    //                         <div class="popover-meta">
                    //                             <span class="user-meta">
                    //                                 <span class="username">${data[userRef].name}</span>
                    //                                 <span class="location">${data[userRef].location}</span>
                    //                             </span>
                    //                             <span class="job-title">${data[userRef].position}</span>
                    //                             <span class="bio">${data[userRef].bio}</span>
                    //                         </div>
                    //                     </div>
                    //                     <div class="popover-actions">
                    //                         <a class="popover-icon">
                    //                             ${phoneIcon}
                    //                         </a>
                    //                         <a class="popover-icon">
                    //                             ${mailIcon}
                    //                         </a>
                    //                         <a class="popover-icon">
                    //                             ${profileIcon}
                    //                         </a>
                    //                     </div>
                    //
                    //                 </div>
                    //             `;
                    //                 }
                    //                 return html;
                    //                 return destroyLoader;
                    //             },
                    //         });
                    //     },
                    // });
                });
            }

            initSummaryPopovers();



        });



    </script>
    <script src="assets/js/widgets.js" async></script>


    <!-- Additional Features -->
    <script src="assets/js/touch.js" async></script>

    <!-- Landing page js -->

    <!-- Dashboards js -->










    <script src="assets/js/banking-1.js" async></script>







    <!-- Charts js -->



    <!--Forms-->

    <!--Wizard-->

    <!-- Layouts js -->









    <script src="assets/js/syntax.js" async></script>
</div>
</body>

</html>

{{--<div class="column is-2">--}}
{{--    <div class="dashboard-card is-credit-cards">--}}
{{--        <div class="title-wrap py-2 mb-0 mt-3">--}}
{{--            <a class="dark-inverted action-link" style="white-space: nowrap; overflow: hidden">NewProfilePic: Profile Picture</a>--}}
{{--        </div>--}}

{{--        <div class="card-block">--}}
{{--            <div class="card-block-inner is-dark-bordered-12 py-1 ">--}}

{{--                <img src="https://lh3.googleusercontent.com/I-Yd5tJnxw7Ks8FUhUiFr8I4kohd9phv5sRFHG_-nSX9AAD6Rcy570NBZVFJBKpepmc=h140" class="" style="width: 100%;height: 100%;border-radius: 10px">--}}

{{--                <div class="credit-card-end">--}}
{{--                    <!--Dropdown-->--}}
{{--                    <div class="dropdown is-spaced is-dots is-right dropdown-trigger">--}}
{{--                        <div class="is-trigger" aria-haspopup="true">--}}
{{--                            <i data-feather="more-vertical"></i>--}}
{{--                        </div>--}}
{{--                        <div class="dropdown-menu" role="menu">--}}
{{--                            <div class="dropdown-content">--}}
{{--                                <a href="#" class="dropdown-item is-media">--}}
{{--                                    <div class="icon">--}}
{{--                                        <i class="lnil lnil-coins"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="meta">--}}
{{--                                        <span>Invest</span>--}}
{{--                                        <span>Buy more stocks</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="dropdown-item is-media">--}}
{{--                                    <div class="icon">--}}
{{--                                        <i class="lnil lnil-dollar-up"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="meta">--}}
{{--                                        <span>Compare</span>--}}
{{--                                        <span>Compare with others</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="dropdown-item is-media">--}}
{{--                                    <div class="icon">--}}
{{--                                        <i class="lnil lnil-bank"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="meta">--}}
{{--                                        <span>Trade</span>--}}
{{--                                        <span>View opportunities</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                                <a href="#" class="dropdown-item is-media">--}}
{{--                                    <div class="icon">--}}
{{--                                        <i class="lnil lnil-wallet-alt-1"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="meta">--}}
{{--                                        <span>Wallet</span>--}}
{{--                                        <span>Open stock wallet</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="info-block-inner py-1">--}}
{{--                <div class="title-wrap">--}}
{{--                    --}}{{--                                                        <h3 class="dark-inverted" style="white-space: nowrap; overflow: hidden" >Linerock Investm</h3>--}}
{{--                    <a class="action-link">Linerock Investm</a>--}}
{{--                </div>--}}
{{--                <div class="info-block-line my-0 py-0">--}}
{{--                    <span>PHOTOGRAPHY</span>--}}
{{--                </div>--}}
{{--                <div class="info-block-line py-0">--}}
{{--                    <h4 class="dark-inverted">Installs</h4>--}}
{{--                    <span><i aria-hidden="true" class="fas fa-circle text-success"></i>1M</span>--}}
{{--                </div>--}}
{{--                <div class="info-block-line py-0">--}}
{{--                    <h4 class="dark-inverted">Release</h4>--}}
{{--                    <span>134 days</span>--}}
{{--                </div>--}}
{{--                <div class="info-block-line  py-0">--}}
{{--                    <h4 class="dark-inverted">Type</h4>--}}
{{--                    <span class="has-image">--}}
{{--                                                      <img src="assets/img/icons/dashboards/banking/visa-squared-color.svg"--}}

{{--                                                           alt="">--}}
{{--                                                      Credit card--}}
{{--                                                  </span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
