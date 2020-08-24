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
                    <a class="nav-item nav-link active" href="<?= base_url() ?>">Home</a>
                    <a class="nav-item nav-link active" href="indah-taman-product">Products</a>
                    <a class="nav-item nav-link active" href="#gallery">Gallery</a>
                    <a class="nav-item nav-link active" href="#">Contacts</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- content -->
    <?= $this->renderSection('content') ?>

    <footer>
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h6 class="display-4"> " Berbelanja tanaman dengan kualitas terbaik dan dengan
                    harga terjangkau "</h6>
                <p class="lead">Jangan ragu untuk mengembangkan hobby kamu, segera pilih sebuah tanaman.
                </p>
                <a href="indah-taman-product" class="btn cta-button-custom-product mt-2" data-aos="fade-up">
                    lihat tanaman
                </a>
            </div>
        </div>

        <div class="container">
            <div class=" row py-5 row-cols-1 row-cols-md-3">
                <div class="col col-md-4 footer-logo">
                    <img src="<?= base_url() ?>/frontend/img/logo.png" class="img-fluid mb-3" width="80">
                    <p class="text-muted ml-3">
                        "Belanja online tanpa rasa khawatir, bersama grow plant, tanaman berkualitas, terpercaya,
                        profesional."
                    </p>
                </div>
                <div class="col">
                    <h6>Bantuan</h6>
                    <a href="#">Tata cara order</a><br>
                    <a href="#">Blog</a><br>
                    <a href="#">Kebijakan privasi</a>
                </div>
                <div class="col">
                    <h6>Contacts</h6>
                    <a href=" #">example@gmail.com</a><br>
                    <a href="#">(021) 1233321</a><br>
                    <a href="#">Instagram</a>
                </div>
            </div>

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

    <?= $this->include('includes/script') ?>
</body>

</html>