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
           <h1>Add Assign Subject</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Assign Subject</li>
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
                <h3 class="card-title">Manage Assign Subject</h3>
                <a href="" class="btn btn-success orange float-right btn-sm">  <i class="nav-icon fas fa-list"></i>Assign Subject</a>
              </div>
            </div>
            <!-- /.card -->
              <!-- /.card-header -->
            <div class="card card-danger">
             <form action="{{route('assing.subject.store')}}" id="quickForm" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="row">

                    <div class="col-5">
                        <label for="exampleInputEmail1">Select Class Name</label>
                          <select class="form-control" name="ClassId">
                            <option value="">Select Class</option>
                            @foreach($class as $item)
                              <option value="{{$item->id}}">{{$item->class_name}}</option>
                            @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="add_item">
                    <div class="row">
                            <div class="col-lg-3">
                                <label for="exampleInputEmail1">Select Subject</label>
                                  <select class="form-control" name="SubjectId[]">
                                    <option value="">Select Subject</option>
                                    @foreach($subject as $item)
                                      <option value="{{$item->id}}">{{$item->SubjectName}}</option>
                                    @endforeach
                                  </select>
                              </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Full Marks</label>
                                    <input type="text" class="form-control" id="" name="full_mark[]" placeholder="Full Marks">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Pass Mark</label>
                                    <input type="text" class="form-control" id="" name="pass_mark[]" placeholder="Pass Mark">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Get Mark</label>
                                    <input type="text" class="form-control" id="" name="subjective_mark[]" placeholder="Get Mark">
                                </div>
                            </div>
                         <div class="col-lg-1 py-4">
                            <span class="btn btn-success addventmore"><i class="fa-solid fa-plus"></i></span>
                         </div>
                     </div>
                    </div>
                  <div class="mt-3">
                     <button type="submit" class="btn btn-success">Add Assign Subject</button>
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
                    <th>Class Name</th>
                    <th>Subject Name</th>
                    <th>Full Mark</th>
                    <th>Pass Mark</th>
                    <th>Subjectve Mark</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>

                   @foreach($assignSubject as $key=>$item)
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->ClassId}}</td>
                    <td>{{ $item->SubjectId}}</td>
                    <td>{{ $item->full_mark}}</td>
                    <td>{{ $item->pass_mark}}</td>
                    <td>{{ $item->subjective_mark}}</td>

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




  <div style="visibility: hidden">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
       <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
           <div class="row">
            <div class="col-lg-3">
                <label for="">Select Subject</label>
                  <select class="form-control" name="SubjectId[$i]">
                    <option value="">Select Subject</option>
                    @foreach($subject as $item)
                      <option value="{{$item->id}}">{{$item->SubjectName}}</option>
                    @endforeach
                  </select>
              </div>
                <div class="col-lg-2">
                   <div class="mb-3">
                       <label for="" class="form-label">Full Mark</label>
                       <input type="text" class="form-control" id="" name="full_mark[]" placeholder="Full Mark">
                     </div>
                </div>
                <div class="col-lg-2">
                    <div class="mb-3">
                        <label for="" class="form-label">Pass Mark</label>
                        <input type="text" class="form-control" id="" name="pass_mark[]" placeholder="Pass Mark">
                      </div>
                 </div>
                 <div class="col-lg-2">
                    <div class="mb-3">
                        <label for="" class="form-label">Get Mark</label>
                        <input type="text" class="form-control" id="" name="subjective_mark[]" placeholder="Subjectve Marks">
                      </div>
                 </div>
                <div class="col-lg-1 py-4">
                   <span class="btn btn-success addventmore"><i class="fa-solid fa-plus"></i></span>
                   <span class="btn btn-danger removeventmore"><i class="fa-solid fa-plus"></i></span>
                </div>
            </div>
       </div>
    </div>
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

<script type="text/javascript">
    $(document).ready(function () {
     var counter = 0;
     $(document).on("click",".addventmore",function(){
       var whole_extra_item_add = $("#whole_extra_item_add").html();
       $(this).closest(".add_item").append(whole_extra_item_add);
       counter++;
     });
     $(document).on("click",".removeventmore",function(event){
       $(this).closest(".delete_whole_extra_item_add").remove();
       counter -= 1
     });
    });
   </script>

  @endpush


  @endsection
