<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:08:05 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin</title>
    <!--favicon-->
    <link rel="icon" href="admin/images/favicon.ico" type="image/x-icon">
    <!-- notifications css -->
    <link rel="stylesheet" href="admin/plugins/notifications/css/lobibox.min.css" />
    <!-- Vector CSS -->
    <link href="admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="admin/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="admin/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="admin/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="admin/css/app-style.css" rel="stylesheet" />

</head>

<body onload="info_noti()">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('adminpages.sidebar')
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('adminpages.header')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                <div class="row mt-4">
                    <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card gradient-scooter">
                            <div class="card-body p-4">
                                <div class="media">
                                    <div class="media-body text-left">
                                        <h4 class="text-white">2050</h4>
                                        <span class="text-white">Total Orders</span>
                                    </div>
                                    <div class="align-self-center w-icon"><i
                                            class="icon-basket-loaded text-white"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card gradient-bloody">
                            <div class="card-body p-4">
                                <div class="media">
                                    <div class="media-body text-left">
                                        <h4 class="text-white">3250</h4>
                                        <span class="text-white">Total Expenses</span>
                                    </div>
                                    <div class="align-self-center w-icon"><i class="icon-wallet text-white"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card gradient-quepal">
                            <div class="card-body p-4">
                                <div class="media">
                                    <div class="media-body text-left">
                                        <h4 class="text-white">87.5%</h4>
                                        <span class="text-white">Total Revenue</span>
                                    </div>
                                    <div class="align-self-center w-icon"><i class="icon-pie-chart text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card gradient-blooker">
                            <div class="card-body p-4">
                                <div class="media">
                                    <div class="media-body text-left">
                                        <h4 class="text-white">2550</h4>
                                        <span class="text-white">New Users</span>
                                    </div>
                                    <div class="align-self-center w-icon"><i class="icon-user text-white"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->

                <div class="row">
                    <div class="col-12 col-lg-7 col-xl-7">
                        <div class="card">
                            <div class="card-header">
                                Product Sales
                                <div class="card-action">
                                    <div class="dropdown">
                                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-toggle="dropdown">
                                            <i class="icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void();">Action</a>
                                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="dashboard-chart-1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-xl-5">
                        <div class="card">
                            <div class="card-header">
                                Top Selling Categories
                                <div class="card-action">
                                    <div class="dropdown">
                                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-toggle="dropdown">
                                            <i class="icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void();">Action</a>
                                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="dashboard-chart-2" height="220"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Recent Orders
                                <div class="card-action">
                                    <div class="dropdown">
                                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-toggle="dropdown">
                                            <i class="icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void();">Action</a>
                                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Photo</th>
                                                <th>Product ID</th>
                                                <th>Status</th>
                                                <th>Shipping</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td>Iphone 5</td>
                                            <td><img src="admin/images/products/01.png" class="product-img"
                                                    alt="product img"></td>
                                            <td>#9405822</td>
                                            <td><span class="badge gradient-quepal text-white shadow">Paid</span></td>
                                            <td>
                                                <div class="progress shadow" style="height: 7px;">
                                                    <div class="progress-bar gradient-quepal" role="progressbar"
                                                        style="width: 50%"></div>
                                                </div>
                                            </td>
                                            <td>$ 1250.00</td>
                                            <td>03 Aug 2017</td>
                                        </tr>

                                        <tr>
                                            <td>Earphone GL</td>
                                            <td><img src="admin/images/products/02.png" class="product-img"
                                                    alt="product img"></td>
                                            <td>#9405820</td>
                                            <td><span class="badge gradient-blooker text-white shadow">Pending</span>
                                            </td>
                                            <td>
                                                <div class="progress shadow" style="height: 7px;">
                                                    <div class="progress-bar gradient-blooker" role="progressbar"
                                                        style="width: 60%"></div>
                                                </div>
                                            </td>
                                            <td>$ 1500.00</td>
                                            <td>03 Aug 2017</td>
                                        </tr>

                                        <tr>
                                            <td>HD Hand Camera</td>
                                            <td><img src="admin/images/products/03.png" class="product-img"
                                                    alt="product img"></td>
                                            <td>#9405830</td>
                                            <td><span class="badge gradient-bloody text-white shadow">Failed</span>
                                            </td>
                                            <td>
                                                <div class="progress shadow" style="height: 7px;">
                                                    <div class="progress-bar gradient-bloody" role="progressbar"
                                                        style="width: 70%"></div>
                                                </div>
                                            </td>
                                            <td>$ 1400.00</td>
                                            <td>03 Aug 2017</td>
                                        </tr>

                                        <tr>
                                            <td>Clasic Shoes</td>
                                            <td><img src="admin/images/products/04.png" class="product-img"
                                                    alt="product img"></td>
                                            <td>#9405825</td>
                                            <td><span class="badge gradient-quepal text-white shadow">Paid</span></td>
                                            <td>
                                                <div class="progress shadow" style="height: 7px;">
                                                    <div class="progress-bar gradient-quepal" role="progressbar"
                                                        style="width: 70%"></div>
                                                </div>
                                            </td>
                                            <td>$ 1200.00</td>
                                            <td>03 Aug 2017</td>
                                        </tr>

                                        <tr>
                                            <td>Hand Watch</td>
                                            <td><img src="admin/images/products/05.png" class="product-img"
                                                    alt="product img"></td>
                                            <td>#9405840</td>
                                            <td><span class="badge gradient-bloody text-white shadow">Failed</span>
                                            </td>
                                            <td>
                                                <div class="progress shadow" style="height: 7px;">
                                                    <div class="progress-bar gradient-bloody" role="progressbar"
                                                        style="width: 40%"></div>
                                                </div>
                                            </td>
                                            <td>$ 1800.00</td>
                                            <td>03 Aug 2017</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->

                <div class="row">
                    <div class="col-12 col-lg-7 col-xl-8">
                        <div class="card">
                            <div class="card-header">Top Selling Country
                                <div class="card-action">
                                    <div class="dropdown">
                                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-toggle="dropdown">
                                            <i class="icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void();">Action</a>
                                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-7 col-xl-8 border-right">
                                        <div id="dashboard-map" style="height: 250px"></div>
                                    </div>
                                    <div class="col-lg-5 col-xl-4">

                                        <p><i class="flag-icon flag-icon-us mr-1"></i> USA <span
                                                class="float-right">50%</span></p>
                                        <div class="progress" style="height: 7px;">
                                            <div class="progress-bar gradient-royal" role="progressbar"
                                                style="width: 50%"></div>
                                        </div>

                                        <p class="mt-3"><i class="flag-icon flag-icon-ca mr-1"></i> Canada
                                            <span class="float-right">65%</span>
                                        </p>
                                        <div class="progress" style="height: 7px;">
                                            <div class="progress-bar gradient-ibiza" role="progressbar"
                                                style="width: 65%"></div>
                                        </div>

                                        <p class="mt-3"><i class="flag-icon flag-icon-gb mr-1"></i> England
                                            <span class="float-right">85%</span>
                                        </p>
                                        <div class="progress" style="height: 7px;">
                                            <div class="progress-bar gradient-meridian" role="progressbar"
                                                style="width: 85%"></div>
                                        </div>

                                        <p class="mt-3"><i class="flag-icon flag-icon-au mr-1"></i>
                                            Australia <span class="float-right">75%</span></p>
                                        <div class="progress" style="height: 7px;">
                                            <div class="progress-bar gradient-orange" role="progressbar"
                                                style="width: 75%"></div>
                                        </div>

                                        <p class="mt-3"><i class="flag-icon flag-icon-in mr-1"></i> India
                                            <span class="float-right">45%</span>
                                        </p>
                                        <div class="progress" style="height: 7px;">
                                            <div class="progress-bar gradient-violet" role="progressbar"
                                                style="width: 55%"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 col-xl-4">
                        <div class="card gradient-violet">
                            <div class="card-body">
                                <div class="media">
                                    <div class="align-self-center"><span id="dashboard-chart-3"></span></div>
                                    <div class="media-body text-right">
                                        <h4 class="text-white">2050</h4>
                                        <span class="text-white">Page Views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card gradient-ibiza">
                            <div class="card-body">
                                <div class="media">
                                    <div class="align-self-center"><span id="dashboard-chart-4"></span></div>
                                    <div class="media-body text-right">
                                        <h4 class="text-white">3250</h4>
                                        <span class="text-white">Total Clicks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card gradient-meridian">
                            <div class="card-body">
                                <div class="media">
                                    <div class="align-self-center"><span id="dashboard-chart-5"></span></div>
                                    <div class="media-body text-right">
                                        <h4 class="text-white">82 %</h4>
                                        <span class="text-white">Bounce Rate</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Row-->

                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-header">
                            Sales This Week
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                        data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void();">Action</a>
                                        <a class="dropdown-item" href="javascript:void();">Another action</a>
                                        <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="dashboard-chart-6" height="180"></canvas>
                        </div>
                        <ul class="list-group list-group-flush list shadow-none">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Samsung <span
                                    class="badge gradient-purpink text-white badge-pill shadow">50</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Apple <span
                                    class="badge gradient-orange
             text-white badge-pill shadow">50</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Nokia <span
                                    class="badge gradient-meridian text-white badge-pill">50</span></li>
                        </ul>
                    </div>
                    <div class="card border-right">
                        <div class="card-header">
                            Profit Ratio
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                        data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void();">Action</a>
                                        <a class="dropdown-item" href="javascript:void();">Another action</a>
                                        <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="dashboard-chart-7" height="180"></canvas>
                        </div>
                        <ul class="list-group list-group-flush list shadow-none">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Gross Profit
                                <span class="badge gradient-quepal text-white badge-pill shadow">05</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Revenue <span
                                    class="badge gradient-violet
             text-white badge-pill shadow">08</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Expense <span
                                    class="badge gradient-ibiza text-white badge-pill shadow">07</span></li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Top Trending Products
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                        data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void();">Action</a>
                                        <a class="dropdown-item" href="javascript:void();">Another action</a>
                                        <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="dashboard-chart-8" height="180"></canvas>
                        </div>
                        <ul class="list-group list-group-flush list shadow-none">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Jeans <span
                                    class="badge gradient-knight text-white badge-pill shadow">25</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">T-Shirts
                                <span class="badge gradient-dusk
             text-white badge-pill shadow">25</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Shoes <span
                                    class="badge gradient-yoda text-white badge-pill shadow">25</span></li>
                        </ul>
                    </div>
                </div>

                <!--End Dashboard Content-->

            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        @include('adminpages\footer')
        <!--End footer-->

    </div>
    <!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="admin/js/jquery.min.js"></script>
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="admin/plugins/simplebar/js/simplebar.js"></script>
    <!-- waves effect js -->
    <script src="admin/js/waves.js"></script>
    <!-- sidebar-menu js -->
    <script src="admin/js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
    <script src="admin/js/app-script.js"></script>

    <!-- Vector map JavaScript -->
    <script src="admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Sparkline JS -->
    <script src="admin/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
    <!-- Chart js -->
    <script src="admin/plugins/Chart.js/Chart.min.js"></script>
    <!--notification js -->
    <script src="admin/plugins/notifications/js/lobibox.min.js"></script>
    <script src="admin/plugins/notifications/js/notifications.min.js"></script>
    <!-- Index js -->
    <script src="admin/js/index.js"></script>

</body>

<!-- Mirrored from kvthemes.com/bangodash/color-version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:09:40 GMT -->

</html>
