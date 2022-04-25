<?php
use App\Models\member_department;
$member_department = member_department::all();
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

                @foreach ($member_department as $item)
                <?php
                $count ++;
                ?>
                <tr>
                    <th scope="row">{{ $count; }}</th>
                    <td>{{ $item->member_department }}</td>
                    <td class="btn btn-danger"><a href="delete_member_department/{{$item->id}}" style="color: white;">Delete</a></td>

                </tr>
                @endforeach


            </tbody>
        </table>

</div>
