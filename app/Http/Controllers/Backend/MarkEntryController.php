<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AcademicYear;
use App\Models\Classes;
use App\Models\Section;
use App\Models\ExamName;
use App\Models\Group;
use App\Models\Subject;
use App\Models\Student;
use App\Models\StudentMark;
use App\Models\AssignSubject;
use App\Models\MarksGrades;
class MarkEntryController extends Controller
{
   public function add(){
    $data['academicYear'] = AcademicYear::all();
    $data['classes'] = Classes::all();
   // $data['section'] = Section::all();
    $data['examType'] = ExamName::all();
    //$data['group'] = Group::all();
    $data['subject'] = AssignSubject::all();
   // $data['courseName'] = CourseName::all();
     return view('backend.marks.create',$data);
   }


   public function store(Request $request){
    // $this->validate($request,[
    //     'Subjective' => 'required',
    //     'Objective' => 'required',
    //     'ClassId' => 'required',

    // ]);

    $studentClassCount = $request->StudentId;

     if($studentClassCount){
       for($i=0; $i<count($request->StudentId); $i++){
            $studentMark = new StudentMark();
            $studentMark->AyId = $request->AyId;
            $studentMark->ClassId = $request->ClassId;
            $studentMark->AssingSubjectId = $request->AssingSubjectId;
            $studentMark->ExampNameId = $request->ExampNameId;
            $studentMark->StudentId = $request->StudentId[$i];
            $studentMark->RollNo = $request->RollNo[$i];
            $studentMark->Subjective = $request->Subjective[$i];
            $studentMark->Objective = $request->Objective[$i];
           // dd($studentMark);
            $studentMark->save();
       }
       return redirect()->route('mark-entry-show')->with('success','Data Insert successfully');
     }

   }

   public function getStudentReport(){
    $data['academicYear'] = AcademicYear::all();
    $data['classes'] = Classes::all();
    $data['section'] = Section::all();
    $data['examType'] = ExamName::all();
    $data['group'] = Group::all();
    $data['subject'] = Subject::all();
   // $data['courseName'] = CourseName::all();
     return view('backend.report.create',$data);
  }

  public function edit(){
    $data['academicYear'] = AcademicYear::all();
    $data['classes'] = Classes::all();
    $data['section'] = Section::all();
    $data['examType'] = ExamName::all();
    $data['group'] = Group::all();
    $data['subject'] = Subject::all();
   // $data['courseName'] = CourseName::all();
     return view('backend.marks.marks_edit',$data);
  }

  public function getMarks(Request $request){
    $AyId = $request->AyId;
    $ClassId = $request->ClassId;
    $SubjectId = $request->SubjectId;
    $ExampNameId = $request->ExampNameId;
   $allData = StudentMark::with('student','class')->where('AyId',$AyId)->where('ClassId',$ClassId)->where('SubjectId',$SubjectId)->get();
    //    dd($allData);
   return view('backend.marks._mark_edit',[
           'allData' => $allData
       ]);
  }

  public function update(Request $request){

   $data =StudentMark::where('AyId',$request->AyId)->where('ClassId',$request->ClassId)->where('SubjectId',$request->SubjectId)->where('ExampNameId',$request->ExampNameId)->get();
//    dd($data);
   foreach($data as $item){
            $item->delete();
   }
   $studentClassCount = $request->StudentId;
    if($studentClassCount){
        for($i=0; $i<count($request->StudentId); $i++){
            $studentMark = new StudentMark();
            $studentMark->AyId = $request->AyId;
            $studentMark->ClassId = $request->ClassId;
            $studentMark->SubjectId = $request->SubjectId;
            $studentMark->ExampNameId = $request->ExampNameId;
            $studentMark->StudentId = $request->StudentId[$i];
            $studentMark->Subjective = $request->Subjective[$i];
            $studentMark->Objective = $request->Objective[$i];
          //  dd($studentMark);
            $studentMark->save();
        }

        return redirect()->route('marks.edit')->with('success','Data Update successfully');
      }
  }

  public function markSheetView(){

    $data['academicYear'] = AcademicYear::all();
    $data['classes'] = Classes::all();
    $data['examType'] = ExamName::all();
    return view('backend.report.marke_sheet',$data);
  }
  public function markSheetGet(Request $request){
        $AyId = $request->AyId;
        $ClassId = $request->ClassId;
        $ExampNameId = $request->ExampNameId;
        $RollNo = $request->RollNo;
        $count_fall = StudentMark::where('AyId',$AyId)->where('ClassId',$ClassId)->where('RollNo',$RollNo)->where('ExampNameId',$ExampNameId)->where('Subjective','<','33')->get()->count();
        $singleStudent = StudentMark::where('AyId',$AyId)->where('ClassId',$ClassId)->where('RollNo',$RollNo)->where('ExampNameId',$ExampNameId)->first();
        if($singleStudent == true){
           $allStudentMark = StudentMark::with('assing_subject','year')->where('AyId',$AyId)->where('ClassId',$ClassId)->where('RollNo',$RollNo)->where('ExampNameId',$ExampNameId)->where('RollNo',$RollNo)->get();
          $studentGradeMark = MarksGrades::all();
          $assingStudent = Student::where('AyId',$AyId)->where('ClassId',$ClassId)->first();
          return view('backend.marks.student_mark_sheet',compact('studentGradeMark','allStudentMark','count_fall','assingStudent'));
        }
  }
}
