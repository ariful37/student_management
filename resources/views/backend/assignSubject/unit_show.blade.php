 <!-- Content Wrapper. Contains page content -->
  @extends('backend.layouts.master')
  @push('css')
    <!-- JQuery DataTable Css -->
  <link rel="stylesheet" href="{{asset('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

  @endpush
  @section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Unit List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Unit List</li>
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
                <h3 class="card-title">Manage Unit</h3>
                <a href="{{route('unit.create')}}" class="btn btn-success float-right btn-sm">  <i class="nav-icon fas fa-user-plus"></i> Add Unit</a>
              </div>
              <!-- /.card-header -->
         
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>

                   @foreach($units as $key=>$unit)    
                  <tr>
                    <td>{{ $key + 1 }}</td>
                
                    <td>{{ $unit->unit_name}}</td>
               
                    <td>
                      <a href="{{route('unit.edit',$unit->id)}}" class="text-info" ><i class="nav-icon fas fa-edit"></i></a>
                      <a href="{{route('unit.delete',$unit->id)}}"  class="text-danger"><i class="nav-icon fas fa-trash-alt"></i></a>
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
  <script src="{{asset('asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
 <script src="{{asset('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
 <script src="{{asset('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- JQuery DataTable Js -->
      <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
  @endpush


  @endsection