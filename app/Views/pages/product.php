<?php $this->extend('layouts/app') ?>

<?php $this->section('content') ?>

<div class="jumbotron jumbotron-fluid banner-product-indah-taman-utama">
    <div class="container mt-5 text-center">
        <h3 class="display-4">INDAH TAMAN</h3>
        <p>Tanaman Hias | Tukang Taman | Media Tanam | Peralatan Taman.</p>
    </div>
</div>

<div class="container my-5">

    <!-- navigation for user -->
    <div class="row my-3 my-md-4">
        <div class="col">
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?= base_url() ?>/frontend/img/icon/filter.svg">
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url() ?>/home/search/TAMAN">Taman</a>
                    <a class="dropdown-item" href="<?= base_url() ?>/home/search/TANAMAN">Tanaman</a>
                    <a class="dropdown-item" href="<?= base_url() ?>/home/search/MEDIA_TANAM">Media tanam</a>
                </div>
            </div>
        </div>
        <div class="col text-right">
            <button class="btn btn-dark d-md-none" data-toggle="modal" data-target="#searchModal"><img src="<?= base_url() ?>/frontend/img/icon/search.svg" class="img-fluid" width="20"></button>

            <form class="form-inline d-none d-md-block" action="<?= base_url() ?>/home/search" method="post">
                <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-dark my-2 my-sm-0" type="submit"><img src="<?= base_url() ?>/frontend/img/icon/search.svg" class="img-fluid" width="20"></button>
            </form>
        </div>
    </div>

    <div class="row banner-product-indah-taman">
        <div class="col text-center popular-produk py-3 text-white">
            <h2 data-aos="fade-up">Produk di toko indah taman</h2>
            <p class="mt-3" data-aos="flip-left">Mulai kembangkan hobby tanaman anda dengan <br> belanja tanaman
                di sini.</p>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-4" data-aos="fade-up">
        <?php
        sort($products);
        ?>
        <?php for ($i = 0; $i < count($products) - 1; $i++) : ?>
            <?php
            if ($products[$i]['id'] != $products[$i + 1]['id']) :
            ?>
                <div class="col text-center">
                    <div class="card custom-card">
                        <img src="<?= base_url() ?>/upload/<?= $products[$i]['image_name'] ?>" class="" style="width:100%;height:200px">
                        <div class="card-body">
                            <h5 class="card-title"><?= $products[$i]['product_name'] ?></h5>
                            <hr>
                            <div>
                                <span>Harga : </span>
                                Rp. <?= number_format($products[$i]['product_price']) ?> ,-
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="<?= base_url() ?>/home/product/<?= $products[$i]['id'] ?>" class="btn btn-description-custom">Deskripsi</a> </div>
                        </div>
                    </div>
                </div>
            <?php
            elseif ($i == count($products) - 3) : ?>
                <?php $jmlArray = count($products) - 1; ?>
                <div class="col text-center">
                    <div class="card custom-card">
                        <img src="<?= base_url() ?>/upload/<?= $products[$jmlArray]['image_name'] ?>" class="" style="width:100%;height:200px">
                        <div class="card-body">
                            <h5 class="card-title"><?= $products[$jmlArray]['product_name'] ?></h5>
                            <hr>
                            <div>
                                <span>Harga : </span>
                                Rp. <?= number_format($products[$jmlArray]['product_price']) ?> ,-
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="<?= base_url() ?>/home/product/<?= $products[$jmlArray]['id'] ?>" class="btn btn-description-custom">Deskripsi</a> </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        <?php endfor; ?>
    </div>

</div>

<!-- Modal search responsives -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cari produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="Search">
                    <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit"><img src="<?= base_url() ?>/frontend/img/icon/search.svg" class="img-fluid" width="20"></button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>