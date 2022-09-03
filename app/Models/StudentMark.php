<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMark extends Model
{
    use HasFactory;
    protected $fillable = [
        'AyId',
        'ClassId',
        'SubjectId',
        'ExampNameId',
        'StudentId',
        'Subjective',
        'Objective',
        'Obtained',


    ];

    public function year(){
        return $this->belongsTo(AcademicYear::class,'AyId','id');
    }
    public function class(){
        return $this->belongsTo(Classes::class,'ClassId','id');
    }
    public function subject(){
        return $this->belongsTo(Subject::class,'SubjectId','id');
    }
    public function exam_name(){
        return $this->belongsTo(ExamName::class,'ExampNameId','id');
    }
    public function student(){
        return $this->belongsTo(Student::class,'StudentId','id');
    }

}
