<?= $this->include('layout/header'); ?>
<?= $this->include('layout/navbar'); ?>
<!-- Srart Contact Us
		=========================================== -->
<section class="contact-us section bg-gray" id="contact">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title text-center">
                    <h4>Tidak Menemukan Apa Yang Anda Cari ?</h4>
                    <h2>Contact Us.</h2>
                    <span class="border"></span>

                </div>
            </div>
        </div>
        <div class="row">

            <!-- Contact Form -->
            <div class="contact-form col-12 col-md-6  mx-auto">
                <form id="contact-form" method="post" action="/Utama/save" role="form">

                    <div class="form-group">
                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" required>
                    </div>

                    <div class="form-group">
                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" required></textarea>
                    </div>



                    <div id="cf-submit">
                        <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                    </div>


                </form>
            </div>
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>">
            </div>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <!-- <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div> -->

            <?php endif; ?>
            <!-- ./End Contact Form -->
        </div> <!-- end row -->

    </div> <!-- end container -->
</section> <!-- end section -->

<?= $this->include('layout/footer'); ?>