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
           <h1>Add Grade Marks</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Grade Marks</li>
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
                <h3 class="card-title">Manage Grade Marks</h3>
                <a href="" class="btn btn-success orange float-right btn-sm">  <i class="nav-icon fas fa-list"></i>Marks Grade</a>
              </div>
              <!-- /.card-header -->

              <!-- /.card-body -->
            </div>
            <!-- /.card -->

              <!-- /.card-header -->
            <div class="card card-danger">
             <form action="{{route('grate.marks.store')}}" id="quickForm" method="POST">
              @csrf

              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                      <label for="exampleInputEmail1">Grade Name</label>
                     <input type="text" name="grade_name" class="form-control" id="" placeholder="Enter grade_name">
                    <font style="color:red">{{($errors->has('grade_name'))?($errors->first('grade_name')):''}}</font>
                  </div>
                  <div class="col-3">
                      <label for="">Grade Point</label>
                     <input type="text" name="grade_point" class="form-control" id="" placeholder="Enter grade_point">
                    <font style="color:red">{{($errors->has('grade_point'))?($errors->first('grade_point')):''}}</font>
                  </div>
                  <div class="col-3">
                    <label for="">start_marks</label>
                   <input type="text" name="start_marks" class="form-control" id="" placeholder="Enter start_marks">
                  <font style="color:red">{{($errors->has('start_marks'))?($errors->first('start_marks')):''}}</font>
                </div>
                  <div class="col-3">
                    <label for="">End Marks</label>
                   <input type="text" name="end_marks" class="form-control" id="" placeholder="Enter end_marks">
                  <font style="color:red">{{($errors->has('end_marks'))?($errors->first('end_marks')):''}}</font>
                </div>
                <div class="col-3">
                    <label for="">Start Point</label>
                   <input type="text" name="start_point" class="form-control" id="" placeholder="Enter start_point">
                  <font style="color:red">{{($errors->has('start_point'))?($errors->first('start_point')):''}}</font>
                </div>
                <div class="col-3">
                    <label for="">End Point</label>
                   <input type="text" name="end_point" class="form-control" id="" placeholder="Enter End Point">
                  <font style="color:red">{{($errors->has('end_point'))?($errors->first('end_point')):''}}</font>
                </div>
                <div class="col-3">
                    <label for="">remarks</label>
                   <input type="text" name="remarks" class="form-control" id="" placeholder="Enter remarks">
                  <font style="color:red">{{($errors->has('remarks'))?($errors->first('remarks')):''}}</font>
                </div>



                </div>

                  <div class="mt-3">
                     <button type="submit" class="btn btn-success">Add Subject</button>
                  </div>
              </div>
            </form>

              <!-- /.card-body -->
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Grade Name</th>
                    <th>Grade Point</th>
                    <th>Start Marks</th>
                    <th>End Marks</th>
                    <th>Start Point</th>
                    <th>End Point</th>
                    <th>Remarks</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>

                   @foreach($grade as $key=>$item)
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$item->grade_name}}</td>
                    <td>{{$item->grade_point}}</td>
                    <td>{{$item->start_marks}}</td>
                    <td>{{$item->end_marks}}</td>
                    <td>{{$item->start_point}}</td>
                    <td>{{$item->end_point}}</td>
                    <td>{{$item->end_point}}</td>
                    <td>{{$item->remarks}}</td>
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
