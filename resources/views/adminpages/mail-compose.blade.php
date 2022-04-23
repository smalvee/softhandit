<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/mail-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:20:56 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BangoDash Bootstrap Admin Template</title>
    <!--favicon-->
    <link rel="icon" href="admin/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="admin/plugins/summernote/dist/summernote-bs4.css" />
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
                        <h4 class="page-title">Mail Compose</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javaScript:void();">BangoDash</a></li>
                            <li class="breadcrumb-item"><a href="javaScript:void();">Mail</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mail Compose</li>
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
                            <div class="card-body">

                                <div class="row">

                                    <!-- Left sidebar -->
                                    <div class="col-lg-3 col-md-4">
                                        <a href="{{ url('mail-inbox') }}"
                                            class="btn btn-danger waves-effect waves-light btn-block">Return to
                                            inbox</a>
                                        <div class="card mt-3">
                                            <div class="list-group">
                                                <a href="javascript:void();" class="list-group-item active"><i
                                                        class="fa fa-inbox mr-2"></i>Inbox <b>(12)</b></a>
                                                <a href="javascript:void();" class="list-group-item"><i
                                                        class="fa fa-star-o mr-2"></i>Starred</a>
                                                <a href="javascript:void();" class="list-group-item"><i
                                                        class="fa fa-file-text-o mr-2"></i>Draft <b>(10)</b></a>
                                                <a href="javascript:void();" class="list-group-item"><i
                                                        class="fa fa-paper-plane-o mr-2"></i>Sent Mail</a>
                                                <a href="javascript:void();" class="list-group-item"><i
                                                        class="fa fa-trash-o mr-2"></i>Trash <b>(320)</b></a>
                                                <a href="javascript:void();" class="list-group-item"><i
                                                        class="fa fa-bookmark mr-2"></i>Important <b>(5)</b></a>
                                                <a href="javascript:void();" class="list-group-item">Labels</a>
                                                <a href="javascript:void();" class="list-group-item"><span
                                                        class="fa fa-circle text-info float-right"></span>Work</a>
                                                <a href="javascript:void();" class="list-group-item"><span
                                                        class="fa fa-circle text-warning float-right"></span>Design</a>
                                                <a href="javascript:void();" class="list-group-item"><span
                                                        class="fa fa-circle text-primary float-right"></span>Family</a>
                                                <a href="javascript:void();" class="list-group-item"><span
                                                        class="fa fa-circle text-rose float-right"></span>Friends</a>
                                                <a href="javascript:void();" class="list-group-item"><span
                                                        class="fa fa-circle text-success float-right"></span>Office</a>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End Left sidebar -->

                                    <!-- Right Sidebar -->
                                    <div class="col-lg-9 col-md-8">

                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="To">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Cc">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Bcc">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Subject">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="summernoteEditor" placeholder="Message body" style="height: 200px"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect waves-light m-1"><i
                                                                class="fa fa-floppy-o"></i> Send</button>
                                                        <button type="button"
                                                            class="btn btn-danger waves-effect waves-light m-1"><i
                                                                class="fa fa-trash-o"></i> Draft</button>
                                                        <button type="button"
                                                            class="btn btn-dark waves-effect waves-light m-1">
                                                            <span>Discard</span> <i class="fa fa-send ml-10"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div> <!-- card body -->
                                        </div> <!-- card -->
                                    </div> <!-- end Col-9 -->
                                </div><!-- End row -->
                            </div>
                        </div>
                    </div>
                </div><!-- End row -->

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

    <script src="admin/plugins/summernote/dist/summernote-bs4.min.js"></script>
    <script>
        $('#summernoteEditor').summernote({
            height: 400,
            tabsize: 2
        });
    </script>

</body>

<!-- Mirrored from kvthemes.com/bangodash/color-version/mail-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:21:03 GMT -->

</html>
