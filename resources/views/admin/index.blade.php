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
        @include('admin.layout.header')
        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layout.leftsidebar')
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
                                <h6 class="page-title">Dashboard</h6>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stats">
                                <div class="p-3 mini-stats-content">
                                    <div class="mb-4">
                                        <div class="float-end text-end">
                                            <span class="badge bg-light text-info my-2"> + 11% </span>
                                            <p class="text-white-50">From previous period</p>
                                        </div>
                                        <span class="peity-pie" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"]}' data-width="54" data-height="54">5/8</span>
                                    </div>
                                </div>
                                <div class="mx-3">
                                    <div class="card mb-0 border p-3 mini-stats-desc">
                                        <div class="d-flex">
                                            <h6 class="mt-0 mb-3">Orders</h6>
                                            <h5 class="ms-auto mt-0">1758</h5>
                                        </div>
                                        <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stats">
                                <div class="p-3 mini-stats-content">
                                    <div class="mb-4">
                                        <div class="float-end text-end">
                                            <span class="badge bg-light text-danger my-2"> - 27% </span>
                                            <p class="text-white-50">From previous period</p>
                                        </div>
                                        <span class="peity-donut" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"], "innerRadius": 18, "radius": 32 }' data-width="54" data-height="54">2/5</span>
                                    </div>
                                </div>
                                <div class="mx-3">
                                    <div class="card mb-0 border p-3 mini-stats-desc">
                                        <div class="d-flex">
                                            <h6 class="mt-0 mb-3">Revenue</h6>
                                            <h5 class="ms-auto mt-0">48259</h5>
                                        </div>
                                        <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stats">
                                <div class="p-3 mini-stats-content">
                                    <div class="mb-4">
                                        <div class="float-end text-end">
                                            <span class="badge bg-light text-primary my-2"> 0% </span>
                                            <p class="text-white-50">From previous period</p>
                                        </div>
                                        <span class="peity-pie" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"]}' data-width="54" data-height="54">3/8</span>
                                    </div>
                                </div>
                                <div class="mx-3">
                                    <div class="card mb-0 border p-3 mini-stats-desc">
                                        <div class="d-flex">
                                            <h6 class="mt-0 mb-3">Average Price</h6>
                                            <h5 class="ms-auto mt-0">$17.5</h5>
                                        </div>
                                        <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stats">
                                <div class="p-3 mini-stats-content">
                                    <div class="mb-4">
                                        <div class="float-end text-end">
                                            <span class="badge bg-light text-info my-2"> - 89% </span>
                                            <p class="text-white-50">From previous period</p>
                                        </div>
                                        <span class="peity-donut" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"], "innerRadius": 18, "radius": 32 }' data-width="54" data-height="54">3/5</span>
                                    </div>
                                </div>
                                <div class="mx-3">
                                    <div class="card mb-0 border p-3 mini-stats-desc">
                                        <div class="d-flex">
                                            <h6 class="mt-0 mb-3">Product Sold</h6>
                                            <h5 class="ms-auto mt-0">2048</h5>
                                        </div>
                                        <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="mt-0 header-title mb-5">Monthly Earning</h1>
                                    <div id="morris-bar-stacked" class="morris-chart-height morris-charts"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Sales Analytics</h4>

                                    <div class="row text-center mt-5">
                                        <div class="col-6">
                                            <h5 class="">56241</h5>
                                            <p class="text-muted font-size-14">Marketplace</p>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="">23651</h5>
                                            <p class="text-muted font-size-14">Total Income</p>
                                        </div>
                                    </div>

                                    <div id="morris-donut-example" class="dash-chart morris-charts text-center"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Weekly Sales</h4>
                                    <div class="py-4">
                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(101, 91, 230, 0.3)"],"stroke": ["rgba(101, 91, 230, 0.8)"]}' data-height="60">4,6,8,7,6,7,9,8,6,5,7,5,8,6,4,8,9,8,5,4</span>
                                    </div>


                                    <div class="row">
                                        <div class="col-6">
                                            <div class="weekly-sale-list text-center">
                                                <h5>145</h5>
                                                <p class="text-muted mb-0">This Week</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="weekly-sale-list text-center">
                                                <h5>132</h5>
                                                <p class="text-muted mb-0">Last Week</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card product-sales">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-4"><i class="ion-monitor h4 me-2 text-primary"></i> Computers</h5>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-6">
                                            <p class="text-muted">This Month Sales</p>
                                            <h4><sup class="me-1"><small>$</small></sup>14,352</h4>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-center">
                                                <span class="peity-pie" data-peity="{ &quot;fill&quot;: [&quot;#655be6&quot;, &quot;#f2f2f2&quot;]}" data-width="65" data-height="65" style="display: none;">70/100</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-muted mb-3">Top Cities Sales</p>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-muted mb-2">Los Angeles : <b class="text-dark">$ 8,235</b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="text-muted mb-2">San Francisco : <b class="text-dark">$ 7,256</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="card messages">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Latest Messages</h4>

                                    <nav class="mt-4">
                                        <div class="nav nav-tabs latest-messages-tabs nav-justified" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-first-tab" data-bs-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="true">
                                                <h4 class="mt-0">12</h4>
                                                <p class="text-muted mb-0">November</p>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-second-tab" data-bs-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="false">
                                                <h4 class="mt-0">13</h4>
                                                <p class="text-muted mb-0">November</p>
                                            </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                                            <div class="p-2 mt-2">
                                                <ul class="list-unstyled latest-message-list mb-0">
                                                    <li class="message-list-item">
                                                        <a href="#" class="text-dark">
                                                            <div class="d-flex">
                                                                <img class="me-3 avatar-sm rounded-circle" src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="">
                                                                <div class="">
                                                                    <h6 class="mt-0">Michael Bowen</h6>
                                                                    <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                                    <p class="time text-muted">Just Now</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="message-list-item">
                                                        <a href="#" class="text-dark">
                                                            <div class="d-flex">
                                                                <img class="me-3 avatar-sm rounded-circle" src="{{asset('assets/images/users/avatar-3.jpg')}}" alt="">
                                                                <div class="">
                                                                    <h6 class="mt-0">Danny Benson</h6>
                                                                    <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                                    <p class="time text-muted">12 min ago</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="message-list-item">
                                                        <a href="#" class="text-dark">
                                                            <div class="d-flex">
                                                                <img class="me-3 avatar-sm rounded-circle" src="{{asset('assets/images/users/avatar-4.jpg')}}" alt="">
                                                                <div class="">
                                                                    <h6 class="mt-0">Brady Smith</h6>
                                                                    <p class="text-muted mb-0">This theme is awesome!</p>
                                                                    <p class="time text-muted">23 min ago</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="message-list-item">
                                                        <a href="#" class="text-dark">
                                                            <div class="d-flex">
                                                                <img class="me-3 avatar-sm rounded-circle" src="{{asset('assets/images/users/avatar-5.jpg')}}" alt="">
                                                                <div class="">
                                                                    <h6 class="mt-0">Danny Benson</h6>
                                                                    <p class="text-muted mb-0">Nice to meet you</p>
                                                                    <p class="time text-muted">34 min ago</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                                            <div class="p-2 mt-2">
                                                <ul class="list-unstyled latest-message-list mb-0">
                                                    <li class="message-list-item">
                                                        <a href="#" class="text-dark">
                                                            <div class="d-flex">
                                                                <img class="me-3 avatar-sm rounded-circle" src="{{asset('assets/images/users/avatar-5.jpg')}}" alt="">
                                                                <div class="">
                                                                    <h6 class="mt-0">Albert Jones</h6>
                                                                    <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                                    <p class="time text-muted">yesterday, 09:42am</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="message-list-item">
                                                        <a href="#" class="text-dark">
                                                            <div class="d-flex">
                                                                <img class="me-3 avatar-sm rounded-circle" src="{{asset('assets/images/users/avatar-6.jpg')}}" alt="">
                                                                <div class="">
                                                                    <h6 class="mt-0">Danny Benson</h6>
                                                                    <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                                    <p class="time text-muted">yesterday, 11:07am</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="message-list-item">
                                                        <a href="#" class="text-dark">
                                                            <div class="d-flex">
                                                                <img class="me-3 avatar-sm rounded-circle" src="{{asset('assets/images/users/avatar-7.jpg')}}" alt="">
                                                                <div class="">
                                                                    <h6 class="mt-0">Joseph Sanchez</h6>
                                                                    <p class="text-muted mb-0">This theme is awesome!</p>
                                                                    <p class="time text-muted">yesterday, 01:17am</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="message-list-item">
                                                        <a href="#" class="text-dark">
                                                            <div class="d-flex">
                                                                <img class="me-3 avatar-sm rounded-circle" src="{{asset('assets/images/users/avatar-5.jpg')}}" alt="">
                                                                <div class="">
                                                                    <h6 class="mt-0">Daniel Anderson</h6>
                                                                    <p class="text-muted mb-0">Nice to meet you</p>
                                                                    <p class="time text-muted">34 min ago</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Recent activity</h4>

                                    <div class="p-2">
                                        <ul class="list-unstyled rec-acti-list">
                                            <li class="rec-acti-list-item">
                                                <div>
                                                    <p class="text-muted mb-1">14 Oct, 09:30am</p>
                                                    <h6 class="mb-0"><a href="#" class="text-dark">Meeting For a new Projects</a></h6>
                                                    <div class="delete-icon">
                                                        <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="rec-acti-list-item">
                                                <div>
                                                    <p class="text-muted mb-1">14 Oct, 11:05am</p>
                                                    <h6 class="mb-0"><a href="#" class="text-dark">Start a new Projects</a></h6>
                                                    <div class="delete-icon">
                                                        <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="rec-acti-list-item">
                                                <div>
                                                    <p class="text-muted mb-1">15 Oct, 10:16am</p>
                                                    <h6 class="mb-0"><a href="#" class="text-dark">Create Landing Psd template</a></h6>
                                                    <div class="delete-icon">
                                                        <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="rec-acti-list-item">
                                                <div>
                                                    <p class="text-muted mb-1">16 Oct, 11:24am</p>
                                                    <h6 class="mb-0"><a href="#" class="text-dark">Convert Psd to Html</a></h6>
                                                    <div class="delete-icon">
                                                        <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="rec-acti-list-item">
                                                <div>
                                                    <p class="text-muted mb-1">17 Oct, 01:36pm</p>
                                                    <h6 class="mb-0"><a href="#" class="text-dark">Redesign Html template</a></h6>
                                                    <div class="delete-icon">
                                                        <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-8 rec-acti-input">
                                                <input type="text" name="rec-input-text" class="form-control" placeholder="Add new Activity">
                                            </div>
                                            <div class="col-4 rec-acti-send">
                                                <div class="d-grid">
                                                    <button class="btn-primary btn" type="button"><i class="mdi mdi-plus me-1"></i>Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Latest Transactions</h4>
                                    <div class="table-responsive mt-4">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">(#) Id</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col" colspan="2">Amount</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">#16252</th>
                                                    <td>
                                                        <div>
                                                            <img src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="" class="avatar-xs rounded-circle me-2"> Rafael Reardon
                                                        </div>
                                                    </td>
                                                    <td>14/10/2018</td>
                                                    <td><span class="badge bg-success">Delivered</span></td>
                                                    <td>$80</td>
                                                    <td>1</td>
                                                    <td>$80</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#16253</th>
                                                    <td>
                                                        <div>
                                                            <img src="{{asset('assets/images/users/avatar-3.jpg')}}" alt="" class="avatar-xs rounded-circle me-2"> Thomas Hirsch
                                                        </div>
                                                    </td>
                                                    <td>15/10/2018</td>
                                                    <td><span class="badge bg-warning">Pending</span></td>
                                                    <td>$76</td>
                                                    <td>2</td>
                                                    <td>$152</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#16254</th>
                                                    <td>
                                                        <div>
                                                            <img src="{{asset('assets/images/users/avatar-4.jpg')}}" alt="" class="avatar-xs rounded-circle me-2"> Archer Desaillly
                                                        </div>
                                                    </td>
                                                    <td>15/10/2018</td>
                                                    <td><span class="badge bg-success">Delivered</span></td>
                                                    <td>$86</td>
                                                    <td>1</td>
                                                    <td>$86</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#16255</th>
                                                    <td>
                                                        <div>
                                                            <img src="{{asset('assets/images/users/avatar-5.jpg')}}" alt="" class="avatar-xs rounded-circle me-2"> Michael Flannery
                                                        </div>
                                                    </td>
                                                    <td>16/10/2018</td>
                                                    <td><span class="badge bg-danger">Cancel</span></td>
                                                    <td>$82</td>
                                                    <td>2</td>
                                                    <td>$164</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#16256</th>
                                                    <td>
                                                        <div>
                                                            <img src="{{asset('assets/images/users/avatar-6.jpg')}}" alt="" class="avatar-xs rounded-circle me-2"> Jamie Fishbourne
                                                        </div>
                                                    </td>
                                                    <td>17/10/2018</td>
                                                    <td><span class="badge bg-success">Delivered</span></td>
                                                    <td>$84</td>
                                                    <td>2</td>
                                                    <td>$84</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
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



</body>

</html>
