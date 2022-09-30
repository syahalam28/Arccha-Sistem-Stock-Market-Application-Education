<?= $this->include('layout/header'); ?>
<?= $this->include('layout/navbar'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <svg width="100vw" height="100vh">
        <text></text>
    </svg> -->

    <div class="row">
        <div class="container mt-3 w-100">

            <div class="card shadow-sm w-100 mb-5">

                <div class="col-sm-12 mt-3  ">
                    <h3 style="text-align: center;"><?= $berita->judul; ?></h3>
                    <!-- Update Fitur Video  -->

                    <?php if ($berita->tautan) : ?>
                        <div style="text-align: center;" class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item mt-2" src="<?= $berita->tautan; ?>" allowfullscreen></iframe>
                        </div>
                    <?php endif; ?>
                    <?php if (empty($berita->tautan)) : ?>
                        <img style="width: 50%; height: 300px; display: block;margin-left: auto; margin-right: auto;" src="<?= base_url('/img/' . $berita->sampul); ?>" class="img-fluid rounded-start mt-5" alt="<?= $berita->judul; ?>">
                    <?php endif; ?>
                    <!-- Akhir Fitur Video -->
                </div>
                <div class="col-sm-12 mt-2">
                    <p class=><?= $berita->deskripsi; ?></p>
                    <?php if ((in_groups('operator')) | (in_groups('admin'))) : ?>
                        <a style="" href="<?= base_url('Berita/deleteInfo/' . $berita->info_id); ?>" class="btn btn-danger tombol-hapus">Delete</a>
                        <a style="" href="<?= base_url('Berita/editInfo/' . $berita->info_id); ?>" class="btn btn-warning tombol-edit">Edit</a>

                    <?php endif; ?>
                    <small><a href="<?= base_url('Utama/info'); ?>">&laquo; Back TO Halaman Informasi</a></small>










                </div>

            </div>











        </div>
    </div>

</div>
<?= $this->include('layout/footer'); ?>