<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_logo',
        'course_name',
        'tuition_fee',
        'about_course',
        'start_date',
        'instructor_name',
        'course_syllabus',
        'instructor_bio',
        'other_information',
    ];

    public function profilePicture()
    {
        return $this->hasOne(ProfilePicture::class);
    }
}
