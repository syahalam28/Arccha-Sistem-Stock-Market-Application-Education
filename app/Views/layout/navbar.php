<section class="header navigation" style="background-color: #876546;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href=" <?= base_url('Utama'); ?>">
                        <img src="<?= base_url(); ?>/img/logo1.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="tf-ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('Utama'); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('Analisis'); ?>">Analytics Tools</a>
                            </li>
                            <li class=" nav-item">
                                <a class="nav-link" href="<?= base_url('Analisis/sinyal'); ?>">Signal</a>
                            </li>
                            <!-- <li class=" nav-item">
                                <a class="nav-link" href="<?= base_url('Utama/info'); ?>">Information</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('Utama/berita'); ?>">News</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('Utama/kontak'); ?>">Contact</a>
                            </li>

                            <li class="nav-item">
                                <?php if (logged_in()) : ?>
                                    <a class="nav-link" href="<?= base_url('logout'); ?>"> <span>Logout</span></a>
                                <?php else : ?>
                                    <a class="nav-link" href="<?= base_url('login'); ?>"> <span>Login</span></a>
                                <?php endif; ?>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('register'); ?>"> <span>Register</span></a>
                            </li>
                            <?php if ((in_groups('operator')) | (in_groups('admin'))) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('Utama/pesan'); ?>"> <span>Pesan Masuk</span></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>