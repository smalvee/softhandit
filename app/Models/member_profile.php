<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member_profile extends Model
{
    use HasFactory;
    protected $table = 'member_profile';
    protected $fillable = [
        'main_id',
        'about_yourself',
        'hobbies',
        'salary',
        'profile_picture',
    ];
}

