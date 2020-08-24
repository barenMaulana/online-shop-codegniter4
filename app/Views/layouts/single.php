<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?= $this->include('includes/style') ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">
            <img src="<?= base_url() ?>/frontend/img/logo.png" width="40" class="m-1 rounded-circle">
            <a class="navbar-brand" href="<?= base_url() ?>">Indah Taman</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="/">Home</a>
                    <a class="nav-item nav-link active" href="/indah-taman-product">Products</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- content -->
    <?= $this->renderSection('content') ?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col end-of-footer text-center">
                    <p>2020 - 2021 | Grow Plant Allright reserved | Love from Bogor <img src="frontend/img/icon/kujang.png" width="10"></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- modal kontak -->
    <div class="modal fade" id="hubungiPenjual" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hubungi Melalui</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-contact-list">
                    <div class="row">
                        <div class="col">
                            <a href="#">
                                <img src="<?= base_url() ?>/frontend/img/icon/fb.png" width="50">
                                <span class="ml-2">Grow Plant</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="#">
                                <img src="<?= base_url() ?>/frontend/img/icon/wa.png" class="wa-image" width="70">
                                <span>081384848484</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="#">
                                <img src="<?= base_url() ?>/frontend/img/icon/ig.png" width="50">
                                <span class="ml-2">Grow_Plant</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cta-button-custom-product" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- pilihan toko online untuk belanja -->
    <div class="modal fade" id="pilihMetodePemesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Pilih metode pemesanan</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row text-center row-cols-1">
                        <div class="col my-3">
                            <img src="<?= base_url() ?>/frontend/img/logo/logo_tokopedia.png" width="70">
                            <a href="https://www.tokopedia.com/zahirataman/tanaman-aglonema-red-king?trkid=f%3DCa0000L000P0W0S0Sh%2CCo0Po0Fr0Cb0_src%3Dfeatured-product_page%3D1_ob%3D32_q%3D_po%3D1_catid%3D1655&whid=0" class="text-dark" target="_blank">
                                Toko grow plant
                            </a>
                        </div>
                        <div class="col my-3">
                            <img src="<?= base_url() ?>/frontend/img/logo/logo_shopee.png" width="70">
                            <a href="#" class="text-dark">
                                Toko grow plant
                            </a>
                        </div>
                        <div class="col my-3">
                            <img src="<?= base_url() ?>/frontend/img/logo/logo_lazada.png" width="70">
                            <a href="#" class="text-dark">
                                Toko grow plant
                            </a>
                        </div>
                        <div class="col my-3">
                            <img src="<?= base_url() ?>/frontend/img/icon/wa.png" width="70">
                            <a href="#" class="text-dark">
                                Toko grow plant
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('includes/script') ?>
</body>

</html>