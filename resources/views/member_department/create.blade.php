<form action="{{ url('add_member_department') }}" method="POST">
    @csrf
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Add Member Depertment
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabe2">Add Member
                        Depertment
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div>
                            <label>Add Department</label>
                        </div>
                        <div>
                            <input name="member_department" class="form-control" type="text" placeholder="Enter Member Department" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger shadow-danger m-1" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-success shadow-success m-1">Save
                        changes</button> --}}
                </div>
            </div>
        </div>
    </div>
</form>
