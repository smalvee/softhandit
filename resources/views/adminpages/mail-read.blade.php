<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/mail-read.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:21:03 GMT -->

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
                        <h4 class="page-title">Mail Read</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javaScript:void();">BangoDash</a></li>
                            <li class="breadcrumb-item"><a href="javaScript:void();">Mail</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mail Read</li>
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
                                        <a href="{{ url('mail-compose') }}"
                                            class="btn btn-danger waves-effect waves-light btn-block">New Mail</a>
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
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="btn-toolbar" role="toolbar">
                                                    <div class="btn-group mr-1">
                                                        <button type="button"
                                                            class="btn btn-outline-primary waves-effect waves-light"><i
                                                                class="fa fa-inbox"></i></button>
                                                        <button type="button"
                                                            class="btn btn-outline-primary waves-effect waves-light"><i
                                                                class="fa fa-refresh"></i></button>
                                                        <button type="button"
                                                            class="btn btn-outline-primary waves-effect waves-light"><i
                                                                class="fa fa-trash-o"></i></button>
                                                    </div>
                                                    <div class="btn-group mr-1">
                                                        <button type="button"
                                                            class="btn btn-outline-primary dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa fa-folder"></i>
                                                            <b class="caret"></b>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="javaScript:void();"
                                                                class="dropdown-item">Action</a>
                                                            <a href="javaScript:void();" class="dropdown-item">Another
                                                                action</a>
                                                            <a href="javaScript:void();"
                                                                class="dropdown-item">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="javaScript:void();"
                                                                class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group mr-1">
                                                        <button type="button"
                                                            class="btn btn-outline-primary waves-effect waves-light dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa fa-tag"></i>
                                                            <b class="caret"></b>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="javaScript:void();"
                                                                class="dropdown-item">Action</a>
                                                            <a href="javaScript:void();" class="dropdown-item">Another
                                                                action</a>
                                                            <a href="javaScript:void();"
                                                                class="dropdown-item">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="javaScript:void();"
                                                                class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>

                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-outline-primary waves-effect waves-light dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            More
                                                            <span class="caret"></span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="javaScript:void();"
                                                                class="dropdown-item">Action</a>
                                                            <a href="javaScript:void();" class="dropdown-item">Another
                                                                action</a>
                                                            <a href="javaScript:void();"
                                                                class="dropdown-item">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="javaScript:void();"
                                                                class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="position-relative has-icon-right">
                                                    <input type="text" class="form-control"
                                                        placeholder="search mail">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-search text-info"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- End row -->
                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <div class="media mb-3">
                                                    <img src="admin/images/avatars/avatar-2.png"
                                                        class="rounded-circle mr-3 mail-img shadow" alt="media image">
                                                    <div class="media-body">
                                                        <span class="media-meta float-right">08:22 AM</span>
                                                        <h4 class="text-primary m-0">Jhon Deo</h4>
                                                        <small class="text-muted">From : info@example.com</small>
                                                    </div>
                                                </div> <!-- media -->

                                                <p><b>Hi Sir...</b></p>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                    penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                                </p>
                                                <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                                    consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
                                                    viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus
                                                    varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                                                    nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                                    Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem
                                                    quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam
                                                    quam nunc, blandit vel, luctus pulvinar,</p>
                                                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
                                                    aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                                                    imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                                                    mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum
                                                    semper nisi.</p>

                                                <hr>
                                                <h4> <i class="fa fa-paperclip mr-2"></i> Attachments <span>(3)</span>
                                                </h4>
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-3">
                                                        <a href="javascript:void();"> <img
                                                                src="admin/images/gallery/2.jpg" alt="attachment"
                                                                class="img-thumbnail"> </a>
                                                    </div>
                                                    <div class="col-sm-4 col-md-3">
                                                        <a href="javascript:void();"> <img
                                                                src="admin/images/gallery/3.jpg" alt="attachment"
                                                                class="img-thumbnail"> </a>
                                                    </div>
                                                    <div class="col-sm-4 col-md-3">
                                                        <a href="javascript:void();"> <img
                                                                src="admin/images/gallery/4.jpg" alt="attachment"
                                                                class="img-thumbnail"> </a>
                                                    </div>
                                                </div>

                                                <form class="mt-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="9" placeholder="Reply here..."></textarea>
                                                    </div>
                                                </form>

                                                <div class="text-right">
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect waves-light mt-3"><i
                                                            class="fa fa-send mr-1"></i> Send</button>
                                                </div>

                                            </div>
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

</body>

<!-- Mirrored from kvthemes.com/bangodash/color-version/mail-read.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:21:03 GMT -->

</html>
