<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarksGrades;
class GradeMarksController extends Controller
{
    public function index(){
        $data['grade'] = MarksGrades::all();
        return view('backend.grade.create',$data);
    }

    public function store(Request $request){

      $grade_mark = new MarksGrades();
      $grade_mark->grade_name = $request->grade_name;
      $grade_mark->grade_point = $request->grade_point;
      $grade_mark->start_marks = $request->start_marks;
      $grade_mark->end_marks = $request->end_marks;
      $grade_mark->start_point = $request->start_point;
      $grade_mark->end_point = $request->end_point;
      $grade_mark->remarks = $request->remarks;
     // dd($grade_mark);
      $grade_mark->save();
      return redirect()->route('grate.marks.view')->with('success','Data Insert successfully');

    }
}
