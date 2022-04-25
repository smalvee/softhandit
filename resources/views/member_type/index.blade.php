<?php
use App\Models\member_type;
$member_type = member_type::all();
$count =0;
?>
<div class="table-responsive">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($member_type as $item)
                <?php
                $count ++;
                ?>
                <tr>
                    <th scope="row">{{ $count; }}</th>
                    <td>{{ $item->member_type }}</td>
                    <td class="btn btn-danger"><a href="delete_member_type/{{$item->id}}" style="color: white;">Delete</a></td>

                </tr>
                @endforeach


            </tbody>
        </table>

</div>
