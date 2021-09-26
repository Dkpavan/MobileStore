<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Responsive Table | Foxia - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- Responsive Table css -->
        <link href="{{asset('assets/libs/admin-resources/rwd-table/rwd-table.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">

    </head>

    <body data-sidebar="colored">


        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="d-flex">
        <div class="navbar-brand-box text-center">
            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo.png')}}" alt="" height="20">
                </span>
            </a>
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo_dark.png')}}" alt="" height="20">
                </span>
            </a>
        </div>

        <div class="navbar-header">
            <button type="button" class="button-menu-mobile waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="d-flex ms-auto">
                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input form-control" placeholder="Search">
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>


                <div class="dropdown d-none d-md-block">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="flag-img me-2" src="{{asset('assets/images/flags/us_flag.jpg')}}" alt="Header Language" height="16"> English <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('assets/images/flags/germany_flag.jpg')}}" alt="user-image" height="12"> <span class="align-middle"> German </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('assets/images/flags/italy_flag.jpg')}}" alt="user-image" height="12"> <span class="align-middle"> Italian </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('assets/images/flags/french_flag.jpg')}}" alt="user-image" height="12"> <span class="align-middle"> French </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('assets/images/flags/spain_flag.jpg')}}" alt="user-image" height="12"> <span class="align-middle"> Spanish </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('assets/images/flags/russia_flag.jpg')}}" alt="user-image" height="12"> <span class="align-middle"> Russian </span>
                        </a>

                    </div>
                </div>

                <div class="dropdown">
                    <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="m-0 font-size-16"> Notification (3) </h5>
                                </div>
                            </div>
                        </div>

                        <div data-simplebar style="max-height: 230px;">
                            <a href="#" class="text-reset notification-item d-block active">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle font-size-16">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-danger rounded-circle font-size-16">
                                            <i class="mdi mdi-message-text-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-info rounded-circle font-size-16">
                                            <i class="mdi mdi-glass-cocktail"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">It is a long established fact that a reader will</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle font-size-16">
                                            <i class="mdi mdi-message-text-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-warning rounded-circle font-size-16">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="p-2 border-top">
                            <div class="d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-start" href="javascript:void(0)">
                                    View all
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user me-2" src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="Header Avatar">
                        <span class="d-none d-md-inline-block ms-1">Donald T. <i class="mdi mdi-chevron-down"></i> </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle d-inline-block me-1"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet font-size-16 align-middle d-inline-block me-1"></i> My Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="dripicons-gear font-size-16 align-middle me-1"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock-open font-size-16 align-middle d-inline-block me-1"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="dripicons-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-spin mdi-cog"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>
</header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title text-uppercase">Main</li>


                            <li>
                                <a href="index.html" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end">2</span>
                                    <i class="dripicons-meter"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-message"></i>
                                    <span> Email </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Email Read</a></li>
                                    <li><a href="email-compose.html">Email Compose</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect">
                                    <i class="dripicons-calendar"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                                    <i class="dripicons-monitor"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                                        <ul class="sub-menu mm-collapse" aria-expanded="true">
                                            <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                                            <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                            <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                            <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                            <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                            <li><a href="layouts-hori-full.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-title">Components</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-briefcase"></i>
                                    <span>UI Elements </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-lightbox.html">Lightbox</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-broadcast"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-material.html">Material Design</a></li>
                                    <li><a href="icons-ion.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <span class="badge rounded-pill bg-success float-end">8</span>
                                    <i class="dripicons-to-do"></i>
                                    <span>Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-graph-bar"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-morris.html">Morris Charts</a></li>
                                    <li><a href="charts-chartist.html">Chartist Charts</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                                    <li><a href="charts-flot.html">Flot Charts</a></li>
                                    <li><a href="charts-c3.html">C3 Charts</a></li>
                                    <li><a href="charts-other.html">Jquery Knob Charts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-view-thumb"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <span class="badge rounded-pill bg-danger float-end">2</span>
                                    <i class="dripicons-map"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extras</li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-archive"></i>
                                    <span>Advanced UI</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="advanced-animation.html">Animation</a></li>
                                    <li><a href="advanced-highlight.html">Highlight</a></li>
                                    <li><a href="advanced-rating.html">Rating</a></li>
                                    <li><a href="advanced-nestable.html">Nestable</a></li>
                                    <li><a href="advanced-alertify.html">Alertify</a></li>
                                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="advanced-sessiontimeout.html">Session Timeout</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-box"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-duplicate"></i>
                                    <span>Extra Pages</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li>
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-network-1"></i>
                                    <span>Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>



                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->





            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Responsive Table</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Responsive Table</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Example</h4>
                                        <p class="card-title-desc">This is an experimental awesome solution for responsive tables with complex data.</p>

                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-bs-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Company</th>
                                                        <th data-priority="1">Last Trade</th>
                                                        <th data-priority="3">Trade Time</th>
                                                        <th data-priority="1">Change</th>
                                                        <th data-priority="3">Prev Close</th>
                                                        <th data-priority="3">Open</th>
                                                        <th data-priority="6">Bid</th>
                                                        <th data-priority="6">Ask</th>
                                                        <th data-priority="6">1y Target Est</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                        <td>597.74</td>
                                                        <td>12:12PM</td>
                                                        <td>14.81 (2.54%)</td>
                                                        <td>582.93</td>
                                                        <td>597.95</td>
                                                        <td>597.73 x 100</td>
                                                        <td>597.91 x 300</td>
                                                        <td>731.10</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                        <td>378.94</td>
                                                        <td>12:22PM</td>
                                                        <td>5.74 (1.54%)</td>
                                                        <td>373.20</td>
                                                        <td>381.02</td>
                                                        <td>378.92 x 300</td>
                                                        <td>378.99 x 100</td>
                                                        <td>505.94</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                        <td>191.55</td>
                                                        <td>12:23PM</td>
                                                        <td>3.16 (1.68%)</td>
                                                        <td>188.39</td>
                                                        <td>194.99</td>
                                                        <td>191.52 x 300</td>
                                                        <td>191.58 x 100</td>
                                                        <td>240.32</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                        <td>31.15</td>
                                                        <td>12:44PM</td>
                                                        <td>1.41 (4.72%)</td>
                                                        <td>29.74</td>
                                                        <td>30.67</td>
                                                        <td>31.14 x 6500</td>
                                                        <td>31.15 x 3200</td>
                                                        <td>36.11</td>
                                                    </tr>
                                                    <tr>
                                                        <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                        <td>25.50</td>
                                                        <td>12:27PM</td>
                                                        <td>0.66 (2.67%)</td>
                                                        <td>24.84</td>
                                                        <td>25.37</td>
                                                        <td>25.50 x 71100</td>
                                                        <td>25.51 x 17800</td>
                                                        <td>31.50</td>
                                                    </tr>
                                                    <tr>
                                                        <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                        <td>18.65</td>
                                                        <td>12:45PM</td>
                                                        <td>0.97 (5.49%)</td>
                                                        <td>17.68</td>
                                                        <td>18.23</td>
                                                        <td>18.65 x 10300</td>
                                                        <td>18.66 x 24000</td>
                                                        <td>21.12</td>
                                                    </tr>
                                                    <tr>
                                                        <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                        <td>15.81</td>
                                                        <td>12:25PM</td>
                                                        <td>0.11 (0.67%)</td>
                                                        <td>15.70</td>
                                                        <td>15.94</td>
                                                        <td>15.79 x 6100</td>
                                                        <td>15.80 x 17000</td>
                                                        <td>18.16</td>
                                                    </tr>
                                                    <!-- Repeat -->
                                                    <tr>
                                                        <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                        <td>597.74</td>
                                                        <td>12:12PM</td>
                                                        <td>14.81 (2.54%)</td>
                                                        <td>582.93</td>
                                                        <td>597.95</td>
                                                        <td>597.73 x 100</td>
                                                        <td>597.91 x 300</td>
                                                        <td>731.10</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                        <td>378.94</td>
                                                        <td>12:22PM</td>
                                                        <td>5.74 (1.54%)</td>
                                                        <td>373.20</td>
                                                        <td>381.02</td>
                                                        <td>378.92 x 300</td>
                                                        <td>378.99 x 100</td>
                                                        <td>505.94</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                        <td>191.55</td>
                                                        <td>12:23PM</td>
                                                        <td>3.16 (1.68%)</td>
                                                        <td>188.39</td>
                                                        <td>194.99</td>
                                                        <td>191.52 x 300</td>
                                                        <td>191.58 x 100</td>
                                                        <td>240.32</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                        <td>31.15</td>
                                                        <td>12:44PM</td>
                                                        <td>1.41 (4.72%)</td>
                                                        <td>29.74</td>
                                                        <td>30.67</td>
                                                        <td>31.14 x 6500</td>
                                                        <td>31.15 x 3200</td>
                                                        <td>36.11</td>
                                                    </tr>
                                                    <tr>
                                                        <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                        <td>25.50</td>
                                                        <td>12:27PM</td>
                                                        <td>0.66 (2.67%)</td>
                                                        <td>24.84</td>
                                                        <td>25.37</td>
                                                        <td>25.50 x 71100</td>
                                                        <td>25.51 x 17800</td>
                                                        <td>31.50</td>
                                                    </tr>
                                                    <tr>
                                                        <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                        <td>18.65</td>
                                                        <td>12:45PM</td>
                                                        <td>0.97 (5.49%)</td>
                                                        <td>17.68</td>
                                                        <td>18.23</td>
                                                        <td>18.65 x 10300</td>
                                                        <td>18.66 x 24000</td>
                                                        <td>21.12</td>
                                                    </tr>
                                                    <tr>
                                                        <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                        <td>15.81</td>
                                                        <td>12:25PM</td>
                                                        <td>0.11 (0.67%)</td>
                                                        <td>15.70</td>
                                                        <td>15.94</td>
                                                        <td>15.79 x 6100</td>
                                                        <td>15.80 x 17000</td>
                                                        <td>18.16</td>
                                                    </tr>
                                                    <!-- Repeat -->
                                                    <tr>
                                                        <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                        <td>597.74</td>
                                                        <td>12:12PM</td>
                                                        <td>14.81 (2.54%)</td>
                                                        <td>582.93</td>
                                                        <td>597.95</td>
                                                        <td>597.73 x 100</td>
                                                        <td>597.91 x 300</td>
                                                        <td>731.10</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                        <td>378.94</td>
                                                        <td>12:22PM</td>
                                                        <td>5.74 (1.54%)</td>
                                                        <td>373.20</td>
                                                        <td>381.02</td>
                                                        <td>378.92 x 300</td>
                                                        <td>378.99 x 100</td>
                                                        <td>505.94</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                        <td>191.55</td>
                                                        <td>12:23PM</td>
                                                        <td>3.16 (1.68%)</td>
                                                        <td>188.39</td>
                                                        <td>194.99</td>
                                                        <td>191.52 x 300</td>
                                                        <td>191.58 x 100</td>
                                                        <td>240.32</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                        <td>31.15</td>
                                                        <td>12:44PM</td>
                                                        <td>1.41 (4.72%)</td>
                                                        <td>29.74</td>
                                                        <td>30.67</td>
                                                        <td>31.14 x 6500</td>
                                                        <td>31.15 x 3200</td>
                                                        <td>36.11</td>
                                                    </tr>
                                                    <tr>
                                                        <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                        <td>25.50</td>
                                                        <td>12:27PM</td>
                                                        <td>0.66 (2.67%)</td>
                                                        <td>24.84</td>
                                                        <td>25.37</td>
                                                        <td>25.50 x 71100</td>
                                                        <td>25.51 x 17800</td>
                                                        <td>31.50</td>
                                                    </tr>
                                                    <tr>
                                                        <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                        <td>18.65</td>
                                                        <td>12:45PM</td>
                                                        <td>0.97 (5.49%)</td>
                                                        <td>17.68</td>
                                                        <td>18.23</td>
                                                        <td>18.65 x 10300</td>
                                                        <td>18.66 x 24000</td>
                                                        <td>21.12</td>
                                                    </tr>
                                                    <tr>
                                                        <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                        <td>15.81</td>
                                                        <td>12:25PM</td>
                                                        <td>0.11 (0.67%)</td>
                                                        <td>15.70</td>
                                                        <td>15.94</td>
                                                        <td>15.79 x 6100</td>
                                                        <td>15.80 x 17000</td>
                                                        <td>18.16</td>
                                                    </tr>
                                                    <!-- Repeat -->
                                                    <tr>
                                                        <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                        <td>597.74</td>
                                                        <td>12:12PM</td>
                                                        <td>14.81 (2.54%)</td>
                                                        <td>582.93</td>
                                                        <td>597.95</td>
                                                        <td>597.73 x 100</td>
                                                        <td>597.91 x 300</td>
                                                        <td>731.10</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                        <td>378.94</td>
                                                        <td>12:22PM</td>
                                                        <td>5.74 (1.54%)</td>
                                                        <td>373.20</td>
                                                        <td>381.02</td>
                                                        <td>378.92 x 300</td>
                                                        <td>378.99 x 100</td>
                                                        <td>505.94</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                        <td>191.55</td>
                                                        <td>12:23PM</td>
                                                        <td>3.16 (1.68%)</td>
                                                        <td>188.39</td>
                                                        <td>194.99</td>
                                                        <td>191.52 x 300</td>
                                                        <td>191.58 x 100</td>
                                                        <td>240.32</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                        <td>31.15</td>
                                                        <td>12:44PM</td>
                                                        <td>1.41 (4.72%)</td>
                                                        <td>29.74</td>
                                                        <td>30.67</td>
                                                        <td>31.14 x 6500</td>
                                                        <td>31.15 x 3200</td>
                                                        <td>36.11</td>
                                                    </tr>
                                                    <tr>
                                                        <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                        <td>25.50</td>
                                                        <td>12:27PM</td>
                                                        <td>0.66 (2.67%)</td>
                                                        <td>24.84</td>
                                                        <td>25.37</td>
                                                        <td>25.50 x 71100</td>
                                                        <td>25.51 x 17800</td>
                                                        <td>31.50</td>
                                                    </tr>
                                                    <tr>
                                                        <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                        <td>18.65</td>
                                                        <td>12:45PM</td>
                                                        <td>0.97 (5.49%)</td>
                                                        <td>17.68</td>
                                                        <td>18.23</td>
                                                        <td>18.65 x 10300</td>
                                                        <td>18.66 x 24000</td>
                                                        <td>21.12</td>
                                                    </tr>
                                                    <tr>
                                                        <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                        <td>15.81</td>
                                                        <td>12:25PM</td>
                                                        <td>0.11 (0.67%)</td>
                                                        <td>15.70</td>
                                                        <td>15.94</td>
                                                        <td>15.79 x 6100</td>
                                                        <td>15.80 x 17000</td>
                                                        <td>18.16</td>
                                                    </tr>
                                                    <!-- Repeat -->
                                                    <tr>
                                                        <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                        <td>597.74</td>
                                                        <td>12:12PM</td>
                                                        <td>14.81 (2.54%)</td>
                                                        <td>582.93</td>
                                                        <td>597.95</td>
                                                        <td>597.73 x 100</td>
                                                        <td>597.91 x 300</td>
                                                        <td>731.10</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                        <td>378.94</td>
                                                        <td>12:22PM</td>
                                                        <td>5.74 (1.54%)</td>
                                                        <td>373.20</td>
                                                        <td>381.02</td>
                                                        <td>378.92 x 300</td>
                                                        <td>378.99 x 100</td>
                                                        <td>505.94</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                        <td>191.55</td>
                                                        <td>12:23PM</td>
                                                        <td>3.16 (1.68%)</td>
                                                        <td>188.39</td>
                                                        <td>194.99</td>
                                                        <td>191.52 x 300</td>
                                                        <td>191.58 x 100</td>
                                                        <td>240.32</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                        <td>31.15</td>
                                                        <td>12:44PM</td>
                                                        <td>1.41 (4.72%)</td>
                                                        <td>29.74</td>
                                                        <td>30.67</td>
                                                        <td>31.14 x 6500</td>
                                                        <td>31.15 x 3200</td>
                                                        <td>36.11</td>
                                                    </tr>
                                                    <tr>
                                                        <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                        <td>25.50</td>
                                                        <td>12:27PM</td>
                                                        <td>0.66 (2.67%)</td>
                                                        <td>24.84</td>
                                                        <td>25.37</td>
                                                        <td>25.50 x 71100</td>
                                                        <td>25.51 x 17800</td>
                                                        <td>31.50</td>
                                                    </tr>
                                                    <tr>
                                                        <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                        <td>18.65</td>
                                                        <td>12:45PM</td>
                                                        <td>0.97 (5.49%)</td>
                                                        <td>17.68</td>
                                                        <td>18.23</td>
                                                        <td>18.65 x 10300</td>
                                                        <td>18.66 x 24000</td>
                                                        <td>21.12</td>
                                                    </tr>
                                                    <tr>
                                                        <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                        <td>15.81</td>
                                                        <td>12:25PM</td>
                                                        <td>0.11 (0.67%)</td>
                                                        <td>15.70</td>
                                                        <td>15.94</td>
                                                        <td>15.79 x 6100</td>
                                                        <td>15.80 x 17000</td>
                                                        <td>18.16</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->



                <footer class="footer text-center">
                    © <script>document.write(new Date().getFullYear())</script> Foxia <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0">
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{asset('assets/images/layouts/layout-1.jpg')}}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch">
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('assets/images/layouts/layout-2.jpg')}}" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="{{asset('assets/css/bootstrap-dark.min.css')}}" data-appStyle="{{asset('assets/css/app-dark.min.css')}}">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('assets/images/layouts/layout-3.jpg')}}" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox"  id="rtl-mode-switch" data-appStyle="{{asset('assets/css/app-rtl.min.css')}}">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>


        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

                <!-- Responsive Table js -->
        <script src="{{asset('assets/libs/admin-resources/rwd-table/rwd-table.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{asset('assets/js/pages/table-responsive.init.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
