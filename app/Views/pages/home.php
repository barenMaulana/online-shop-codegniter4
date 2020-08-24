<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<header>
    <div class="jumbotron jumbotron-fluid header-custom">
        <div class="container text-center mt-4">
            <h1 class="display-4">INDAH TAMAN</h1>
            <p class="lead"></p>
        </div>
    </div>
</header>



<main>

    <div class="container">

        <div class="row text-center mb-3">
            <div class="col">
                <h6 class="brand-unicorn">Belanja lebih <b>Mudah</b> dan <b>Aman</b> karena kami menggunakan</h6>
            </div>
        </div>

        <div class="row" data-aos="fade-up">
            <div class=" col text-center image-unicorn">
                <img src="<?= base_url() ?>/frontend/img/logo/logo_tokopedia.png" alt="indah-taman-icon-online-shop">
                <img src="<?= base_url() ?>/frontend/img/logo/logo_lazada.png" alt="indah-taman-icon-online-shop">
                <img src="<?= base_url() ?>/frontend/img/logo/logo_shopee.png" alt="indah-taman-icon-online-shop">
            </div>
        </div>

        <div class="row responsive-image-describe" data-aos="fade-up">
            <div class="col">
                <img src="<?= base_url() ?>/frontend/img/belanja-tanpa-khawatir.png" width="250" alt="indah-taman-tukang-taman">
            </div>
        </div>

        <div class=" row cta-button-product">
            <div class="col col-md-7">
                <h2>Belanja lebih Hemat tanpa rasa khawatir</h2>
                <p>Dengan merawat tanaman, kita dapat membantu mengurangi polusi. <br> Segera pilih Tanaman yang
                    kamu
                    suka,
                    Sebelum
                    kehabisan!.</p>
                <a href="#" class="btn btn-lg cta-button-custom-product">ARAHKAN SAYA</a>
            </div>
            <div class="col text-right image-describe">
                <img src="<?= base_url() ?>/frontend/img/belanja-tanpa-khawatir.png" width="400" alt="indah-taman-tukang-taman">
            </div>
        </div>

    </div>

    <hr>

    <div class="container fast-response">
        <div class="row responsive-image-describe" data-aos="fade-up">
            <div class="col">
                <img src="<?= base_url() ?>/frontend/img/respon-cepat.png" width="250" alt="indah-taman-tukang-taman">
            </div>
        </div>
        <div class="row cta-button-product">
            <div class="col image-describe" data-aos="fade-up">
                <img src="<?= base_url() ?>/frontend/img/respon-cepat.png" width="400" alt="indah-taman-tukang-taman">
            </div>
            <div class="col col-md-7 text-right">
                <h2>Respon Cepat</h2>
                <p>Apabila tanaman yang anda cari tidak ada, atau <br> ada hal lain yang anda ingin tanyakan,
                    anda
                    dapat
                    klik <b>HUBUNGI KAMI</b>, kami akan merespon kurang dari 20 menit.</p>
                <button class="btn btn-lg cta-button-custom-product" data-toggle="modal" data-target="#hubungiPenjual"> <img src="<?= base_url() ?>/frontend/img/icon/send.svg" class="mt-1" alt="indah-taman-tukang-taman">
                    HUBUNGI
                    PENJUAL</button>
            </div>
        </div>
    </div>

    <hr>

    <div class="container fast-response">
        <div class="row responsive-image-describe" data-aos="fade-up">
            <div class="col">
                <img src="<?= base_url() ?>/frontend/img/flexible-pengiriman.png" width="250" class="indah-taman-tukang-taman">
            </div>
        </div>
        <div class="row cta-button-product">
            <div class="col col-md-7">
                <h2>Fleksibel dalam pemesanan</h2>
                <p>Jika anda tidak paham cara pesan dengan toko online, seperti
                    <b>Tokopedia</b>, <b>Lazada</b>, <b>Shopee</b>. <br> itu tidak masalah, karena anda dapat
                    menghubungi kami secara langsung dan kami akan arahkan anda. </p>
                <button class="btn btn-lg cta-button-custom-product" data-toggle="modal" data-target="#hubungiPenjual"> <img src="<?= base_url() ?>/frontend/img/icon/send.svg" alt="indah-taman-tukang-taman"> HUBUNGI
                    PENJUAL</button>
            </div>
            <div class="col image-describe text-right" data-aos="fade-up">
                <img src="<?= base_url() ?>/frontend/img/flexible-pengiriman.png" width="400" alt="indah-taman-tukang-taman">
            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col text-center" data-aos="fade-up">
                <img src="<?= base_url() ?>/frontend/img/ragu-ragu.png" class="curious-img" alt="indah-taman-tukang-taman">
            </div>
        </div>
        <div class="row" data-aos="fade-right">
            <div class="col text-center">
                <h5>Masih bingung? Langsung tanyakan kepada kami.</h5>
                <button class="btn btn-lg cta-button-custom-product" data-toggle="modal" data-target="#hubungiPenjual" data-aos="fade-left"> <img src="<?= base_url() ?>/frontend/img/icon/send.svg" alt="indah-taman-tukang-taman"> HUBUNGI PENJUAL</button>
            </div>
        </div>
    </div>

    <hr>

    <div class="container container-popular-produk text-center" id="our-product">
        <div class="row">
            <div class="col text-center popular-produk">
                <h2 data-aos="fade-up">Indah Taman</h2>
                <p class="mt-3" data-aos="flip-left">Mulai kembangkan hobby tanaman anda dengan <br> belanja tanaman
                    di sini.</p>
            </div>
        </div>
        <?php if (count($products) != 0 && count($products) > 1) : ?>
            <div class="row row-cols-1 row-cols-md-4" data-aos="fade-up">
                <?php sort($products); ?>
                <?php for ($i = 0; $i < 12 - 1; $i++) : ?>
                    <?php if ($products[$i]['id'] != $products[$i + 1]['id']) : ?>
                        <div class="col text-center">
                            <div class="card custom-card">
                                <img src="<?= base_url() ?>/upload/<?= $products[$i]['image_name'] ?>" class="" style="width:100%;height:200px" alt="indah-taman-tukang-taman">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $products[$i]['product_name'] ?></h5>
                                    <hr>
                                    <div>
                                        <span>Harga : </span>
                                        Rp. <?= number_format($products[$i]['product_price']) ?> ,-
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a href="<?= base_url() ?>/home/product/<?= $products[$i]['id'] ?>" class="btn btn-description-custom">Deskripsi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($i == count($products) - 2) : ?>
                        <div class="col text-center">
                            <div class="card custom-card">
                                <img src="<?= base_url() ?>/upload/<?= $products[$i]['image_name'] ?>" class="" style="width:100%;height:200px" alt="indah-taman-tukang-taman">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $products[$i]['product_name'] ?></h5>
                                    <hr>
                                    <div>
                                        <span>Harga : </span>
                                        Rp. <?= number_format($products[$i]['product_price']) ?> ,-
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a href="<?= base_url() ?>/home/product/<?= $products[$i]['id'] ?>" class="btn btn-description-custom">Deskripsi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
            <a href="/indah-taman-product" class="btn button-cta-more-product">Lebih banyak tanaman...</a>
        <?php else : ?>
            <div class="row">
                <div class="col col-12 text-center">
                    <h3 class="text-muted py-5 bg-dark">
                        Product belum tersedia
                    </h3>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="container container-popular-produk" id="gallery">
        <div class="row">
            <div class="col text-center popular-produk">
                <h2 data-aos="fade-up">Gallery Indah Taman</h2>
                <p class="mt-3" data-aos="flip-left">Beberapa tanaman dan hasil pekerjaan kami, selamat
                    melihat-lihat</p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url() ?>/frontend/img/carousel/anggrek1.jpg" class="d-block w-100" alt="indah-taman-tukang-taman">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url() ?>/frontend/img/carousel/anggrek2.jpg" class="d-block w-100" alt="indah-taman-tukang-taman">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url() ?>/frontend/img/carousel/anggrek3.jpg" class="d-block w-100" alt="indah-taman-tukang-taman">
                        </div>
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
        <div class="gallery-image-small">
            <img src="<?= base_url() ?>/frontend/img/gallery/kambing.jpg" class="img-fluid" alt="indah-taman-tukang-taman">
            <img src="<?= base_url() ?>/frontend/img/gallery/ploduk1.jpg" class="img-fluid" alt="indah-taman-tukang-taman">
            <img src="<?= base_url() ?>/frontend/img/gallery/bunga-ungu.jpg" class="img-fluid" alt="indah-taman-tukang-taman">
        </div>
    </div>

    <hr>

    <div class="container container-popular-produk text-center">
        <div class="row">
            <div class="col text-center popular-produk">
                <h2 data-aos="fade-up">Go-green dengan Indah Taman</h2>
                <p class="mt-3" data-aos="flip-left">Semarakan <b>Go-green</b> agar bumi menjadi tempat yang lebih
                    baik.</p>
            </div>
        </div>
        <div class="row panduan-pemesanan row-cols-1 row-cols-md-3">
            <div class=" col" data-aos="fade-up">
                <img src="<?= base_url() ?>/frontend/img/icon/cari_produk.png" class="img-fluid" alt="indah-taman-icon-cari">
                <h2>Cari</h2>
                <p data-aos="fade-up">Cari tanaman yang kamu suka, lalu langsung pesan sebelum stok habis.</p>
            </div>
            <div class="col" data-aos="fade-up">
                <img src="<?= base_url() ?>/frontend/img/icon/order_produk.png" class="img-fluid" alt="indah-taman-tukang-taman">
                <h2>Pesan</h2>
                <p data-aos="fade-up">Pilih metode pemesanan sesuai kesuakaan kamu, bisa melalui online shop, atau
                    langsung hubungi penjual.</p>
            </div>
            <div class="col" data-aos="fade-up">
                <img src="<?= base_url() ?>/frontend/img/icon/produk_sukses.png" class="img-fluid" alt="indah-taman-tukang-taman">
                <h2>Sukses</h2>
                <p data-aos="fade-up">Maka tanaman kamu segera di antar ke rumah kamu.</p>
            </div>
        </div>
    </div>

</main>

<?= $this->endSection() ?>