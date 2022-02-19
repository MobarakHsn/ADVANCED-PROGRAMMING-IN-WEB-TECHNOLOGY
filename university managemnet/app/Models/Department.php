<?php

namespace App\Models;
use App\Models\Student;
use App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $timestamps=false;
    //relationship function
    public function students(){
        return $this->hasMany(Student::class,'d_id');
    } 
    public function courses(){
        return $this->hasMany(Course::class,'offered_by');
    }
}
