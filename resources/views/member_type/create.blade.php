<form action="{{ url('add_member_type') }}" method="POST">
    @csrf
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Add Member Type
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Add Member
                        Type
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div>
                            <label>Add Type</label>
                        </div>
                        <div>
                            <input name="member_type" class="form-control" type="text" placeholder="Enter Member Type" required>
                        </div>
                        <div>
                            <button type="submit" name="add_type" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger shadow-danger m-1" data-dismiss="modal">Close</button>
                    {{-- <button type="button"
                                                                class="btn btn-success shadow-success m-1">Save
                                                                changes</button> --}}
                </div>
            </div>
        </div>
    </div>

</form>
