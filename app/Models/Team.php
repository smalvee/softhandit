<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $fillable = [
        'member_name',
        'member_mobile',
        'member_email',
        'member_address',
        'member_dob',
        'member_identity_proof',
        'member_identity_number',
        'member_identity_document',
        'member_emergency_contact',
        'member_ssc_institu_name',
        'member_ssc_institu_board',
        'member_ssc_result_passingyear',
        'member_hsc_institu_name',
        'member_hsc_institu_board',
        'member_hsc_result_passingyear',
        'member_bsc_institu_name',
        'member_bsc_passingyear',
        'member_bsc_result',
        'member_other_institu_name',
        'member_other_passingyear',
        'member_other_result',
        'member_type',
        'member_department',
        'member_designation',

    ];
}
