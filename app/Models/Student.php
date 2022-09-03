<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'AyId',
        'ClassId',
        'SectionId',
        'StudentName',
        'StudentCode',
        'RollNo',
        'SmsNumber',
    ];
    public function year(){
        return $this->belongsTo(AcademicYear::class,'AyId','id');
    }
    public function class(){
        return $this->belongsTo(Classes::class,'ClassId','id');
    }
    public function section(){
        return $this->belongsTo(Section::class,'SectionId','id');
    }
}
