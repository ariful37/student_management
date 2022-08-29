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
           <h1>Edit User</h1>
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit User</li>
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
                <h3 class="card-title">Manage User</h3>
                <a href="{{route('user.view')}}" class="btn btn-success orange float-right btn-sm">  <i class="nav-icon fas fa-list"></i>User List</a>
              </div>
              <!-- /.card-header -->
        
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        
              
              <!-- /.card-header -->
            <div class="card card-danger">
             <form action="{{route('user.update',$editData->id)}}" id="quickForm" method="POST">
              @csrf
           
              <div class="card-body">
                <div class="row">
                   <div class="col-4">
                    <label for="exampleInputEmail1">Select Role</label>
                      <select class="form-control" name="usertype">
                        <option value="">Select User</option>
                          <option value="Admin" {{($editData->usertype =="Admin")?"selected":""}}>Admin</option>
                          <option value="User" {{($editData->usertype =="User")?"selected":""}}>User</option>
                      </select>
                  </div>
                  <div class="col-4">
                      <label for="exampleInputEmail1">Name</label>
                     <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="{{$editData->name}}">
                    <font style="color:red">{{($errors->has('email'))?($errors->first('name')):''}}</font>
                  </div>
                  <div class="col-4">
                      <label for="exampleInputEmail1">Email address</label>
                     <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{$editData->email}}">
                    <font style="color:red">{{($errors->has('email'))?($errors->first('name')):''}}</font>
                  </div>
               
                  
                </div>

                  <div class="mt-3">
                     <button type="submit" class="btn btn-success">Update User</button>
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
        minlength: 5
      },
      password2: {
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
        
      },
     
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
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