<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AcademicYear;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Student;
class StudentController extends Controller
{
    public function create(){
        $data['academicYear'] = AcademicYear::all();
        $data['classes'] = Classes::all();
        $data['section'] = Section::all();
        return view('backend.student.create',$data);
    }

    public function store(Request $request){
        $this->validate($request,[
            'StudentName' => 'required',

        ]);
        $student = new Student();
        $student->AyId = $request->AyId;
        $student->ClassId = $request->ClassId;
        $student->SectionId = $request->SectionId;
        $student->StudentName = $request->StudentName;
        $student->StudentCode = $request->StudentCode;
        $student->RollNo = $request->RollNo;
        $student->SmsNumber = $request->SmsNumber;
        //dd($student);
        $student->save();
        return redirect()->route('student.create')->with('success','Data Insert successfully');
    }


}
