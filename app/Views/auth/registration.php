<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>/backend/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/frontend/css/style.css" rel="stylesheet">


</head>


<body class="bg-custom-register">
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block custom-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat akun</h1>
              </div>
              <?php if(isset($validation)) : ?>
                <div class="row">
                  <div class="col">
                    <div class="alert alert-danger">
                      <?= $validation->listErrors() ?>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              <form class="user" method="post" action="<?= base_url() ?>/Auth/registration">
                <div class="form-group row">
                  <div class="col m-auto col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName"
                      placeholder="Username">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 m-auto mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword"
                      placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 m-auto">
                    <input type="password" name="password_confirm" class="form-control form-control-user" id="exampleRepeatPassword"
                      placeholder="Repeat Password">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 m-auto">
                      <button type="submit" class="btn btn-primary btn-user btn-block">
                      Registrasi Akun
                    </button>
                  </div>
                </div>
                <hr>
              </form>
              <div class="text-center">
                <a class="small" href="<?= base_url() ?>/login">Sudah punya akun? Login!</a>
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