<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\CourseStudent;
use App\Models\CourseTeacher;

class Course extends Model
{
    use HasFactory;
    public $timestamps=false;
    
    public function department()
    {
        return $this->belongsTo(Department::class,'offered_by');
    }
    public function students()
    {
        return $this->hasMany(CourseStudents::class,'c_id');
    }
    public function course_teachers()
    {
        return $this->hasMany(CourseTeacher::class,'c_id');
    }
}
