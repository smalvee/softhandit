<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:33:26 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BangoDash Bootstrap Admin Template</title>
    <!--favicon-->
    <link rel="icon" href="admin/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet" />
    <!--Data Tables -->
    <link href="admin/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="admin/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- animate CSS-->
    <link href="admin/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="admin/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="admin/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="admin/css/app-style.css" rel="stylesheet" />
    <style>
        .actionbtn {
            font-size: .75rem;
            font-weight: 600;
            letter-spacing: 1px;
            padding: 10px 20px;
            border-radius: 0.25rem;
            text-transform: uppercase;
            color: white;
            background-color: #008cff;
            border-color: #008cff;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            display: inline-block;
        }
    </style>

</head>

<body>

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
                <!-- Breadcrumb-->
                <div class="row pt-2 pb-2">
                    <div class="col-sm-9">
                        <h4 class="page-title">Data Tables</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javaScript:void();">BangoDash</a></li>
                            <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                        </ol>
                    </div>
                    <div class="col-sm-3">
                        <div class="btn-group float-sm-right">
                            <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i
                                    class="fa fa-cog mr-1"></i> Setting</button>
                            <button type="button"
                                class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                                data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu">
                                <a href="javaScript:void();" class="dropdown-item">Action</a>
                                <a href="javaScript:void();" class="dropdown-item">Another action</a>
                                <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Breadcrumb-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="default-datatable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Departemnt</th>
                                                <th>Designation</th>
                                                <th>Salary</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            use App\Models\team;
                                            $member_list = team::all();
                                            ?>


                                            @foreach ($member_list as $item)
                                                <tr>
                                                    <td>{{ $item->member_name }}</td>
                                                    <td>{{ $item->member_type }}</td>
                                                    <td>{{ $item->member_department }}</td>
                                                    <td>{{ $item->member_designation }}</td>
                                                    <td>{{ $item->member_mobile }}</td>
                                                    <td>
                                                        <a href="member_profile/{{ $item->id }}" class="actionbtn">Action</a>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Departemnt</th>
                                                <th>Designation</th>
                                                <th>Salary</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row-->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Departemnt</th>
                                                <th>Designation</th>
                                                <th>Salary</th>
                                                <th>Start Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                            @foreach ($member_list as $item)
                                                <tr>
                                                    <td>{{ $item->member_name }}</td>
                                                    <td>{{ $item->member_type }}</td>
                                                    <td>{{ $item->member_department }}</td>
                                                    <td>{{ $item->member_designation }}</td>
                                                    <td>{{ $item->member_mobile }}</td>
                                                    <td>{{ $item->created_at }}</td>></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Departemnt</th>
                                                <th>Designation</th>
                                                <th>Salary</th>
                                                <th>Start Date</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row-->

            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        @include('adminpages.footer')
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

    <!--Data Tables js-->
    <script src="admin/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
    <script src="admin/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
    <script src="admin/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
    <script src="admin/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="admin/plugins/bootstrap-datatable/js/jszip.min.js"></script>
    <script src="admin/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
    <script src="admin/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
    <script src="admin/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
    <script src="admin/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
    <script src="admin/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
        $(document).ready(function() {
            //Default data table
            $('#default-datatable').DataTable();


            var table = $('#example').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');

        });
    </script>

</body>

<!-- Mirrored from kvthemes.com/bangodash/color-version/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:36:17 GMT -->

</html>
