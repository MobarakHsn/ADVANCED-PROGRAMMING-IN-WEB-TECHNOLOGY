<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Teacher;


class CourseTeacher extends Model
{
    use HasFactory;
    public $table="course_teacher";
    public $timestamps=false;

    public function course()
    {
        return $this->belongsTo(Course::class,'c_id');
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'t_id');
    }
}
