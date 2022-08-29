<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AcademicYear;
use App\Models\Classes;
use App\Models\Section;
use App\Models\ExamName;
use App\Models\Group;
use App\Models\CourseName;
use App\Models\ExamSetup;
use App\Models\Subject;

class ExamSetupController extends Controller
{
    public function create(){
        $data['academicYear'] = AcademicYear::all();
        $data['classes'] = Classes::all();
        $data['section'] = Section::all();
        $data['examName'] = ExamName::all();
        $data['group'] = Group::all();
        $data['subject'] = Subject::all();
       // $data['courseName'] = CourseName::all();
        $data['exam_setups'] = ExamSetup::all();
        return view('backend.exam.create',$data);
    }


    public function store(Request $request){
        $this->validate($request,[
            'subjective' => 'required',
            'AyId' => 'required',
            'ExampNameId' => 'required',
            'ClassId' => 'required',
            'SectionId' => 'required',
            'SubjectId' => 'required',
            'objective' => 'required',

        ]);

        $exam = new ExamSetup();
        $exam->AyId = $request->AyId;
        $exam->ExampNameId = $request->ExampNameId;
        $exam->ClassId = $request->ClassId;
        $exam->SectionId = $request->SectionId;
        $exam->SubjectId = $request->SubjectId;
        $exam->GroupId = $request->GroupId;
        $exam->subjective = $request->subjective;
        $exam->objective = $request->objective;
        $exam->Practical = $request->Practical;
       //dd($exam);
        $exam->save();
        return redirect()->route('exam.create')->with('success','Data Insert successfully');

    }
}
