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
           <h1>Add Subject</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Subject</li>
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
                <h3 class="card-title">Manage Subject</h3>
                <a href="" class="btn btn-success orange float-right btn-sm">  <i class="nav-icon fas fa-list"></i>Subject</a>
              </div>
              <!-- /.card-header -->

              <!-- /.card-body -->
            </div>
            <!-- /.card -->

              <!-- /.card-header -->
            <div class="card card-danger">
             <form action="{{route('subject.store')}}" id="quickForm" method="POST">
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
                  <div class="col-3">
                    <label for="exampleInputEmail1">Select Group Name</label>
                      <select class="form-control" name="GroupId">
                        <option value="">Select Group Name</option>
                        @foreach($group as $item)
                          <option value="{{$item->id}}">{{$item->group_name}}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="col-4">
                      <label for="exampleInputEmail1">SubjectName</label>
                     <input type="text" name="SubjectName" class="form-control" id="exampleInputEmail1" placeholder="Enter SubjectName">
                    <font style="color:red">{{($errors->has('SubjectName'))?($errors->first('SubjectName')):''}}</font>
                  </div>
                  <div class="col-4">
                      <label for="">SubjectCode</label>
                     <input type="text" name="SubjectCode" class="form-control" id="" placeholder="Enter SubjectCode">
                    <font style="color:red">{{($errors->has('SubjectCode'))?($errors->first('SubjectCode')):''}}</font>
                  </div>



                </div>

                  <div class="mt-3">
                     <button type="submit" class="btn btn-success">Add Subject</button>
                  </div>
              </div>
            </form>

              <!-- /.card-body -->
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
