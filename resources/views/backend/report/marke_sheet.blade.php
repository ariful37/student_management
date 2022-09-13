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
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Mark Sheet</h3>
                {{-- <a href="{{route('category.view')}}" class="btn btn-success orange float-right btn-sm">  <i class="nav-icon fas fa-list"></i>Unit List</a> --}}
              </div>
              <!-- /.card-header -->

              <!-- /.card-body -->
            </div>
            <!-- /.card -->



              <!-- /.card-header -->
            <div class="card card-danger">
             <form action="{{ route('marks.sheet.get') }}" id="quickForm" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <label for="">Select Academic Year</label>
                          <select class="form-control AyId" name="AyId" required>
                            <option value="">Select Year</option>
                            @foreach($academicYear as $item)
                              <option value="{{$item->id}}">{{$item->year}}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-3">
                        <label for="">Select Class</label>
                          <select class="form-control ClassId" name="ClassId"  required>
                            <option value="">Select Class</option>
                            @foreach($classes as $item)
                              <option value="{{$item->id}}">{{$item->class_name}}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-2">
                        <label for="">Exam Type</label>
                          <select class="form-control" name="ExampNameId" required>
                            <option value="">Select Exam Name</option>
                            @foreach($examType as $item)
                              <option value="{{$item->id}}">{{$item->exam_name}}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-2">
                        <label for="">Student Roll</label>
                          <input type="text" class="form-control" name="RollNo" placeholder="RollNo">
                      </div>
                      <div class="col-2 " style="margin-top: 32px;">

                         <button class="btn btn-success">Search</button>
                      </div>
                 </div>
              </div>
                <!-- /.card-header -->
                <div id="data">

                </div>
            </form>

              <!-- /.card-body -->
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
  <script type="text/javascript">
$(document).ready(function () {

  $('#quickForm').validate({
    rules: {
        AyId: {
        required: true,
      },
      ClassId: {
        required: true,
      },
      SubjectId: {
        required: true,
      },
      ExampNameId: {
        required: true,
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

{{-- <script>
  $(document).on('click','#search',function(e){
    e.preventDefault();

    var AyId = $('.AyId').val();
    var classId = $('.ClassId').val();
    var SubjectId = $('.SubjectId').val();
    var ExampNameId = $('.ExampNameId').val();
    let url = "{{ route('student-progress-report') }}";
    console.log(AyId);
  $.ajax({
    url :url,
    type :'get',
    data : {AyId: AyId,ClassId:classId},
    success: function(res){
       $('#data').html(res);
    }
  });
  });
</script> --}}

  @endpush


  @endsection
