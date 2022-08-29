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
           <h1>Edit Profile</h1>
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
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
                <a href="{{route('profile.view')}}" class="btn btn-success orange float-right btn-sm">  <i class="nav-icon fas fa-list"></i>User Profile</a>
              </div>
              <!-- /.card-header -->
        
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        
              
              <!-- /.card-header -->
            <div class="card card-danger">
             <form action="{{route('profile.update',$editData->id)}}" id="quickForm" method="POST" enctype="multipart/form-data">
              @csrf
           
              <div class="card-body">
                <div class="row">
                  
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
                   <div class="col-4">
                      <label for="exampleInputEmail1">Phone Number</label>
                     <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter phone" value="{{$editData->phone}}">
                    <font style="color:red">{{($errors->has('phone'))?($errors->first('phone')):''}}</font>
                  </div>
                   <div class="col-4">
                      <label for="exampleInputEmail1">Address</label>
                     <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter address" value="{{$editData->address}}">
                    <font style="color:red">{{($errors->has('address'))?($errors->first('address')):''}}</font>
                  </div>
                   <div class="col-4">
                    <label for="exampleInputEmail1">Select Gender</label>
                      <select class="form-control" name="gender">
                        <option value="">Select Gender</option>
                          <option value="Male" {{($editData->gender =="Male")?"selected":""}}>Male</option>
                          <option value="Female" {{($editData->gender =="Female")?"selected":""}}>Female</option>
                      </select>
                  </div>
                   <div class="col-4 mt-3">
                      <label for="exampleInputEmail1">Image</label>
                      <img id="blah" src="{{(!empty($editData->image))?url('images/userImage/'.$editData->image):url('asset/dist/img/user2-160x160.jpg')}}" alt="your image" width="100" height="100" />

                     <input type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
   
                 
                  </div>
               
                 
                </div>

                  <div class="mt-3">
                     <button type="submit" class="btn btn-success">Update Profile</button>
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