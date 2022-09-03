<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSetup extends Model
{
    use HasFactory;
    protected $fillable = [
        'AyId',
        'ExampNameId',
        'ClassId',
        'SectionId',
        'SubjectId',
        'subjective',
        'objective',
        'Practical',
        'WeightedMarks',
        'CreatedDate',
        'status',
        'GroupId'];

        public function year(){
            return $this->belongsTo(AcademicYear::class,'AyId','id');
        }
        public function class(){
            return $this->belongsTo(Classes::class,'ClassId','id');
        }
        public function subject(){
            return $this->belongsTo(Subject::class,'SubjectId','id');
        }
        public function ExamName(){
            return $this->belongsTo(ExamName::class,'ExampNameId','id');
        }
        public function section(){
            return $this->belongsTo(Section::class,'SectionId','id');
        }
        public function group(){
            return $this->belongsTo(Group::class,'GroupId','id');
        }

}


