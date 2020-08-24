<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="flash-data" data-flashdata="<?= session()->get('success'); ?>"></div>
    <div class="row my-3 my-md-4">
        <div class="col text-center">
            <a href="<?= base_url() ?>/product-create" class="btn btn-primary"><img src="<?= base_url() ?>/frontend/img/icon/plus.svg" class="img-fluid" width="20"><span class="d-none d-md-inline">tambah produk</span></a>
        </div>
        <div class="col text-center">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?= base_url() ?>/frontend/img/icon/filter.svg">
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url() ?>/admin/product/TAMAN">Taman</a>
                    <a class="dropdown-item" href="<?= base_url() ?>/admin/product/TANAMAN">Tanaman</a>
                    <a class="dropdown-item" href="<?= base_url() ?>/admin/product/MEDIA_TANAM">Media tanam</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <button class="btn btn-primary d-md-none" data-toggle="modal" data-target="#searchModal"><img src="<?= base_url() ?>/frontend/img/icon/search.svg" class="img-fluid" width="20"></button>

            <form class="form-inline d-none d-md-flex" action="<?= base_url() ?>/admin/searchProduct" method="post">
                <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="table-responsive-sm ">
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $key => $product) : ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $product->product_name ?></td>
                        <td>Rp. <?= number_format($product->product_price); ?></td>
                        <td class="d-flex justify-content-around">
                            <a href="/product/detail/<?= $product->id ?>" class="btn btn-sm btn-success mx-4 mx-md-0"> <img src="<?= base_url() ?>/frontend/img/icon/book-open.svg"> Detail</a>
                            <a href="/product/update/<?= $product->id ?>" class="btn btn-sm btn-primary mx-4 mx-md-0"> <img src="<?= base_url() ?>/frontend/img/icon/edit.svg"> Ubah</a>
                            <a href="/product/delete/<?= $product->id ?>" data-identitastombol="produk" class="btn btn-sm btn-danger mx-4 mx-md-0 tombol-hapus"> <img src="<?= base_url() ?>/frontend/img/icon/trash-2.svg"> Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
                <form class="form-inline" action="<?= base_url() ?>/admin/searchProduct" method="post">
                    <input class="form-control" name="keyword" type="search" placeholder="Search">
                    <button class="btn btn-outline-primary btn-sm my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>