<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member_department extends Model
{
    use HasFactory;
    
    protected $table = 'member_department';
    protected $fillable = [
        'member_department',
    ];
}
