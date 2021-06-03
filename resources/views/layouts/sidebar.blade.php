<span href="#" class="brand-link">
  <img src="{{ asset('dist/img/samplePhoto.png') }}" alt="User Default Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">{{ Auth::user()->name }}</span>
</span>
<div class="sidebar">


  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

     <li class="nav-item">
       <a href="{{ url('dashboard') }}" class="nav-link">
         <i class="nav-icon fas fa-home"></i>
         <p>Dashboard</p>
       </a>
     </li>
      <li class="nav-item">
        @if(Auth::user()->role == 'admin')
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-user"></i>
          <p>
            Users
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>All Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('users.create') }}" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>Create User</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p>
            Schedules
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('schedules.index') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>All Schedules</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('schedules.create') }}" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>Create Schedule</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-header">Account</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tree"></i>
          <p>
            My Account
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('profile') }}" class="nav-link">
              <i class="far fa-user nav-icon"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">

            <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt nav-icon"></i>{{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
          </li>

        </ul>
      </li>
      @else
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Schedules
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('schedules.index') }}" class="nav-link">
                <i class="nav-icon fas fa-calendar"></i>
                <p>All Schedules</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('schedules.create') }}" class="nav-link">
                <i class="nav-icon fas fa-plus"></i>
                <p>Create Schedule</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-header">Account</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              My Account
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('profile') }}" class="nav-link">
                <i class="far fa-user nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="nav-item">

              <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt nav-icon"></i>{{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </li>
      @endif
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
