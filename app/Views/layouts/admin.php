<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= ($title) ? $title : "Indah Taman-Tukang taman - toko tanaman" ?></title>

  <!-- favicon -->
  <link rel="shortcut icon" href="<?= base_url() ?>/frontend/img/logo.png" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>/backend/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>/frontend/css/style.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img src="<?= base_url() . '/frontend/img/logo.png' ?>" width="40">
        </div>
        <div class="sidebar-brand-text mx-3">Alam Indah</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <?php $uri = service('uri'); ?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?= ($uri->getSegment(1) == 'admin'  ? 'active' : NULL) ?>">
        <a class="nav-link" href="<?= base_url() . '/admin' ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item <?= ($uri->getSegment(1) == 'admin-product' ? 'active' : NULL) ?>">
        <a class="nav-link" href="<?= base_url() . '/admin-product' ?>">
          <i class="fas fa-fw fa-leaf"></i>
          <span>Product</span></a>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item <?= ($uri->getSegment(1) == 'admin-gallery' ? 'active' : NULL) ?>">
        <a class="nav-link" href="<?= base_url() . '/admin-gallery' ?>">
          <i class="fas fa-fw fa-image"></i>
          <span>Gallery</span></a>
      </li>

      <hr class="sidebar-divider">

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

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Alam Indah | <?= esc(session()->get('username')); ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url(); ?>/frontend/img/logo.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <?= $this->renderSection('content') ?>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Tukang Taman Alam Indah 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik logout untuk keluar</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>/backend/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(); ?>/backend/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url(); ?>/backend/vendor/chart.js/Chart.min.js"></script>

  <!-- sweetalert -->
  <script src="<?= base_url() ?>/frontend/libraries/sweetalert/sweetalert2.all.min.js"></script>

  <!-- my js script -->
  <script src="<?= base_url() ?>/frontend/js/myscript.js"></script>

</body>

</html>