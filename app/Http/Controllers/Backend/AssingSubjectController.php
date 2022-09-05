<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\AssignSubject;
class AssingSubjectController extends Controller
{
    public function index(){
        $data['class'] = Classes::all();
        $data['subject'] = Subject::all();
        $data['assignSubject'] = AssignSubject::all();
       return view('backend.assignSubject.create',$data);
    }
    public function store(Request $request){
       $subjectCount = $request->SubjectId;
       if($subjectCount != NULL){
         for($i=0; $i<$subjectCount; $i++){
            $assign_sub = new AssignSubject();
            $assign_sub->ClassId = $request->ClassId;
            $assign_sub->SubjectId = $request->SubjectId[$i];
            $assign_sub->full_mark = $request->full_mark[$i];
            $assign_sub->pass_mark = $request->pass_mark[$i];
            $assign_sub->subjective_mark = $request->subjective_mark[$i];
           // dd($assign_sub);
            $assign_sub->save();
            return redirect()->route('assing.subject.view')->with('success','Data Insert successfully');
         }
       }
    }
}
