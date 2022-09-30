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
        <i class="fas fa-comment fa-1x"> &nbsp;</i>
        <span class="font">Silahkan Klik Tombol Yang Tersedia Di Bawah Ini</span>
    </div>
    <!-- <h1 class="h3 mb-4 text-gray-800">My Profile</h1> -->
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?= base_url('/img/' . 'Logo.png'); ?>" style="width: 50%; display:block; margin:auto;" class="card-img-top mt-2 mb-2" alt="Arccha Solve Logo">
                            <small class="card-title">Waktu Kerja <b>Senin s.d Jumat</b></small>
                            <br>
                            <small> <b>07:00 - 11:00 WIB</b> </small>
                            <br>

                            <!-- <p class="card-text">Bantuan Profesional Analis Akan Membantu Anda</p> -->
                            <a href="https://t.me/arcchasolvecontact" class="btn btn-primary">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?= base_url('/img/' . 'Logo.png'); ?>" style="width: 50%; display:block; margin:auto;" class="card-img-top mt-2 mb-2" alt="Arccha Solve Logo">
                            <small class="card-title">Waktu Kerja <b>Senin s.d Jumat</b></small>
                            <br>
                            <small> <b>13:00 - 17:00 WIB</b> </small>
                            <br>

                            <!-- <p class="card-text">Bantuan Profesional Analis Akan Membantu Anda</p> -->
                            <a href="https://t.me/arcchacontact" class="btn btn-primary">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>