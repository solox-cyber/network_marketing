<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_logo',
        'about_course',
        'start_date',
        'course_syllabus',
        'instructor_bio',
        'other_information',
    ];
}
