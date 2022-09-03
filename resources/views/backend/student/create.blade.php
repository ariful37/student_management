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
           <h1>Add Studend</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Student</li>
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
                <h3 class="card-title">Manage Student</h3>
                <a href="" class="btn btn-success orange float-right btn-sm">  <i class="nav-icon fas fa-list"></i>Subject</a>
              </div>
              <!-- /.card-header -->

              <!-- /.card-body -->
            </div>
            <!-- /.card -->

              <!-- /.card-header -->
            <div class="card card-danger">
             <form action="{{route('student.store')}}" id="quickForm" method="POST">
              @csrf

              <div class="card-body">
                <div class="row">
                   <div class="col-3">
                    <label for="exampleInputEmail1">Select Academic Year</label>
                      <select class="form-control" name="AyId">
                        <option value="">Select Year</option>
                        @foreach($academicYear as $item)
                          <option value="{{$item->id}}">{{$item->year}}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="col-3">
                    <label for="exampleInputEmail1">Select Class</label>
                      <select class="form-control" name="ClassId">
                        <option value="">Select Class</option>
                        @foreach($classes as $item)
                          <option value="{{$item->id}}">{{$item->class_name}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="col-3">
                    <label for="exampleInputEmail1">Select Section</label>
                      <select class="form-control" name="SectionId">
                        <option value="">Select Section</option>
                        @foreach($section as $item)
                          <option value="{{$item->id}}">{{$item->section_name}}</option>
                        @endforeach
                      </select>
                  </div>


                  <div class="col-4">
                      <label for="exampleInputEmail1">StudentName</label>
                     <input type="text" name="StudentName" class="form-control" id="exampleInputEmail1" placeholder="Enter StudentName">
                    <font style="color:red">{{($errors->has('StudentName'))?($errors->first('StudentName')):''}}</font>
                  </div>
                  <div class="col-4">
                      <label for="">StudentCode</label>
                     <input type="text" name="StudentCode" class="form-control" id="" placeholder="Enter StudentCode">
                    <font style="color:red">{{($errors->has('StudentCode'))?($errors->first('StudentCode')):''}}</font>
                  </div>
                  <div class="col-4">
                    <label for="">RollNo</label>
                   <input type="text" name="RollNo" class="form-control" id="" placeholder="Enter RollNo">
                  <font style="color:red">{{($errors->has('RollNo'))?($errors->first('RollNo')):''}}</font>
                </div>
                <div class="col-4">
                    <label for="">SmsNumber</label>
                   <input type="text" name="SmsNumber" class="form-control" id="" placeholder="Enter SmsNumber">
                  <font style="color:red">{{($errors->has('SmsNumber'))?($errors->first('SmsNumber')):''}}</font>
                </div>

                </div>

                  <div class="mt-3">
                     <button type="submit" class="btn btn-success">Add Student</button>
                  </div>
              </div>
             </form>
              <!-- /.card-body -->
            </div>
              <!-- /.card-body -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Year Name</th>
                    <th>Class Name</th>
                    <th>Section Name</th>
                    <th>Student Name</th>
                    <th>Student Code</th>
                    <th>Student Roll</th>
                    <th>Student Phone number</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>

                   @foreach($student as $key=>$item)
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$item->year ? $item->year->year :''}}</td>
                    <td>{{$item->class ? $item->class->class_name : ''}}</td>
                    <td>{{$item->section ? $item->section->section_name : ''}}</td>
                    <td>{{$item->StudentName}}</td>
                    <td>{{$item->StudentCode}}</td>
                    <td>{{$item->RollNo}}</td>
                    <td>{{$item->SmsNumber}}</td>
                    <td>
                      <a href="" class="text-info" ><i class="nav-icon fas fa-edit"></i></a>
                      <a href=""  class="text-danger"><i class="nav-icon fas fa-trash-alt"></i></a>
                    </td>
                  </tr>

                 @endforeach

                  </tfoot>
                </table>
              </div>
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

        SubjectName: {
        required: true,

      },

    },
    messages: {

        SubjectName: {
        required: "Please enter a SubjectName",

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
