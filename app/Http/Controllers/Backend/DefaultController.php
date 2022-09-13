<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AcademicYear;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;
use App\Models\ExamName;
use App\Models\Group;
use App\Models\Subject;
use App\Models\StudentMark;
use App\Models\AssignSubject;
class DefaultController extends Controller
{
   public function getStudent(Request $request){
     $AyId = $request->AyId;
     $ClassId = $request->ClassId;
     $allData = Student::where('AyId',$AyId)->where('ClassId',$ClassId)->get();
        return view('backend.marks._mark',[
            'allData' => $allData
        ]);
    }

    public function getSubject(Request $request){
        $ClassId = $request->ClassId;
    	$allData = AssignSubject::with('subject')->where('ClassId',$ClassId)->get();
    	return response()->json($allData);
    }

  public function progressReport(Request $request){
    $AyId = $request->AyId;
    $ClassId = $request->ClassId;
    $allData = StudentMark::with('student')->where('AyId',$AyId)->where('ClassId',$ClassId)->get();
   // dd($allData);
       return view('backend.report._report',[
           'allData' => $allData
       ]);
  }

}
