<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alam Indah | Tukang taman</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>/backend/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/frontend/css/style.css" rel="stylesheet">

</head>

<body class="bg-custom-register">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block custom-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Alam Indah</h1>
                  </div>
                  <?php if(session()->get('success')) : ?>
                    <div class="row">
                      <div class="col">
                        <div class="alert alert-success">
                          <?= session()->get('success') ?>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                  <?php if(isset($validation)) : ?>
                    <div class="row">
                      <div class="col">
                        <div class="alert alert-danger">
                          <?= $validation->listErrors() ?>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                  <form class="user" method="post" action="<?= base_url(); ?>/Auth">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" value="<?= $username ?>">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <button class="btn btn-primary btn-user btn-block mt-3" type="submit">
                      Login
                    </button>
                  </form>
                  <hr>
                    <div class="text-center">
                      <a class="small" href="<?= base_url() ?>/registration">Saya belum punya akun</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>/backend/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() ?>/backend/js/sb-admin-2.min.js"></script>

</body>

</html>
