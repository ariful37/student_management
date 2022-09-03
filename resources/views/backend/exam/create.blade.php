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
           <h1>Add Exam</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Exam</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Exam</h3>
                <a href="" class="btn btn-success orange float-right btn-sm">  <i class="nav-icon fas fa-list"></i>View Exam</a>
              </div>
            </div>
            <div class="card card-danger">
             <form action="{{route('exam.store')}}" id="quickForm" method="POST">
              @csrf

              <div class="card-body">
                <div class="row">
                   <div class="col-2">
                    <label for="exampleInputEmail1">Select Academic Year</label>
                      <select class="form-control" name="AyId">
                        <option value="">Select Year</option>
                        @foreach($academicYear as $item)
                          <option value="{{$item->id}}">{{$item->year}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="col-2">
                    <label for="exampleInputEmail1">Exam Type</label>
                      <select class="form-control" name="ExampNameId">
                        <option value="">Select Exam Name</option>
                        @foreach($examName as $item)
                          <option value="{{$item->id}}">{{$item->exam_name}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="col-2">
                    <label for="exampleInputEmail1">Select Class</label>
                      <select class="form-control" name="ClassId">
                        <option value="">Select Class</option>
                        @foreach($classes as $item)
                          <option value="{{$item->id}}">{{$item->class_name}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="col-2">
                    <label for="exampleInputEmail1">Select Section</label>
                      <select class="form-control" name="SectionId">
                        <option value="">Select Section</option>
                        @foreach($section as $item)
                          <option value="{{$item->id}}">{{$item->section_name}}</option>
                        @endforeach
                      </select>
                  </div>


                  <div class="col-2">
                    <label for="exampleInputEmail1">Select Group Name</label>
                      <select class="form-control" name="GroupId">
                        <option value="">Select Group Name</option>
                        @foreach($group as $item)
                          <option value="{{$item->id}}">{{$item->group_name}}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="col-2">
                    <label for="exampleInputEmail1">Select Subject</label>
                      <select class="form-control" name="SubjectId">
                        <option value="">Select Subject Name</option>
                        @foreach($subject as $item)
                          <option value="{{$item->id}}">{{$item->SubjectName}}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="col-4">
                      <label for="exampleInputEmail1">Subjective</label>
                     <input type="text" name="subjective" class="form-control" id="exampleInputEmail1" placeholder="Enter Subjective">
                    <font style="color:red">{{($errors->has('subjective'))?($errors->first('subjective')):''}}</font>
                  </div>
                  <div class="col-4">
                      <label for="exampleInputEmail1">Objective</label>
                     <input type="text" name="objective" class="form-control" id="exampleInputEmail1" placeholder="Enter Objective">
                    <font style="color:red">{{($errors->has('objective'))?($errors->first('objective')):''}}</font>
                  </div>

                   <div class="col-4">
                      <label for="exampleInputEmail1">Practical</label>
                     <input type="text" name="Practical" class="form-control" id="exampleInputEmail1" placeholder="Enter Practical">
                    <font style="color:red">{{($errors->has('Practical'))?($errors->first('Practical')):''}}</font>
                  </div>

                </div>

                  <div class="mt-3">
                     <button type="submit" class="btn btn-success">Add Exam</button>
                  </div>
              </div>
            </form>
              <!-- /.card-body -->
              <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Academic Year</th>
                      <th>Exam Name</th>
                      <th>Class Name</th>
                      <th>Section Name</th>
                      <th>Subject Name</th>
                      <th>Group Name</th>
                      <th>Subjective</th>
                      <th>Bbjective</th>
                      <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                     @foreach($exam_setups as $key=>$item)
                    <tr>


                      <td>{{ $item->id}}</td>
                      <td>{{ $item->year->year}}</td>
                      <td>{{ $item->ExamName->exam_name}}</td>
                      <td>{{ $item->class->class_name}}</td>
                      <td>{{ $item->section->section_name}}</td>
                      <td>{{$item->subject->SubjectName}}</td>
                      <td>{{$item->group->group_name}}</td>
                      <td>{{$item->subjective}}</td>
                      <td>{{$item->objective}}</td>
                      <td>
                        <a href="" class="text-info" ><i class="nav-icon fas fa-edit"></i></a>
                        <a href=""  class="text-danger"><i class="nav-icon fas fa-trash-alt"></i></a>
                      </td>
                    </tr>

                   @endforeach

                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
  <script type="text/javascript">
$(document).ready(function () {

  $('#quickForm').validate({
    rules: {
      usertype: {
        required: true,

      },
       name: {
        required: true,

      },
       email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6
      },
      password2: {
      required: true,
      equalTo:'#password'


    },

    },
    messages: {
      usertype: {
        required: "Please Select User Type",

      },
       name: {
        required: "Please enter a name",

      },
       email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
       password2: {
        required: "Please Enter Confirm Password",
        equalTo :"Confrim Password does Not Match"
      },

    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.col-4').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>


  @endpush


  @endsection
