<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member_type extends Model
{
    use HasFactory;

    protected $table = 'member_type'; 
    protected $fillable = [
        'member_type',
    ];
}