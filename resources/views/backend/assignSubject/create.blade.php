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

   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                Add Assign Subject
              </h3>
              {{-- <a href="" class="btn btn-success float-right btn-sm"><i class="fa fa-list"> View Assign Subject</i></a> --}}
            </div>
            <div class="card-body">
              <form role="form" action="{{ route('assing.subject.store') }}" method="POST" id="MyForm">
              @csrf
                <div class="add_item">
                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="ClassId">Class Name</label>
                      <select name="ClassId" class="form-control select2bs4">
                        <option value="">Select Class</option>
                          @foreach($class as $item)
                            <option value="{{ $item->id }}">{{ $item->class_name }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="SubjectId">Subject Name</label>
                      <select name="SubjectId[]" class="form-control select2bs4">
                        <option value="">Select Subject</option>
                          @foreach($subject as $item)
                            <option value="{{ $item->id }}">{{ $item->SubjectName }}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="full_mark">Full Marks</label>
                      <input type="number" name="full_mark[]" class="form-control" placeholder="Enter Full Mark">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="pass_mark">Pass Marks</label>
                      <input type="number" name="pass_mark[]" class="form-control" placeholder="Enter Pass Mark">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="subjective_mark">Subjective Marks</label>
                      <input type="number" name="subjective_mark[]" class="form-control" placeholder="Enter Subjective Mark">
                    </div>
                    <div class="form-group col-md-1" style="padding-top: 35px;">
                      <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Assign Subject</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
      <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="SubjectId">Subject Name</label>
            <select name="SubjectId[]" class="form-control">
              <option value="">Select Subject</option>
                @foreach($subject as $item)
                  <option value="{{ $item->id }}">{{ $item->SubjectName }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="full_mark">Full Marks</label>
            <input type="number" name="full_mark[]" class="form-control" placeholder="Enter Full Mark">
          </div>
          <div class="form-group col-md-2">
            <label for="pass_mark">Pass Marks</label>
            <input type="number" name="pass_mark[]" class="form-control" placeholder="Enter Pass Mark">
          </div>
          <div class="form-group col-md-2">
            <label for="subjective_mark">Subjective Marks</label>
            <input type="number" name="subjective_mark[]" class="form-control" placeholder="Enter Subjective Mark">
          </div>
          <div class="form-group col-md-2" style="padding-top: 35px;">
            <div class="form-row">
              <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
              <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
       "SubjectId[]": {
       required: true,

     },
     "pass_mark[]": {
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
    $(document).ready(function(){
      var counter = 0;
      $(document).on("click",".addeventmore",function(){
        var whole_extra_item_add = $("#whole_extra_item_add").html();
        $(this).closest(".add_item").append(whole_extra_item_add);
        counter++;
      });
      $(document).on("click",".removeeventmore",function(event){
        $(this).closest(".delete_whole_extra_item_add").remove();
        counter -= 1
      });
    });
  </script>

 @endpush


 @endsection
