<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'ClassId',
        'SubjectId',
        'full_mark',
        'pass_mark',
        'subjective_mark',
    ];

    public function subject(){
        return $this->belongsTo(Subject::class,'SubjectId','id');
    }
}
