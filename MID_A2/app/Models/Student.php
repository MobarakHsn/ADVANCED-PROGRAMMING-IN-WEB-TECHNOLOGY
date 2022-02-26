<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\CourseStudent;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function department()
    {
        return $this->belongsTo(Department::class,'d_id');// this maps student tables d_id with departments id
    }
    public function courses()
    {
        return $this->hasMany(CourseStudent::class,'st_id');
    }
}
