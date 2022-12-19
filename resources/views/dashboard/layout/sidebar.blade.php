<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <span class="brand-text font-weight-light">DASHBORD ARSIP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/satu" class="nav-link {{ Request::is('dashboard/satu*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-building"></i>
              <p>
                App Lembaga
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('dashboard/dua*') ? 'active' : '' }} || {{ Request::is('dashboard/tiga*') ? 'active' : '' }} || {{ Request::is('dashboard/empat*') ? 'active' : '' }} || {{ Request::is('dashboard/lima*') ? 'active' : '' }}">
              <i class="nav-icon fas fa fa-table"></i>
              <p>
                Table Referensi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard/dua" class="nav-link {{ Request::is('dashboard/dua*') ? 'active' : '' }}">
                  <i class="fa fa-arrow-right"></i>
                  <p>Ref Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard/tiga" class="nav-link {{ Request::is('dashboard/tiga*') ? 'active' : '' }}">
                <i class="fa fa-arrow-right"></i>
                  <p>Server Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard/empat" class="nav-link {{ Request::is('dashboard/empat*') ? 'active' : '' }}">
                <i class="fa fa-arrow-right"></i>
                  <p>Template IBSLITE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard/lima" class="nav-link {{ Request::is('dashboard/lima*') ? 'active' : '' }}">
                <i class="fa fa-arrow-right"></i>
                  <p>Sister Company</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('dashboard/laporan*') ? 'active' : '' }} ">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard/laporan" class="nav-link {{ Request::is('dashboard/laporan*') ? 'active' : '' }}">
                  <i class="fa fa-arrow-right"></i>
                  <p>Laporan Lembaga</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>