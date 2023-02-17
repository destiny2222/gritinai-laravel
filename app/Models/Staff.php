<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'company',
        'file',
        'training',
        'no_of_staff',
        'location',
        'specify',
        'start_date',
        'end_date',
        'body',
    ];

    protected $dates = [
        'start_date',
        'end_date',
    ];
}
