<?= $this->extend('layouts/single') ?>
<?= $this->section('content') ?>
<?php if (!empty($products)) : ?>

    <div class="container my-5 py-3">
        <div class="row my-3">
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
        </div>
        <div class="row justify-content-center">
            <div class="col col-12 col-md-5 my-md-3 my-2">
                <ul class="list-group list-group-detail-custom">
                    <li class="list-group-item"> <b> <?= $products[0]['product_name'] ?> </b></li>
                    <li class="list-group-item">Harga : <b> RP. <?= number_format($products[0]['product_price']) ?> </b></li>
                    <li class="list-group-item">
                        <sup>Pesan sekarang</sup><br>
                        <div class="row text-center text-md-left">
                            <div class="col col-md-12 m-2">
                                <a href="<?= $products[0]['link_tokopedia'] ?>" target="_blank">
                                    <img src="<?= base_url() ?>/frontend/img/logo/logo_tokopedia.png" width="50">
                                    Pesan melalui tokopedia
                                </a>
                            </div>
                            <div class="col col-md-12 m-2">
                                <a href="<?= $products[0]['link_shopee'] ?>" target="_blank">
                                    <img src="<?= base_url() ?>/frontend/img/logo/logo_shopee.png" width="50">
                                    Pesan melalui shopee
                                </a>
                            </div>
                            <div class="col col-md-12 m-2">
                                <a href="<?= $products[0]['link_lazada'] ?>" target="_blank">
                                    <img src="<?= base_url() ?>/frontend/img/logo/logo_lazada.png" width="50">
                                    Pesan melalui lazada
                                </a>
                            </div>
                            <div class="col col-12 col-md-12 m-2">
                                <a href="https://api.whatsapp.com/send?phone=62895372366949&text=Saya%20mau%20pesan%20<?= $products['0']['product_name'] ?>%20segera." target="_blank">
                                    <img src="<?= base_url() ?>/frontend/img/icon/wa.png" width="60">
                                    Pesan langsung
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col my-md-3 my-2">
                <ul class="list-group list-group-detail-custom">
                    <li class="list-group-item"> <b><span>Deskripsi</span></b> <br> <?= $products[0]['product_desc'] ?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col col-5">
                <ul class="list-group list-group-detail-custom">
                    <a href="/indah-taman-product" class="btn btn-block btn-sm btn-md-lg btn-secondary">Kembali</a>
                </ul>
            </div>
        </div>
    </div>


<?php else : ?>

    <div class="container my-3 my-md-5">
        <div class="alert alert-warning">
            <h3 class="text-center">
                Harap kembali lagi nanti
            </h3>
        </div>
        <h5 class="text-center">
            produk sedang dalam perbaikan
        </h5>
        <div class="row">
            <div class="col col-md-5 mx-auto my-2">
                <a href="/indah-taman-product" class="btn btn-block btn-sm btn-md-lg btn-primary">Kembali</a>
            </div>
        </div>
    </div>

<?php endif ?>


<?= $this->endSection() ?>