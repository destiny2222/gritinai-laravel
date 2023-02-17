<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'fullname',
        'phone',
        'gender',
        'describes',
        'location',
        'age',
        'area_in_mentor',
        'issues_or_challenges',
        'goals_objectives',
        'want_to_be_a_mentor',
        'additional_information',
        'skill',
        'indicate',
        'contact_with_your_mentee'
    ];
}
