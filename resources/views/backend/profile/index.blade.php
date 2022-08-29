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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 offset-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{(!empty($users->image))?url('images/userImage/'.$users->image):url('asset/dist/img/user2-160x160.jpg')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$users->name}}</h3>

                <p class="text-muted text-center">{{$users->Address}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right">{{$users->address}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$users->email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone</b> <a class="float-right">{{$users->phone}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Gender</b> <a class="float-right">{{$users->gender}}</a>
                  </li>

                </ul>
                  <a href="{{route('profile.edit',$users->id)}}" class="btn btn-info">Edit Profile</a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
          </div>
          <!-- /.col -->
       
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @push('js')

  @endpush


  @endsection