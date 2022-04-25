<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/form-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:31:50 GMT -->

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
                        <h4 class="page-title">Form Input</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javaScript:void();">BangoDash</a></li>
                            <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Input</li>
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
                            <div class="card-header text-uppercase">Category Insertion Form</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 style="color:#dc3a74;">Member Type</h6>
                                        @include('member_type.index')
                                        <!-- Button trigger modal -->
                                        <br>
                                        @include('member_type.create')

                                    </div>
                                    <div class="col-md-4">
                                        <h6 style="color:#dc3a74;">Member Depertment</h6>
                                        @include('member_department.index')
                                        <!-- Button trigger modal -->
                                        <br>
                                        @include('member_department.create')

                                    </div>

                                    <div class="col-md-4">
                                        <h6 style="color:#dc3a74;">Member Designation</h6>
                                        @include('member_designation.index')
                                        <!-- Button trigger modal -->
                                        <br>
                                        @include('member_designation.create')

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Personal Information</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="rounded-input">Enter Name <span style="color: red;">*</span></label>
                                        <input type="text" id="rounded-input" class="form-control form-control-rounded"
                                            placeholder="Enter Member's Name" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="rounded-input">Enter Mobile Number <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="rounded-input" class="form-control form-control-rounded"
                                            placeholder="Enter Member's mobile number" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="rounded-input">Enter Email <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="rounded-input" class="form-control form-control-rounded"
                                            placeholder="Enter Member's Email" required>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="rounded-input">Enter Address <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="rounded-input" class="form-control form-control-rounded"
                                            placeholder="Enter Member's Address" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="rounded-input">Enter Date of Birth <span
                                                style="color: red;">*</span></label>
                                        <input type="date" id="rounded-input" class="form-control form-control-rounded"
                                            placeholder="Enter Member's Email" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="basic-select">Select Identity Proof <span
                                                style="color: red;">*</span></label>
                                        <select class="form-control form-control-rounded" id="basic-select">
                                            <option value="">Select One</option>
                                            <option value="NID">NID</option>
                                            <option value="Passport">Passport</option>
                                            <option value="Birth Certificate">Birth Certificate</option>
                                        </select>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <label>STATIC INPUT</label>
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value="email@example.com">
                                    </div> --}}
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="rounded-input">Enter Identity Proof Number <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="rounded-input" class="form-control form-control-rounded"
                                            placeholder="Enter Identity Proof Number" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="rounded-input">Upload Identity Document <span
                                                style="color: red;">*</span></label>
                                        <input type="file" id="rounded-input" class="form-control form-control-rounded"
                                            placeholder="Enter Identity Proof Number" required>
                                        <small class="text-muted"> formate support: JPEG, PNG</small>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="rounded-input">Enter Emargency Contact Number <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="rounded-input" class="form-control form-control-rounded"
                                            placeholder="Enter Emargency Contact Number" required>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Educational Information</div>
                            <div class="card-body">
                                {{-- SSC exam --}}
                                <div class="card">
                                    <div style="color:#dc3a74;" class="card-header text-uppercase">Secondary School
                                        Certificate (SSC)</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="rounded-input">Institute Name</label>
                                                <input type="text" id="rounded-input"
                                                    class="form-control form-control-rounded"
                                                    placeholder="Enter Institute Name">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="basic-select">Select Board</label>
                                                <select class="form-control form-control-rounded" id="basic-select">
                                                    <option value="">Select Board</option>
                                                    <option value="Dhaka">Barishal</option>
                                                    <option value="Comilla">Chittagong</option>
                                                    <option value="Barishal">Comilla</option>
                                                    <option value="Barishal">Dhaka</option>
                                                    <option value="Barishal">Dinajpur</option>
                                                    <option value="Barishal">Jessore</option>
                                                    <option value="Barishal">Mymensing</option>
                                                    <option value="Barishal">Rajshahi</option>
                                                    <option value="Barishal">Sylhet</option>
                                                    <option value="Barishal">Madrasha</option>
                                                    <option value="Barishal">Technical</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="rounded-input">Result & Passing Year <small>(Example: 3.65 -
                                                        2021)</small></label>
                                                <input type="text" id="rounded-input"
                                                    class="form-control form-control-rounded"
                                                    placeholder="Enter Member's Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- HSC exam --}}
                                <div class="card">
                                    <div style="color:#dc3a74;" class="card-header text-uppercase">Higher Secondary
                                        Certificate (HSC)</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="rounded-input">Institute Name</label>
                                                <input type="text" id="rounded-input"
                                                    class="form-control form-control-rounded"
                                                    placeholder="Enter Institute Name">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="basic-select">Select Board</label>
                                                <select class="form-control form-control-rounded" id="basic-select">
                                                    <option value="">Select Board</option>
                                                    <option value="Dhaka">Barishal</option>
                                                    <option value="Comilla">Chittagong</option>
                                                    <option value="Barishal">Comilla</option>
                                                    <option value="Barishal">Dhaka</option>
                                                    <option value="Barishal">Dinajpur</option>
                                                    <option value="Barishal">Jessore</option>
                                                    <option value="Barishal">Mymensing</option>
                                                    <option value="Barishal">Rajshahi</option>
                                                    <option value="Barishal">Sylhet</option>
                                                    <option value="Barishal">Madrasha</option>
                                                    <option value="Barishal">Technical</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="rounded-input">Result & Passing Year <small>(Example: 3.65 -
                                                        2021)</small></label>
                                                <input type="text" id="rounded-input"
                                                    class="form-control form-control-rounded"
                                                    placeholder="Enter Member's Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- University --}}
                                <div class="card">
                                    <div style="color:#dc3a74;" class="card-header text-uppercase">Bachelor Degree or
                                        relevant</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="rounded-input">Institute Name</label>
                                                <input type="text" id="rounded-input"
                                                    class="form-control form-control-rounded"
                                                    placeholder="Enter Institute Name">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="rounded-input">Passing Year</small></label>
                                                <input type="text" id="rounded-input"
                                                    class="form-control form-control-rounded"
                                                    placeholder="Enter Member's Email" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="rounded-input">Result<small></small></label>
                                                <input type="text" id="rounded-input"
                                                    class="form-control form-control-rounded"
                                                    placeholder="Enter Member's Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Others tarining --}}
                                <div class="card">
                                    <div style="color:#dc3a74;" class="card-header text-uppercase">Others tarining
                                        <small>If any</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="rounded-input">Institute Name</label>
                                                <input type="text" id="rounded-input"
                                                    class="form-control form-control-rounded"
                                                    placeholder="Enter Institute Name">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="rounded-input">Passing Year</small></label>
                                                <input type="text" id="rounded-input"
                                                    class="form-control form-control-rounded"
                                                    placeholder="Enter Member's Email" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="rounded-input">Result<small></small></label>
                                                <input type="text" id="rounded-input"
                                                    class="form-control form-control-rounded"
                                                    placeholder="Enter Member's Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Personal Information</div>
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="basic-select">Select Member Type <span
                                                style="color: red;">*</span></label>
                                        <select class="form-control form-control-rounded" id="basic-select">
                                            <option value="">Select One</option>
                                            <?php
                                            use App\Models\member_type;
                                            $member_type = member_type::all();
                                            ?>
                                            @foreach ($member_type as $item)
                                                <option value="NID">{{ $item->member_type }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="basic-select">Select Department <span
                                                style="color: red;">*</span></label>
                                                <select class="form-control form-control-rounded" id="basic-select">
                                                    <option value="">Select One</option>
                                                    <?php
                                                    use App\Models\member_department;
                                                    $member_department = member_department::all();
                                                    ?>
                                                    @foreach ($member_department as $item)
                                                        <option value="NID">{{ $item->member_department }}</option>
                                                    @endforeach

                                                </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="basic-select">Select Designation <span
                                                style="color: red;">*</span></label>
                                                <select class="form-control form-control-rounded" id="basic-select">
                                                    <option value="">Select One</option>
                                                    <?php
                                                    use App\Models\member_designation;
                                                    $member_designation = member_designation::all();
                                                    ?>
                                                    @foreach ($member_designation as $item)
                                                        <option value="NID">{{ $item->member_designation }}</option>
                                                    @endforeach

                                                </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->



                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Extra-Curricular Activities</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="rounded-input">Hobbies <small> Example: Reading, Singing
                                                etc</small></label>
                                        <input type="text" id="rounded-input" class="form-control form-control-rounded"
                                            placeholder="Enter Member's Name">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="rounded-input">About Your Self</label>
                                        <textarea id="rounded-input" class="form-control form-control-rounded"
                                            placeholder="Tell us about your self in short"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="rounded-input">Enter Email <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="rounded-input" class="form-control form-control-rounded"
                                            placeholder="Enter Member's Email" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row--> --}}








                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Select Input</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="basic-select">BASIC SELECT</label>
                                        <select class="form-control" id="basic-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="custom-select">CUSTOM SELECT</label>
                                        <select class="form-control" id="custom-select">
                                            <option>Delhi</option>
                                            <option>Noida</option>
                                            <option>Ghaziabad</option>
                                            <option>Bangalore</option>
                                            <option>Mumbai</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="multiple-select">MULTIPLE SELECT</label>
                                        <select multiple="multiple" class="form-control" id="multiple-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row--> --}}


                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Inputs Sizing Options</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Xlarge-input">Extra large input</label> <code>.form-control
                                            .form-control-xl</code>
                                        <input type="text" class="form-control form-control-xl" id="Xlarge-input">
                                        <br>
                                        <label for="large-input">Large input</label> <code>.form-control
                                            .form-control-lg</code>
                                        <input type="text" class="form-control form-control-lg" id="large-input">
                                        <br>
                                        <label for="default-input">Default input</label><code>.form-control</code>
                                        <input type="text" class="form-control" id="default-input">
                                        <br>
                                        <label for="small-input">Small input</label> <code>.form-control
                                            .form-control-sm</code>
                                        <input type="text" class="form-control form-control-sm" id="small-input">
                                    </div>

                                    <div class="col-md-6">

                                        <label for="Xlarge-input-select">Extra large input Select</label>
                                        <code>.form-control .form-control-xl</code>
                                        <select class="form-control form-control-xl" id="Xlarge-input-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                        <br>
                                        <label for="large-input-select">Large input Select</label>
                                        <code>.form-control .form-control-lg</code>
                                        <select class="form-control form-control-lg" id="large-input-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                        <br>
                                        <label for="default-input-select">Default input Select</label>
                                        <code>.form-control</code>
                                        <select class="form-control" id="default-input-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                        <br>
                                        <label for="small-input-select">Small input Select</label>
                                        <code>.form-control .form-control-sm</code>
                                        <select class="form-control form-control-sm" id="small-input-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row--> --}}

                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Inputs With Icons</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Left icon input</label> <code>.has-icon-left</code>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control">
                                            <div class="form-control-position">
                                                <i class="fa fa-search text-info"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label>Right icon input</label> <code>.has-icon-right</code>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control">
                                            <div class="form-control-position">
                                                <i class="fa fa-upload text-warning"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-6">
                                        <label>Round input with left icon</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control form-control-rounded">
                                            <div class="form-control-position">
                                                <i class="fa fa-user-o text-danger"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label>Round input with right icon</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control form-control-rounded">
                                            <div class="form-control-position">
                                                <i class="fa fa-bell-o text-success"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label>Square input with left icon</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control form-control-square">
                                            <div class="form-control-position">
                                                <i class="fa fa-spinner fa-spin text-primary"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label>Square input with right icon</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control form-control-square">
                                            <div class="form-control-position">
                                                <i class="fa fa-refresh fa-spin fa-fw text-dark"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row--> --}}

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

<!-- Mirrored from kvthemes.com/bangodash/color-version/form-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:31:50 GMT -->

</html>
