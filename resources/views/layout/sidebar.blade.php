<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ Vite::asset('resources/img/Logo/1.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Edu Pusdatin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ Vite::asset('resources/img/Avatars/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item {{ request()->is('dashboard') ? 'menu-open' : '' }}">
          <a href="{{route('dashboard')}}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item  {{ request()->is('profile') ? 'menu-open' : '' }}">
          <a href="{{ route('profile')}}" class="nav-link {{ request()->is('profile') ? 'active' : '' }}">
            <i class="nav-icon fas fa-school"></i>
            <p>
              Data Sekolah
            </p>
          </a>
        </li>
        <li class="nav-item {{ request()->is('sarpras') ? 'menu-open' : '' }}">
          <a href="{{ route('sarpras')}}" class="nav-link {{ request()->is('sarpras') ? 'active' : '' }}">
            <i class="nav-icon fas fa-building"></i>
            <p>
              Data Sarpras
            </p>
          </a>
        </li>
        <li class="nav-item  {{ request()->is('gtk.guru') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link  {{ request()->is('gtk.guru') ? 'active' : '' }}">
            <i class="nav-icon fas fa-graduation-cap"></i>
            <p>
              Data GTK
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item {{ request()->is('gtk.guru') ? 'menu-open' : '' }}">
              <a href="{{route('gtk.guru')}}" class="nav-link {{ request()->is('gtk.guru') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Guru</p>
              </a>
            </li>
            <li class="nav-item {{ request()->is('gtk.tendik') ? 'menu-open' : '' }}">
              <a href="{{ route('gtk.tendik')}}" class="nav-link {{ request()->is('gtk.tendik') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Tendik</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-graduate"></i>
            <p>
              Peserta Didik
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('dashboard')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Peserta Didik</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/flot.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Alumni</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/inline.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Keluar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chalkboard"></i>
            <p>
              Rombongan Belajar
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kelas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/flot.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Eksktrakulikuler</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
              Jadwal
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Nilai
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Profile User
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-download"></i>
            <p>
              Pusat Unduhan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-door-open"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>