<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
      'AyId',
      'GroupId',
      'ClassId',
      'SectionId',
      'SubjectName',
      'SubjectCode',
    ];

    public function year(){
        return $this->belongsTo(AcademicYear::class,'AyId','id');
    }
    public function group(){
        return $this->belongsTo(Group::class,'GroupId','id');
    }
    public function class(){
        return $this->belongsTo(Classes::class,'ClassId','id');
    }
    public function section(){
        return $this->belongsTo(Section::class,'SectionId','id');
    }

}
