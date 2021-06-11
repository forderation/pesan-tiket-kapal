<aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">ADMIN</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('adm1n.dashboard.index')}}" class="nav-link {{request()->is('*dashboard*')? "active":""}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="{{route('adm1n.jadwal')}}" class="nav-link {{request()->is('*jadwal*')? 'active':''}}">
                        <i class="nav-icon fas fa-ship"></i>
                        <p>
                            Jadwal Speedboat
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('adm1n.order')}}" class="nav-link {{request()->is('*berita*')? 'active':''}}">
                        <i class="nav-icon fas fa-file"></i></i>
                        <p>
                            Pemesanan
                        </p>
                    </a>
                </li>

                <li class="nav-header"></li>
                <li class="nav-item"></li>
                <li class="nav-header"></li>
                <li class="nav-item"></li>
                <li class="nav-header"></li>
                <li class="nav-item"></li>
                <li class="nav-header"></li>
                <li class="nav-item"></li>
                <li class="nav-header"></li>
                <li class="nav-item"></li>
                <li class="nav-header"></li>
                <li class="nav-item"></li>
                <li class="nav-header"></li>
                <li class="nav-item"></li>
                <li class="nav-header"></li>
                <li class="nav-item"></li>
                <li class="nav-header"></li>
                <li class="nav-item"></li>
                <li class="nav-header"></li>
                <li class="nav-item"></li>
                <li class="nav-header"></li>
                <li class="nav-item"></li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>