<form action="{{ url('create_team') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-uppercase">Personal Information</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="rounded-input">Enter Name <span style="color: red;">*</span></label>
                            <input name="member_name" type="text" id="rounded-input" class="form-control form-control-rounded"
                                placeholder="Enter Member's Name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="rounded-input">Enter Mobile Number <span
                                    style="color: red;">*</span></label>
                            <input name="member_mobile" type="text" id="rounded-input" class="form-control form-control-rounded"
                                placeholder="Enter Member's mobile number" required>
                        </div>
                        <div class="col-md-4">
                            <label for="rounded-input">Enter Email <span
                                    style="color: red;">*</span></label>
                            <input name="member_email" type="email" id="rounded-input" class="form-control form-control-rounded"
                                placeholder="Enter Member's Email" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="rounded-input">Enter Address <span
                                    style="color: red;">*</span></label>
                            <input name="member_address" type="text" id="rounded-input" class="form-control form-control-rounded"
                                placeholder="Enter Member's Address" required>
                        </div>
                        <div class="col-md-4">
                            <label for="rounded-input">Enter Date of Birth <span
                                    style="color: red;">*</span></label>
                            <input name="member_dob" type="date" id="rounded-input" class="form-control form-control-rounded"
                                placeholder="Enter Member's Date of Birth" required>
                        </div>

                        <div class="col-md-4">
                            <label for="basic-select">Select Identity Proof <span
                                    style="color: red;">*</span></label>
                            <select name="member_identity_proof" class="form-control form-control-rounded" id="basic-select" required>
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
                            <input name="member_identity_number" type="text" id="rounded-input" class="form-control form-control-rounded"
                                placeholder="Enter Identity Proof Number" required>
                        </div>
                        <div class="col-md-4">
                            <label for="rounded-input">Upload Identity Document <span
                                    style="color: red;">*</span></label>
                            <input name="member_identity_document" type="file" id="rounded-input" class="form-control form-control-rounded"
                                placeholder="Enter Identity Proof Number" required>
                            <small class="text-muted"> formate support: JPEG, PNG</small>
                        </div>
                        <div class="col-md-4">
                            <label for="rounded-input">Enter Emargency Contact Number <span
                                    style="color: red;">*</span></label>
                            <input name="member_emergency_contact" type="text" id="rounded-input" class="form-control form-control-rounded"
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
                                    <input name="member_ssc_institu_name" type="text" id="rounded-input"
                                        class="form-control form-control-rounded"
                                        placeholder="Enter Institute Name" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="basic-select">Select Board</label>
                                    <select name="member_ssc_institu_board" class="form-control form-control-rounded" id="basic-select" required>
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
                                    <input name="member_ssc_result_passingyear" type="text" id="rounded-input"
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
                                    <input name="member_hsc_institu_name" type="text" id="rounded-input"
                                        class="form-control form-control-rounded"
                                        placeholder="Enter Institute Name" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="basic-select">Select Board</label>
                                    <select name="member_hsc_institu_board" class="form-control form-control-rounded" id="basic-select" required>
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
                                    <input name="member_hsc_result_passingyear" type="text" id="rounded-input"
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
                                    <input name="member_bsc_institu_name" type="text" id="rounded-input"
                                        class="form-control form-control-rounded"
                                        placeholder="Enter Institute Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="rounded-input">Passing Year</small></label>
                                    <input name="member_bsc_passingyear" type="text" id="rounded-input"
                                        class="form-control form-control-rounded"
                                        placeholder="Enter Member's Email">
                                </div>
                                <div class="col-md-4">
                                    <label for="rounded-input">Result<small></small></label>
                                    <input name="member_bsc_result" type="text" id="rounded-input"
                                        class="form-control form-control-rounded"
                                        placeholder="Enter Member's Email">
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
                                    <input name="member_other_institu_name" type="text" id="rounded-input"
                                        class="form-control form-control-rounded"
                                        placeholder="Enter Institute Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="rounded-input">Passing Year</small></label>
                                    <input name="member_other_passingyear" type="text" id="rounded-input"
                                        class="form-control form-control-rounded"
                                        placeholder="Enter Member's Email" >
                                </div>
                                <div class="col-md-4">
                                    <label for="rounded-input">Result<small></small></label>
                                    <input name="member_other_result" type="text" id="rounded-input"
                                        class="form-control form-control-rounded"
                                        placeholder="Enter Member's Email">
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
                <div class="card-header text-uppercase">Member Recognition</div>
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="basic-select">Select Member Type <span
                                    style="color: red;">*</span></label>
                            <select name="member_type" class="form-control form-control-rounded" id="basic-select" required>
                                <option value="">Select One</option>
                                <?php
                                use App\Models\member_type;
                                $member_type = member_type::all();
                                ?>
                                @foreach ($member_type as $item)
                                    <option value="{{ $item->member_type }}">{{ $item->member_type }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="basic-select">Select Department <span
                                    style="color: red;">*</span></label>
                                    <select name="member_department" class="form-control form-control-rounded" id="basic-select" required>
                                        <option value="">Select One</option>
                                        <?php
                                        use App\Models\member_department;
                                        $member_department = member_department::all();
                                        ?>
                                        @foreach ($member_department as $item)
                                            <option value="{{ $item->member_department }}">{{ $item->member_department }}</option>
                                        @endforeach

                                    </select>
                        </div>

                        <div class="col-md-4">
                            <label for="basic-select">Select Designation <span
                                    style="color: red;">*</span></label>
                                    <select name="member_designation" class="form-control form-control-rounded" id="basic-select" required>
                                        <option value="">Select One</option>
                                        <?php
                                        use App\Models\member_designation;
                                        $member_designation = member_designation::all();
                                        ?>
                                        @foreach ($member_designation as $item)
                                            <option value="{{ $item->member_designation }}">{{ $item->member_designation }}</option>
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

    <button type="submit" class="btn btn-primary">Save Information</button>
</form>
