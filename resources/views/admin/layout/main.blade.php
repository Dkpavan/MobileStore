<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Dashboard | Foxia - Responsive Bootstrap 5 Admin Dashboard</title>
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
    @include('admin.layout.loader')
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!--header-->
        @include('admin.layout.leftsidebarheader')
        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layout.leftsidebar')
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div id="content">
                @yield('content')
            </div>
            <!-- End Page-content -->
            @include('admin.layout.footer')
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
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="{{asset('assets/css/app-rtl.min.css')}}">
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

    <script src="{{asset('assets/libs/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>


    <script src="{{asset('assets/libs/peity/jquery.peity.min.js')}}"></script>

    <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>

    <!-- Responsive Table js -->
    <script src="{{asset('assets/libs/admin-resources/rwd-table/rwd-table.min.js')}}"></script>

    <!-- Init js -->
    <script src="{{asset('assets/js/pages/table-responsive.init.js')}}"></script>

</body>

</html>

