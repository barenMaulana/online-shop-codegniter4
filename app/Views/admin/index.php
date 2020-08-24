<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid ">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <div class="row justify-content-center">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Produk</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($products) ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-seedling fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
  </div>

</div>
<?= $this->endSection() ?>