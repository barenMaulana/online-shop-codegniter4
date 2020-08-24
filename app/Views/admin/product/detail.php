<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<?php if (!empty($products)) : ?>

    <div class="container my-3 my-md-5">
        <div class="row">
            <div class="col col-12 col-md-7 mx-auto">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php for ($i = 0; $i < count($products); $i++) : ?>
                            <div class="carousel-item <?= ($i == 0) ? "active" : "" ?> ">
                                <img src="<?= base_url() ?>/upload/<?= $products[$i]['image_name'] ?>" class="d-block w-100">
                            </div>
                        <?php endfor; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col col-12 my-md-3 my-2">
                <ul class="list-group list-group-detail-custom">
                    <li class="list-group-item"> <b> <?= $products[0]['product_name'] ?> </b></li>
                    <li class="list-group-item">Harga : <b> RP. <?= number_format($products[0]['product_price']) ?> </b></li>
                    <li class="list-group-item"> <b><span>Deskripsi</span></b> <br> <?= $products[0]['product_desc'] ?></li>
                </ul>
            </div>
            <div class="col col-md-5 text-center">
                <a href="<?= base_url() ?>/admin-product" class="btn btn-block btn-sm btn-md-lg btn-primary">Kembali</a>
            </div>
        </div>
    </div>

<?php else : ?>

    <div class="container my-3 my-md-5">
        <div class="alert alert-warning">
            <h3 class="text-center">
                Anda belum mnambahkan foto untuk produk
            </h3>
        </div>
        <h5 class="text-center">
            Tolong upload foto produk terlebih dahulu setelah itu kembali lagi ke sini.
        </h5>
        <div class="row">
            <div class="col col-md-5 mx-auto my-2">
                <a href="<?= base_url() ?>/admin-product" class="btn btn-block btn-sm btn-md-lg btn-primary">Kembali</a>
            </div>
        </div>
    </div>

<?php endif ?>


<?= $this->endSection() ?>