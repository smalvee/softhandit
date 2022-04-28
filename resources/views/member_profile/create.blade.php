<?php
        use App\Models\team;

        $mainid = $id;

        $profile = member_profile::where('main_id', $id)->get();

        @foreach ($profile as $item)
            $item->id
        @endforeach

        if (id == NULL) {
           
        }
?>
