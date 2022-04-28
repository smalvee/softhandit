<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/pages-user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:37:15 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile</title>
    <!--favicon-->
    <link rel="icon" href="../admin//images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="../admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="../admin/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="../admin/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="../admin/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="../admin/css/app-style.css" rel="stylesheet" />

</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('...adminpages.sidebar')
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('...adminpages.header')
        <!--End topbar header-->

        <?php
        use App\Models\team;
        use App\Models\member_profile;

        $mainid = $id;

        $member_list = team::where('id', $id)->get();
        ?>

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumb-->
                <div class="row pt-2 pb-2">
                    <div class="col-sm-9">
                        <h4 class="page-title">User Profile</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javaScript:void();">BangoDash</a></li>
                            <li class="breadcrumb-item"><a href="javaScript:void();">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
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


                @foreach ($member_list as $item)
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="profile-card-4">
                                <div class="card">
                                    <div class="card-body text-center bg-primary rounded-top">
                                        <div class="user-box">
                                            <?php

                                                $member_id = member_profile::where('main_id', $id)->get();
                                                $check = null;
                                                ?>

                                                @foreach ($member_id as $id)
                                                    <img src="../uploads/profile/{{ $id->profile_picture }}"
                                                        alt="user avatar" />
                                                @endforeach


                                        </div>

                                        <h5 class="mb-1 text-white">{{ $item->member_name }}</h5>
                                        <h6 class="text-light">{{ $item->member_designation }}</h6>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group shadow-none">
                                            <li class="list-group-item">
                                                <div class="list-icon">
                                                    <i class="fa fa-phone-square"></i>
                                                </div>
                                                <div class="list-details">
                                                    <span>{{ $item->member_mobile }}</span>
                                                    <small>Mobile Number</small>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="list-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <div class="list-details">
                                                    <span>{{ $item->member_email }}</span>
                                                    <small>Email Address</small>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="list-icon">
                                                    <i class="fa fa-money"></i>
                                                </div>


                                                @foreach ($member_id as $id)
                                                    <?php $check = $id->main_id; ?>
                                                    <div class="list-details">
                                                        <span>{{ $id->salary }}</span>
                                                        <small>Salary</small>
                                                    </div>
                                                @endforeach
                                            </li>
                                            <form action="{{ url('create_member_profile') }}" method="POST">
                                                @csrf

                                                <?php
                                                    if ($check == NULL) { ?>
                                                <li class="list-group-item">
                                                    <div class="list-icon">
                                                        <i class="fa fa-money"></i>
                                                    </div>

                                                    <div class="list-details">
                                                        <input type="hidden" name="main_id" value="{{ $item->id }}">
                                                        <input type="hidden" name="about_yourself">
                                                        <input type="hidden" name="hobbies">
                                                        <span>Insert Salary</span>
                                                        <input class="form-control" type="number" name="salary"
                                                            placeholder="Ensert Salary" required>
                                                        <input type="hidden" name="profile_picture">

                                                    </div>
                                                </li>


                                                <button type="submit" class="btn btn-primary">Publish Profile</button>
                                                <?php }
                                                    else { ?>
                                                <label class="btn btn-primary">Published</label>
                                                <?php }
                                                ?>

                                            </form>
                                        </ul>
                                        {{-- <div class="row text-center mt-4">
                                            <div class="col p-2">
                                                <h4 class="mb-1 line-height-5">154</h4>
                                                <small class="mb-0 font-weight-bold">Projects</small>
                                            </div>
                                            <div class="col p-2">
                                                <h4 class="mb-1 line-height-5">2.2k</h4>
                                                <small class="mb-0 font-weight-bold">Followers</small>
                                            </div>
                                            <div class="col p-2">
                                                <h4 class="mb-1 line-height-5">9.1k</h4>
                                                <small class="mb-0 font-weight-bold">Views</small>
                                            </div>
                                        </div> --}}
                                    </div>

                                    {{-- <div class="card-footer text-center">
                                        <a href="javascript:void()"
                                            class="btn-social btn-facebook waves-effect waves-light m-1"><i
                                                class="fa fa-facebook"></i></a>
                                        <a href="javascript:void()"
                                            class="btn-social btn-google-plus waves-effect waves-light m-1"><i
                                                class="fa fa-google-plus"></i></a>
                                        <a href="javascript:void()"
                                            class="list-inline-item btn-social btn-behance waves-effect waves-light"><i
                                                class="fa fa-behance"></i></a>
                                        <a href="javascript:void()"
                                            class="list-inline-item btn-social btn-dribbble waves-effect waves-light"><i
                                                class="fa fa-dribbble"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>




                        <?php
                        if ($check == NULL) { ?>
                        {{-- <button type="submit" class="btn btn-primary">Publish Profile</button> --}}
                        <?php }
                        else { ?>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-pills nav-pills-primary nav-justified">
                                        <li class="nav-item">
                                            <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                                class="nav-link active"><i class="icon-user"></i> <span
                                                    class="hidden-xs">Profile</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void();" data-target="#messages" data-toggle="pill"
                                                class="nav-link"><i class="icon-user"></i> <span
                                                    class="hidden-xs">Change Profile Picture</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void();" data-target="#edit" data-toggle="pill"
                                                class="nav-link"><i class="icon-note"></i> <span
                                                    class="hidden-xs">Edit</span></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="profile">
                                            <h5 class="mb-3">User Profile</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6>About</h6>
                                                    <p>
                                                        <?php
                                                            if ($id->about_yourself == NULL) {?>
                                                    <p style="color: red;">Please Complete Your Profile In edit option
                                                    </p>
                                                    <?php }
                                                            ?>
                                                    {{ $id->about_yourself }}
                                                    </p>
                                                    <h6>Hobbies</h6>
                                                    <p>
                                                        <?php
                                                            if ($id->hobbies == NULL) {?>
                                                    <p style="color: red;">Please Complete Your Profile In edit option
                                                    </p>
                                                    <?php }
                                                            ?>
                                                    {{ $id->hobbies }}
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>Recent badges</h6>
                                                    <a href="javascript:void();"
                                                        class="badge badge-dark badge-pill">html5</a>
                                                    <a href="javascript:void();"
                                                        class="badge badge-dark badge-pill">react</a>
                                                    <a href="javascript:void();"
                                                        class="badge badge-dark badge-pill">codeply</a>
                                                    <a href="javascript:void();"
                                                        class="badge badge-dark badge-pill">angularjs</a>
                                                    <a href="javascript:void();"
                                                        class="badge badge-dark badge-pill">css3</a>
                                                    <a href="javascript:void();"
                                                        class="badge badge-dark badge-pill">jquery</a>
                                                    <a href="javascript:void();"
                                                        class="badge badge-dark badge-pill">bootstrap</a>
                                                    <a href="javascript:void();"
                                                        class="badge badge-dark badge-pill">responsive-design</a>
                                                    <hr>
                                                    {{-- <span class="badge badge-primary"><i class="fa fa-user"></i> 900
                                                        Followers</span>
                                                    <span class="badge badge-success"><i class="fa fa-cog"></i> 43
                                                        Forks</span>
                                                    <span class="badge badge-danger"><i class="fa fa-eye"></i> 245
                                                        Views</span> --}}
                                                </div>
                                                <div class="col-md-12">
                                                    <h5 class="mt-2 mb-3"><span
                                                            class="fa fa-clock-o ion-clock float-right"></span> Recent
                                                        Activity</h5>
                                                    <table class="table table-hover table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <strong>{{ $item->member_name }}</strong> Next
                                                                    Working update will arrive here soon
                                                                    <strong>`Keep update`</strong>
                                                                </td>
                                                            </tr>
                                                            {{-- <tr>
                                                                <td>
                                                                    <strong>Gary</strong> deleted My Board1 in
                                                                    <strong>`Discussions`</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>Kensington</strong> deleted MyBoard3 in
                                                                    <strong>`Discussions`</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>John</strong> deleted My Board1 in
                                                                    <strong>`Discussions`</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>Skell</strong> deleted his post Look at Why
                                                                    this
                                                                    is.. in <strong>`Discussions`</strong>
                                                                </td>
                                                            </tr> --}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--/row-->
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <div class="alert alert-info alert-dismissible" role="alert">
                                                <button type="button" class="close"
                                                    data-dismiss="alert">&times;</button>
                                                <div class="alert-icon">
                                                    <i class="icon-info"></i>
                                                </div>
                                                <div class="alert-message">
                                                    <span><strong>Info!</strong>Upload Latest Photo</span>
                                                </div>
                                            </div>

                                            <div>
                                                <form action="{{ url('update_profile_picture') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label form-control-label">Change
                                                            profile</label>
                                                        <div class="col-lg-9">
                                                            <input type="hidden" name="picture_id"
                                                                value="{{ $id->id }}">
                                                            <input name="profile_picture" class="form-control"
                                                                type="file">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-lg-3 col-form-label form-control-label"></label>
                                                        <div class="col-lg-9">
                                                            <input type="submit" class="btn btn-primary" value="Upload">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            {{-- <table class="table table-hover table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="float-right font-weight-bold">3 hrs ago</span>
                                                            Here is your a link to the latest summary report from the..
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="float-right font-weight-bold">Yesterday</span>
                                                            There has been a request on your account since that was..
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="float-right font-weight-bold">9/10</span>
                                                            Porttitor vitae ultrices quis, dapibus id dolor. Morbi
                                                            venenatis
                                                            lacinia rhoncus.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="float-right font-weight-bold">9/4</span>
                                                            Vestibulum tincidunt ullamcorper eros eget luctus.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="float-right font-weight-bold">9/4</span>
                                                            Maxamillion ais the fix for tibulum tincidunt ullamcorper
                                                            eros.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table> --}}
                                        </div>
                                        <div class="tab-pane" id="edit">
                                            <form action="{{ url('member_profile_update') }}" method="POST">
                                                @csrf
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label">Name</label>
                                                    <div class="col-lg-9">
                                                        <input type="hidden" name="pp_id" value="{{ $id->id }}">
                                                        <input class="form-control" type="text"
                                                            value="{{ $item->member_name }}" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label">Email</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="email"
                                                            value="{{ $item->member_email }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label">Address</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text"
                                                            value="{{ $item->member_address }}" placeholder="Street"
                                                            readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label">Hobbies</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" name="hobbies"
                                                            value="{{ $id->hobbies }}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">About
                                                        Yourself</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" name="about_yourself"
                                                            value="{{ $id->about_yourself }}">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                                    <div class="col-lg-9">
                                                        <button type="submit" class="btn btn-primary">Update
                                                            Info</button>
                                                    </div>
                                                </div>
                                            </form>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }
                    ?>































                    </div>
                @endforeach






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
    <script src="../admin//js/jquery.min.js"></script>
    <script src="../admin//js/popper.min.js"></script>
    <script src="../admin//js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="../admin//plugins/simplebar/js/simplebar.js"></script>
    <!-- waves effect js -->
    <script src="../admin//js/waves.js"></script>
    <!-- sidebar-menu js -->
    <script src="../admin//js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
    <script src="../admin//js/app-script.js"></script>

</body>

<!-- Mirrored from kvthemes.com/bangodash/color-version/pages-user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:37:15 GMT -->

</html>
