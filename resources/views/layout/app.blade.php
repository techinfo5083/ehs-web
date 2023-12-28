<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title> {{ $tittle }}</title>

  <!-- Custom fonts for this template-->
  <link href="/asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="/asset/css/sb-admin-2.min.css" rel="stylesheet" />
  @livewireStyles
</head>

<body id="page-top">

  @include('sweetalert::alert')
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-text ">EHS JWS</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Nav Item - Dashboard -->
      @if(Auth()->user()->role == "Master")
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      @endif

      <!-- Divider -->
      @if(Auth()->user()->role == "Master")
      <hr class="sidebar-divider" />

      <li class="nav-item active">
        <a class="nav-link" href="/dashboard/kendaraan">
          <i class="fas fa-motorcycle"></i>
          <span>Kendaraan</span></a>
      </li>
      @else(Auth()->user()->role == "Admin")
      <hr class="sidebar-divider" />

      <li class="nav-item active">
        <a class="nav-link" href="/dashboard/kendaraan">
          <i class="fas fa-motorcycle"></i>
          <span>Kendaraan</span></a>
      </li>
      @endif
      <!-- Divider -->
      @if(Auth()->user()->role == "Master")
      <hr class="sidebar-divider" />
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard/check-kendaraan">
          <i class="fas fa-list"></i>
          <span>Cek Kendaraan</span></a>
      </li>
      @else(Auth()->user()->role == "Admin")
      <hr class="sidebar-divider" />
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard/check-kendaraan">
          <i class="fas fa-list"></i>
          <span>Cek Kendaraan</span></a>
      </li>
      @endif

      @if(Auth()->user()->role == "Master")
      <hr class="sidebar-divider" />
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard/user">
          <i class="fas fa-user"></i>
          <span>User</span></a>
      </li>
      @endif

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <img src="/asset/img/logo-ehs.png" alt="" style="width: 60px;">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth()->user()->name }}</span>
                <img class="img-profile rounded-circle" src="/asset/img/undraw_profile.svg" />
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <form action="/logout" method="post">
                  @csrf
                  <button class="dropdown-item">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                    logout
                  </button>
                </form>
                <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  Logout
                </a> -->
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @yield('content')
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; PT.MITSUYOHSI MANUFACTURING INDONESIA
              2023</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"> </i>
  </a>

  <!-- Bootstrap core JavaScript-->
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <x-livewire-alert::scripts />
  <script src="/asset/vendor/jquery/jquery.min.js"></script>
  <script src="/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/asset/js/sb-admin-2.min.js"></script>

  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'center',
      showConfirmButton: false,
      showDenyButton: false,
      showCloseButton: true,
      timer: 5000,
      timerProgressBar: false,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    });

    window.addEventListener('alert', ({
      detail: {
        type,
        message
      }
    }) => {
      Toast.fire({
        icon: type,
        title: message
      })
    })
  </script>

</body>

</html>