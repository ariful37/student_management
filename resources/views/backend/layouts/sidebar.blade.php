 @php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
 @endphp



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('asset/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{(!empty(Auth::user()->image))?url('images/userImage/'.Auth::user()->image):url('asset/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">name</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item has-treeview {{$prefix == '/user'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy text-warning"></i>
              <p>
               Manage User
                <i class="fas fa-angle-left right text-success "></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user.view')}}" class="nav-link {{$route=='user.view'?'active':''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>View User</p>
                </a>
              </li>


            </ul>
          </li>

           <li class="nav-item has-treeview {{$prefix == '/profile'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-circle text-success"></i>
              <p>
               Manage Profile
                <i class="fas fa-angle-left right text-success "></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profile.view')}}" class="nav-link {{$route=='profile.view'?'active':''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>View Profile</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('profile.password.view')}}" class="nav-link {{$route=='profile.password.view'?'active':''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>View Password</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview {{$prefix == '/year'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-circle text-success"></i>
              <p>
                Setup Management
                <i class="fas fa-angle-left right text-success "></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('year.view')}}" class="nav-link {{$route=='year.view'?'active':''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Year</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('class.view')}}" class="nav-link {{$route=='class.view'?'active':''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Class</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('group.view')}}" class="nav-link {{$route=='group.view'?'active':''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Group</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('exam-name.view')}}" class="nav-link {{$route=='exam-name.view'?'active':''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Exam Name</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('section.view')}}" class="nav-link {{$route=='section.view'?'active':''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Section Name</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{$prefix == '/student'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-circle text-success"></i>
              <p>
               Student
                <i class="fas fa-angle-left right text-success "></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('student.create')}}" class="nav-link {{$route=='student.create'?'active':''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Student Info</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{$prefix == '/exam'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-circle text-success"></i>
              <p>
               Manage Exam
                <i class="fas fa-angle-left right text-success "></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('subject.create')}}" class="nav-link {{$route=='subject.create'?'active':''}}">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Subject</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('mark-entry-show')}}" class="nav-link {{$route=='mark-entry-show'?'active':''}}">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Marks Entry</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('marks.edit')}}" class="nav-link {{$route=='marks.edit'?'active':''}}">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Marks Edit</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="{{route('exam.create')}}" class="nav-link {{$route=='exam.create'?'active':''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>View exam configure</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('get-student-report')}}" class="nav-link {{$route=='get-student-report'?'active':''}}">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Student Report</p>
                </a>
              </li>
            </ul>
          </li>







           {{-- <li class="nav-item has-treeview {{$prefix == '/supplier'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy text-warning"></i>
              <p>
               Manage Supplier
                <i class="fas fa-angle-left right text-success "></i>

              </p>
            </a>

          </li> --}}




            <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
              <p>
                 {{ __('Logout') }}

              </p>
            </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
