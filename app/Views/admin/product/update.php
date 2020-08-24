<?php $this->extend('layouts/admin'); ?>

<?php $this->section('content') ?>
<div class="container mb-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Tambah produk</h1>
    </div>
    <form action="" method="post">
        <?php if (isset($validation)) : ?>
            <div class="row justify-content-center">
                <div class="col col-md-7">
                    <div class="alert alert-danger">
                        <?= $validation->listErrors() ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row justify-content-center">
            <div class="col col-12 col-md-7 mb-4">
                <label>Nama produk</label>
                <input type="text" name="product_name" class="form-control" placeholder="Anggrek mokara" value="<?= $product['product_name'] ?>">
            </div>
            <div class="col col-12 col-md-7 mb-4">
                <div class="row">
                    <div class="col">
                        <label label>Harga produk <br><i><sup class="text-warning">jangan masukan selain angka</sup></i> </label>
                        <input type="text" name="product_price" class="form-control" placeholder="10000" required value="<?= $product['product_price'] ?>">
                    </div>
                    <div class="col">
                        <label label>Kategori <br><i><sup class="text-warning">wajib memilih kategori</sup></i> </label>
                        <select class="custom-select mr-sm-2" name="product_category" id="inlineFormCustomSelectPref" value="<?= $product['product_category'] ?>">
                            <option selected><?= $product['product_category'] ?></option>
                            <option value="TANAMAN">tanaman</option>
                            <option value="TAMAN">taman</option>
                            <option value="MEDIA TANAM">media tanam</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-7 mb-4">
                <label>Deskripsi produk</label>
                <textarea class="form-control" name="product_desc" placeholder="Tentang produk kamu" required><?= $product['product_desc'] ?></textarea>
            </div>
            <div class="col col-12 col-md-7 mb-4">
                <label label>Link ( tokopedia,shopee,lazada )</label>
                <div class="row">
                    <div class="col">
                        <input type="text" name="link_tokopedia" class="form-control form-control-sm" placeholder="Tokopedia" value="<?= $product['link_tokopedia'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" name="link_shopee" class="form-control form-control-sm" placeholder="Shopee" value="<?= $product['link_shopee'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" name="link_lazada" class="form-control form-control-sm" placeholder="Lazada" value="<?= $product['link_lazada'] ?>">
                    </div>
                </div>
                <hr>
            </div>
            <div class="col col-12 col-md-7 mb-4">
                <div class="row justify-content-center">
                    <div class="col col-md-5 text-center">
                        <a href="<?= base_url() ?>/admin-product" class="btn btn-block btn-success">Kembali</a>
                    </div>
                    <div class="col col-md-5 text-center">
                        <button type="submit" class="btn btn-block btn-primary">Ubah</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $this->endSection() ?>