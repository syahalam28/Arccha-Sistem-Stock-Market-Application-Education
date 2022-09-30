<?= $this->include('layout/header'); ?>
<?= $this->include('layout/navbar'); ?>
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title text-center">
                    <!--<h4>Our untold story</h4>-->
                    <h2>Class Information</h2>
                    <span class="border"></span>
                    <p>Belajar Analisis Strategi Finansial Secara Terstruktur Untuk Pemula Hingga Expert Sesuai Kebutuhan. Lengkap Dengan Materi Berkualitas Yang Disusun Oleh Analisis Professional</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if ((in_groups('operator')) | (in_groups('admin'))) : ?>
                <div class="col-sm-12 mb-5">
                    <a href="<?= base_url('Berita/indexInfo'); ?>" class="btn btn-success">Tambah Informasi</a>

                </div>
            <?php endif; ?>
            <?php foreach ($berita as $b) : ?>
                <div class="col-sm-4 ">
                    <div class="card mb-3" style="width: 18rem;">
                        <img style="height: 150px;" src="<?= base_url('/img/' . $b['sampul']); ?>" class="img-fluid rounded-start" alt="<?= $b['judul']; ?>">

                        <div class="card-body">
                            <h5 class="card-title"><?= $b['judul']; ?></h5>

                            <a href="<?= base_url('berita/detailInfo/' . $b['info_id']); ?>" class="btn btn-dark">Baca Selengkapnya</a>




                        </div>
                        <div class="card-footer text-muted">
                            <span>Created at <?= $b['date']; ?></span>
                        </div>

                    </div>

                </div>


            <?php endforeach ?>
            <div class="col-sm-12 mb-5">

                <?= $pager->links('informasi', 'Lokasi_pagination'); ?>
            </div>






            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>">
            </div>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <!-- <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div> -->

            <?php endif; ?>



        </div> <!-- end row -->

    </div>
    <!-- end container -->
</section> <!-- end section -->

<?= $this->include('layout/footer'); ?>