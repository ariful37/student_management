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
            return $this->belongsTo(HeadAcademicYearer::class,'AyId','id');
        }
        public function class(){
            return $this->belongsTo(Classes::class,'ClassId','id');
        }
        public function subject(){
            return $this->belongsTo(Subject::class,'SubjectId','id');
        }
        public function ExamName(){
            return $this->belongsTo(Subject::class,'ExampNameId','id');
        }
        public function Student(){
            return $this->belongsTo(Subject::class,'StudentId','id');
        }
        public function group(){
            return $this->belongsTo(Group::class,'GroupId','id');
        }

}


