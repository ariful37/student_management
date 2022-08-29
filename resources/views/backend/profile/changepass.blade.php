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
           <h1>View Password</h1>
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">View Password</li>
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
                <h3 class="card-title">Change Password</h3>
                <a href="{{route('user.view')}}" class="btn btn-success orange float-right btn-sm">  <i class="nav-icon fas fa-list"></i> User View</a>
              </div>
              <!-- /.card-header -->
        
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        
              
              <!-- /.card-header -->
            <div class="card card-danger">
                <div class="card card-danger">
        
            <div class="card card-danger">
             <form action="{{route('profile.password.update')}}" id="quickForm" method="POST" >
              @csrf
           
              <div class="card-body">
                <div class="row">
                   <div class="col-4">
                      <label for="current_password">Current Password</label>
                    <input type="password" name="current_password" id="current_password" class="form-control" >
                  </div>
                    <div class="col-4">
                      <label for="new_password">New Password</label>
                    <input type="password" name="new_password" id="new_password" class="form-control" >
                  </div>
                   <div class="col-4">
                      <label for="again_new_password">Again New Password</label>
                      <input type="password" name="again_new_password" class="form-control">
                  </div>

              
                </div>

                  <div class="mt-3">
                     <button type="submit" class="btn btn-success">Update</button>
                  </div>
              </div>
            </form>
           
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
     
      current_password: {
        required: true,
      },
       new_password: {
        required: true,
        minlength: 6
      },
      again_new_password: {
        required: true,
        equalTo: '#new_password'
      },
     
    },
    messages: {
    
      current_password: {
        required: "Please Enter Your Current Password",
      },
       new_password: {
        required: "Please Enter Your New Password",
        minlength: "Your password must be at least  6 characters long"
      },
       again_new_password: {
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