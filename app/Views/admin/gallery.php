<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="flash-data" data-flashdata="<?= session()->get('success'); ?>"></div>
    <div class="row my-3 my-md-4">
        <div class="col text-center">
            <a href="<?= base_url() ?>/gallery-create" class="btn btn-primary"><img src="<?= base_url() ?>/frontend/img/icon/plus.svg" class="img-fluid" width="20"><span class="d-none d-md-inline">tambah foto</span></a>
        </div>
        <div class="col text-center">
            <button class="btn btn-primary d-md-none" data-toggle="modal" data-target="#searchModal"><img src="<?= base_url() ?>/frontend/img/icon/search.svg" class="img-fluid" width="20"></button>

            <form class="form-inline d-none d-md-flex" action="<?= base_url() ?>/admin/gallery" method="post">
                <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="table-responsive-sm ">
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($galleries as $key => $gallery) : ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><img src="<?= base_url() ?>/upload/<?= $gallery['image_name'] ?>" width="60"></td>
                        <td><?= $gallery['product_name'] ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="<?= base_url() ?>/gallery/delete/<?= $gallery['id_gallery'] ?>" data-identitastombol="foto" class="btn btn-sm btn-danger mx-2 mx-md-auto my-md-2 tombol-hapus"> <img src="<?= base_url() ?>/frontend/img/icon/trash-2.svg"> Hapus</a>
                            </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Cari foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-inline" action="<?= base_url() ?>/admin/searchProduct" method="post">
                    <input class="form-control" name="keyword" type="search" placeholder="Search">
                    <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit"><img src="<?= base_url() ?>/frontend/img/icon/search.svg" class="img-fluid" width="20"></button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>