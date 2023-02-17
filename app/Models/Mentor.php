<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'fullname',
        'phone',
        'gender',
        'describes',
        'family',
        'location',
        'age',
        'area_in_mentor',
        'work_status',
        'level_of_education',
        'work_experience',
        'have_you_been_a_mentor_before',
        'mentoring_experience',
        'professional_experience',
        'accomplishment',
        'goals_and_objectives',
        'want_to_be_a_mentor',
        'additional_information',
        'skill',
        'indicate',
        'contact_with_your_mentee'
    ];
}
