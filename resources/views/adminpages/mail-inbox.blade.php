<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/mail-inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:20:56 GMT -->

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
                        <h4 class="page-title">Mail Inbox</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javaScript:void();">BangoDash</a></li>
                            <li class="breadcrumb-item"><a href="javaScript:void();">Mail</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mail Inbox</li>
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
                                        <a href="mail-compose.html"
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
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox1"
                                                                            class="filled-in chk-col-primary"
                                                                            type="checkbox" checked="checked">
                                                                        <label for="checkbox1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Google Inc</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-info mr-1"></i>Lorem
                                                                        ipsum dolor sit amet, consectetuer
                                                                        adipiscing</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    08:23 AM
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox2" type="checkbox"
                                                                            class="filled-in chk-col-primary"
                                                                            checked="checked">
                                                                        <label for="checkbox2">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">John Deo</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-success mr-1"></i>Hi
                                                                        Bro, How are you?</a>
                                                                </td>
                                                                <td>

                                                                </td>
                                                                <td class="text-right">
                                                                    07:03 AM
                                                                </td>
                                                            </tr>

                                                            <tr class="table-active">
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox3" type="checkbox"
                                                                            class="filled-in chk-col-primary">
                                                                        <label for="checkbox3">

                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Director</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-blue mr-1"></i>Dolor
                                                                        sit amet, consectetuer adipiscing</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    03:00 AM
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox4" type="checkbox"
                                                                            class="filled-in chk-col-primary"
                                                                            checked="checked">
                                                                        <label for="checkbox4">

                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Manager</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-warning mr-1"></i>Lorem
                                                                        ipsum dolor sit amet, consectetuer adipiscing
                                                                        elit</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    20 Jan
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox5" type="checkbox">
                                                                        <label for="checkbox5">

                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Facebook</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit</a>
                                                                </td>
                                                                <td>

                                                                </td>
                                                                <td class="text-right">
                                                                    20 Jan
                                                                </td>
                                                            </tr>

                                                            <tr class="table-active">
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox6" type="checkbox"
                                                                            class="filled-in chk-col-primary"
                                                                            checked="checked">
                                                                        <label for="checkbox6">

                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Facebook</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit</a>
                                                                </td>
                                                                <td>

                                                                </td>
                                                                <td class="text-right">
                                                                    20 Jan
                                                                </td>
                                                            </tr>

                                                            <tr class="table-active">
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox7" type="checkbox"
                                                                            class="filled-in chk-col-primary">
                                                                        <label for="checkbox7">

                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Twitter Inc</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-info mr-1"></i>Lorem
                                                                        ipsum dolor sit amet, consectetuer adipiscing
                                                                        elit</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    20 Jan
                                                                </td>
                                                            </tr>

                                                            <tr class="table-active">
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox-7" type="checkbox"
                                                                            class="filled-in chk-col-primary">
                                                                        <label for="checkbox-7">

                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">LinkedIn</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-rose mr-1"></i>Lorem
                                                                        ipsum dolor sit amet, consectetuer adipiscing
                                                                        elit</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    20 Jan
                                                                </td>
                                                            </tr>

                                                            <tr class="table-active">
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox8" type="checkbox"
                                                                            class="filled-in chk-col-primary">
                                                                        <label for="checkbox8">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Yahoo</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    20 Jan
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox9" type="checkbox"
                                                                            class="filled-in chk-col-primary"
                                                                            checked="checked">
                                                                        <label for="checkbox9">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Google</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-info mr-1"></i>Lorem
                                                                        ipsum dolor sit amet, consectetuer adipiscing
                                                                        elit</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    20 Jan
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox10" type="checkbox"
                                                                            class="filled-in chk-col-primary">
                                                                        <label for="checkbox10">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">John Deo</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-success mr-1"></i>Hi
                                                                        brother, How are you?</a>
                                                                </td>
                                                                <td>

                                                                </td>
                                                                <td class="text-right">
                                                                    18 Jan
                                                                </td>
                                                            </tr>

                                                            <tr class="table-active">
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox11" type="checkbox"
                                                                            class="filled-in chk-col-primary"
                                                                            checked="checked">
                                                                        <label for="checkbox11">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Manager</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-primary mr-1"></i>Dolor
                                                                        sit amet, consectetuer adipiscing</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    18 Jan
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox12" type="checkbox"
                                                                            class="filled-in chk-col-primary">
                                                                        <label for="checkbox12">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Manager</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-warning mr-1"></i>Lorem
                                                                        ipsum dolor sit amet, consectetuer adipiscing
                                                                        elit</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    10 Jan
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox13" type="checkbox"
                                                                            class="filled-in chk-col-primary"
                                                                            checked="checked">
                                                                        <label for="checkbox13">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Facebook</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit</a>
                                                                </td>
                                                                <td>

                                                                </td>
                                                                <td class="text-right">
                                                                    15 Jan
                                                                </td>
                                                            </tr>

                                                            <tr class="table-active">
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox14" type="checkbox"
                                                                            class="filled-in chk-col-primary">
                                                                        <label for="checkbox14">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Google Inc</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit</a>
                                                                </td>
                                                                <td>

                                                                </td>
                                                                <td class="text-right">
                                                                    04 March
                                                                </td>
                                                            </tr>

                                                            <tr class="table-active">
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox15" type="checkbox"
                                                                            class="filled-in chk-col-primary"
                                                                            checked="checked">
                                                                        <label for="checkbox15">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Twitter Inc</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-info mr-1"></i>Lorem
                                                                        ipsum dolor sit amet, consectetuer adipiscing
                                                                        elit</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    12 March
                                                                </td>
                                                            </tr>

                                                            <tr class="table-active">
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox16" type="checkbox"
                                                                            class="filled-in chk-col-primary">
                                                                        <label for="checkbox16">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Jhon Smith</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html"><i
                                                                            class="fa fa-circle text-rose mr-1"></i>Lorem
                                                                        ipsum dolor sit amet, consectetuer adipiscing
                                                                        elit</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    15 March
                                                                </td>
                                                            </tr>

                                                            <tr class="table-active">
                                                                <td>
                                                                    <div class="mail-checkbox">
                                                                        <input id="checkbox17" type="checkbox"
                                                                            class="filled-in chk-col-primary">
                                                                        <label for="checkbox17">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="mail-rateing">
                                                                    <i class="fa fa-star"></i>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Google Inc</a>
                                                                </td>
                                                                <td>
                                                                    <a href="mail-read.html">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit</a>
                                                                </td>
                                                                <td>
                                                                    <i class="fa fa-paperclip"></i>
                                                                </td>
                                                                <td class="text-right">
                                                                    10 March
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>

                                                <hr>

                                                <div class="row">
                                                    <div class="col-7">
                                                        Showing 1 - 25 of 300
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="btn-group float-right">
                                                            <button type="button"
                                                                class="btn btn-outline-secondary waves-effect"><i
                                                                    class="fa fa-chevron-left"></i></button>
                                                            <button type="button"
                                                                class="btn btn-outline-secondary waves-effect"><i
                                                                    class="fa fa-chevron-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>

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

</body>

<!-- Mirrored from kvthemes.com/bangodash/color-version/mail-inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:20:56 GMT -->

</html>
