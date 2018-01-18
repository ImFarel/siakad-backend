<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{!! Auth::user()->name !!}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i>
            Online
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">&mdash; Menu Utama</li>
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
          <a href="{{ url('/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="header">&mdash; Data Mahasiswa</li>
        <li class=" treeview"> <!--{{Request::is('/dashboard*')? 'active menu-open' : '' }}-->
          <a href="#"><i class="fa fa-credit-card"></i> <span>Kartu Rencana Study</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Kartu Rencana Study</a></li>
            <li><a href="#">Kartu Hasil Study</a></li>
            <li><a href="#">Transkrip Nilai</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-credit-card"></i> <span>Kartu Hasil Study</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Kartu Rencana Study</a></li>
            <li><a href="#">Kartu Hasil Study</a></li>
            <li><a href="#">Transkrip Nilai</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Transkrip Nilai</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Kartu Rencana Study</a></li>
            <li><a href="#">Kartu Hasil Study</a></li>
            <li><a href="#">Transkrip Nilai</a></li>
          </ul>
        </li>

        <li class="header">&mdash; Data Dosen</li>
        <!-- Optionally, you can add icons to the links -->
        <li class=" treeview"> <!--{{Request::is('/dashboard*')? 'active menu-open' : '' }}-->
          <a href="#"><i class="fa fa-credit-card"></i> <span>Kartu Rencana Study</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Kartu Rencana Study</a></li>
            <li><a href="#">Kartu Hasil Study</a></li>
            <li><a href="#">Transkrip Nilai</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-credit-card"></i> <span>Kartu Hasil Study</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Kartu Rencana Study</a></li>
            <li><a href="#">Kartu Hasil Study</a></li>
            <li><a href="#">Transkrip Nilai</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Transkrip Nilai</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Kartu Rencana Study</a></li>
            <li><a href="#">Kartu Hasil Study</a></li>
            <li><a href="#">Transkrip Nilai</a></li>
          </ul>
        </li>

          <li class="header">&mdash;User Management</li>
          <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>User</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('users.index')}}">List user</a></li>
              <li><a href="{{route('users.add')}}">Add user</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Roles & Permission</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('roles.index')}}">List roles</a></li>
              <li><a href="{{route('roles.add')}}">Add roles</a></li>
            </ul>
          </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
