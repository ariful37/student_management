<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AcademicYear;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Group;
use App\Models\Subject;



class SubjectController extends Controller
{
    public function create(){
        $data['academicYear'] = AcademicYear::all();
        $data['classes'] = Classes::all();
        $data['section'] = Section::all();
        $data['group'] = Group::all();
        $data['allsubject'] = Subject::get();
        return view('backend.subject.create',$data);
    }

    public function store(Request $request){

        $this->validate($request,[
            'SubjectName' => 'required',

        ]);
        $subject = new Subject();
        $subject->AyId = $request->AyId;
        $subject->GroupId = $request->GroupId;
        $subject->ClassId = $request->ClassId;
        $subject->SectionId = $request->SectionId;
        $subject->SubjectName = $request->SubjectName;
        $subject->SubjectCode = $request->SubjectCode;
       // dd($subject);
        $subject->save();
        return redirect()->route('subject.create')->with('success','Data Insert successfully');
    }
}
