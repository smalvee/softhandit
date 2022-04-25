<form action="{{ url('add_member_designation') }}" method="POST">
    @csrf
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">Add Member Designation
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe3"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabe3">Add Member
                        Designation
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div>
                            <label>Add Designation</label>
                        </div>
                        <div>
                            <input name="member_designation" class="form-control" type="text" placeholder="Enter Member Designation" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger shadow-danger m-1" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success shadow-success m-1">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
