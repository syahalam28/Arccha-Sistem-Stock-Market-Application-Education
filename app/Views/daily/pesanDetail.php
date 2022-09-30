<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Pesan</h1>

    <div class="row">
        <div class="col-lg-12">

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> <?= $pesan['nama']; ?></li>
                                <li class="list-group-item">From : <?= $pesan['email']; ?></li>
                                <li class="list-group-item"><?= $pesan['subject']; ?></li>
                                <li class="list-group-item"><?= $pesan['pesan']; ?></li>

                                <li class="list-group-item">
                                    <small><a href="<?= base_url('utama/pesan'); ?>">&laquo; back to Pesan list</a></small>

                                </li>
                                <li class="list-group-item">

                                    <a style="width: 100%;" href="<?= base_url('Utama/delete/' . $pesan['contact_id']); ?>" class="btn btn-danger tombol-hapus">Delete</a>
                                </li>

                            </ul>




                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>