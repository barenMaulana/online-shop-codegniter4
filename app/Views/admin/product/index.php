<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
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
                <input type="text" name="product_name" class="form-control" placeholder="Nama produk + jenis + ukuran" value="<?= set_value('product_name') ?>">
            </div>
            <div class="col col-12 col-md-7 mb-4">
                <div class="row">
                    <div class="col">
                        <label label>Harga produk <br><i><sup class="text-warning">jangan masukan selain angka</sup></i> </label>
                        <input type="text" name="product_price" class="form-control" placeholder="10000" required value="<?= set_value('product_price') ?>">
                    </div>
                    <div class="col">
                        <label label>Kategori <br><i><sup class="text-warning">wajib memilih kategori</sup></i> </label>
                        <select class="custom-select mr-sm-2" name="product_category" id="inlineFormCustomSelectPref" value="<?= set_value('product_category') ?>">
                            <option selected>pilih</option>
                            <option value="TANAMAN">tanaman</option>
                            <option value="TAMAN">taman</option>
                            <option value="MEDIA_TANAM">media tanam</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-7 mb-4">
                <label>Deskripsi produk</label>
                <textarea class="form-control" name="product_desc" placeholder="Spesifikasi Produk anda" required><?= set_value('product_desc') ?></textarea>
            </div>
            <div class="col col-12 col-md-7 mb-4">
                <label label>Link ( tokopedia,shopee,lazada )</label>
                <div class="row">
                    <div class="col">
                        <input type="text" name="link_tokopedia" class="form-control form-control-sm" placeholder="Tokopedia" value="<?= set_value('link_tokopedia') ?>">
                    </div>
                    <div class="col">
                        <input type="text" name="link_shopee" class="form-control form-control-sm" placeholder="Shopee" value="<?= set_value('link_shopee') ?>">
                    </div>
                    <div class="col">
                        <input type="text" name="link_lazada" class="form-control form-control-sm" placeholder="Lazada" value="<?= set_value('link_lazada') ?>">
                    </div>
                </div>
            </div>
            <div class="col col-md-7">
                <button type="submit" class="btn btn-block btn-primary">Tambah</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>