<?= $this->include('layout/header'); ?>
<?= $this->include('layout/navbar'); ?>


<!--
Start About Section
==================================== -->
<section class="about-2 section bg-gray" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 align-self-center mb-4 mb-md-0">
                <div class="align-self-center">
                    <h2>Arccha Solve Group </h2>
                    <p>Visi Kami adalah membantu anda, dalam menentukan dan menyelesaikan semua permasalahan strategi finansial di pasar modal indonesia. </p>
                    <p>Kami menggunakan analisis finansial terbaik, yang dapat membantu anda dalam menentukan kondisi pembelian dan penjualan yang menguntungkan</p>
                    <!--<a href="#" class="btn btn-main">Learn More</a>-->
                </div>
            </div>
            <div class="col-12 col-md-6">
                <!--<div id="myDiv" class="bitcoin-graph">
                    <p>Bitcoin graphs</p>
                </div>-->
                <div class="video-player">
                    <img style="width: 50%; display: block; margin-left: auto; margin-right: auto;" class="img-fluid rounded" src="<?= base_url(); ?>/img/logo.png">
                </div>
            </div>
        </div>
    </div>
</section>

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section-sm" style="background-color:#4b3832;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Buat Akun Anda, dan Mulailah Finansial Analisis Strategi Anda!</h2>
                <p>Mulai Gunakan Professional Tools Yang Mudah Untuk Pemula, Yang Dibuat Khusus Oleh Analisis Professional </p>
                <a href="<?= base_url('register'); ?>" class="btn btn-main">Get Started</a>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->

<?= $this->include('layout/footer'); ?>