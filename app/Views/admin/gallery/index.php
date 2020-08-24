<?php $this->extend('layouts/admin') ?>
<?php $this->section('content') ?>
<div class="container mb-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Tambah foto</h1>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
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
                <div class="row">
                    <div class="col">
                        <label label>Pilih produk <br><i><sup class="text-warning">Pilih sesuai produk yang ingin di beri foto</sup></i> </label>
                        <select class="custom-select mr-sm-2" name="product_id" id="inlineFormCustomSelectPref" required>
                            <option selected value="">pilih</option>
                            <?php foreach ($products as $product) : ?>
                                <option value="<?= $product['id'] ?>"><?= $product['product_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-7 mb-4">
                <div class="row">
                    <div class="col">
                        <label label>Pilih foto <br><i><sup class="text-warning"> - Ukuran maksimal : 1,5mb <br> - Format yang di izinkan : jpg, png, jpeg </sup></i> </label>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">pilih</label>
                            <input type="file" name="image_name" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-7">
                <button type="submit" class="btn btn-block btn-primary">Tambah</button>
            </div>
        </div>
    </form>
</div>
<?php $this->endSection() ?>