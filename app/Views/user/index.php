<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <style>
        @font-face {
            font-family: heading;
            src: url(font.otf);
        }

        .font {
            font-family: 'heading';
            font-size: 20px;
            font-variant: inherit;
        }
    </style>
    <!-- Page Heading -->

    <div class="alert alert-info" role="alert">
        <i class="fas fa-user fa-1x"> &nbsp;</i>
        <span class="font">My Profile</span>
    </div>
    <!-- <h1 class="h3 mb-4 text-gray-800">My Profile</h1> -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <!-- Hanya menggunakan user() tanpa tanda $ artinya data diambil dari session yang sedang aktif -->
                        <img class="img-fluid rounded-start" src="<?= base_url('/img/' . user()->user_image); ?>" alt="<?= user()->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= user()->username; ?></h4>
                                </li>
                                <?php if (user()->fullname) : ?>
                                    <li class="list-group-item"><?= user()->fullname; ?></li>
                                <?php endif; ?>
                                <li class="list-group-item"><?= user()->email; ?></li>

                            </ul>


                        </div>
                    </div>
                    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>">
                    </div>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <!-- <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div> -->

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>