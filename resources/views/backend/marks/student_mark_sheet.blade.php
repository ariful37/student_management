 <!-- Content Wrapper. Contains page content -->
 @extends('backend.layouts.master')
 @push('css')

 @endpush
 @section('content')
  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
          <h1>Student Mark Sheet</h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
             <li class="breadcrumb-item active">Student Mark Sheet</li>
           </ol>
         </div>
       </div>
     </div>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-12">
           <div class="card">
             <div class="card-header">
               <h3 class="card-title">Student Mark Sheet</h3>
             </div>
           </div>
           <div class="card card-danger">
            <div class="row">
                <div class="col-md-6">
                  <table border="1" width="100%" cellpadding="9" cellspacing="2">
                    @php
                //  return   $assign_student = App\Model\Student::where('year_id',$allMarks['0']->year_id)->where('class_id',$allMarks['0']->class_id)->first();
                    @endphp
                    <tr>
                      <td width="50%">Class</td>
                      <td width="50%">{{$assingStudent->class->class_name}}</td>
                    </tr>
                    <tr>
                      <td width="50%">Roll No</td>
                      <td width="50%">{{$assingStudent->RollNo}}</td>
                    </tr>
                    <tr>
                      <td width="50%">Name</td>
                      <td width="50%">{{$assingStudent->StudentName}}</td>
                    </tr>
                    <tr>
                      <td width="50%">Section</td>
                      <td width="50%">{{$assingStudent->section->section_name}}</td>
                    </tr>
                    <tr>
                      <td width="50%">Phone Number</td>
                      <td width="50%">{{$assingStudent->SmsNumber}}</td>
                    </tr>
                  </table>
                </div>
                <div class="col-md-6">
                  <table border="1" width="100%" cellpadding="1" cellspacing="1" class="text-center">
                    <thead>
                      <tr>
                        <th>Letter Grade</th>
                        <th>Marks Interval</th>
                        <th>Grade Point</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($studentGradeMark as $mark)
                      <tr>
                        <td>{{$mark->grade_name}}</td>
                        <td>{{$mark->start_marks}} - {{$mark->end_marks}}</td>
                        <td>{{ number_format((float)$mark->grade_point,2) }} - {{ ($mark->grade_point == 5)?(number_format((float)$mark->grade_point,2)):(number_format((float)$mark->grade_point+1,2) - (float)0.01)}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div><br/>
              <div class="row">
                <div class="col-md-12">
                  <table border="1" width="100%" cellpadding="1" cellspacing="1">
                    <thead>
                      <tr>
                        <th class="text-center">SL</th>
                        <th class="text-center">Subjects</th>
                        <th class="text-center">Full Marks</th>
                        <th class="text-center">Get Marks</th>
                        <th class="text-center">Letter Grade</th>
                        <th class="text-center">Grade Point</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $total_marks = 0;
                        $total_point = 0;
                      @endphp
                      @foreach($allStudentMark as $key => $mark )
                      @php
                        $get_mark = $mark->Subjective + $mark->Objective;
                        $total_marks = (float)$total_marks+(float)$get_mark;
                        $total_subject = App\Models\StudentMark::where('AyId',$mark->AyId)->where('ClassId',$mark->ClassId)->where('ExampNameId',$mark->ExampNameId)->where('StudentId',$mark->StudentId)->get()->count();
                      @endphp
                      <tr>
                        <td class="text-center">{{$key+1}}</td>
                        <td class="text-center">{{ $mark->assing_subject->subject->SubjectName }}</td>
                        <td class="text-center">{{$mark['assing_subject']['full_mark']}}</td>
                        <td class="text-center">{{$get_mark}}</td>
                        @php
                          $grade_marks = App\Models\MarksGrades::where([['start_marks','<=',(int)$get_mark],['end_marks','>=',(int)$get_mark]])->first();
                          $grade_name = $grade_marks->grade_name;
                          $grade_point = number_format((float)$grade_marks->grade_point,2);
                          $total_point = (float)$total_point+(float)$grade_point;
                        @endphp
                        <td class="text-center">{{$grade_name}}</td>
                        <td class="text-center">{{$grade_point}}</td>
                      </tr>
                      @endforeach
                      <tr>
                        <td colspan="3"><strong style="padding-left: 30px;">Total Marks</strong></td>
                        <td colspan="3" style="padding-left: 37px;"><strong>{{$total_marks}}</strong></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><br/>
           </div>
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
     </div>
     <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <!-- jQuery -->
 @push('js')
 <!-- jquery-validation -->
 <script src="{{asset('asset/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
 <script src="{{asset('asset/plugins/jquery-validation/additional-methods.min.js')}}"></script>

 @endpush


 @endsection
