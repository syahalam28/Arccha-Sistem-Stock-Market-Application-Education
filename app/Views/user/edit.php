<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <svg width="100vw" height="100vh">
        <text></text>
    </svg> -->
    <div class="alert alert-info" role="alert">
        <i class="fas fa-edit fa-1x"> &nbsp;</i>
        <span class="font">Edit Profile</span>
    </div>
    <div class="row">
        <div class="container mt-3 w-100">

            <div class="card shadow-sm w-100">

                <div class="col-sm-12 mt-3  ">

                    <div class="row" id="view-image">

                        <img id="selected-image" src="<?= base_url('/img/' . $user->user_image); ?>" class="img-thumbnail" style="height: 200px; display:block; margin:auto;" alt="Data Dengan Nama <?= $user->user_image; ?>" title="KHS Mahasiswa">




                    </div>
                    <?php if (empty(user()->fullname)) : ?>
                        <div class="row">

                            <label class="img-thumbnail mb-2 mt-2" style="text-align: center; width: 25%; display:block; margin:auto;"><?= $user->username; ?> </label>
                        </div>
                    <?php endif; ?>
                    <?php if (user()->fullname) : ?>
                        <div class="row">

                            <label class="img-thumbnail mb-2 mt-2" style="text-align: center; width: 25%; display:block; margin:auto;"><?= $user->fullname; ?> </label>
                        </div>
                    <?php endif; ?>


                    <form class="form" action="<?= base_url('user/update/' . $user->userid); ?>" method="POST" enctype="multipart/form-data">

                        <input type="hidden" class="form-control" placeholder="Nama Mahasiswa" aria-label="Username" aria-describedby="basic-addon1" name="zaazLama" value="<?= (old($user->user_image)) ? old($user->user_image) : $user->user_image; ?>">

                        <div class="box mx-4" style="text-align: center;">
                            <input type="file" id="file-1" multiple="{count} file selected" class="masukanfile inputfile-1" data-multiple-caption="{count} files selected" name="zaaz" />

                            <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                </svg> <span>Choose a file&hellip;</span></label>
                        </div>
                </div>



                <div class="col-sm-12 mt-2">

                    <div class="col-sm-10 offset-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="email" value="<?= (old($user->email)) ? old($user->email) : $user->email; ?>">
                        </div>
                        <div class=" input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Username</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" value="<?= (old($user->username)) ? old($user->username) : $user->username; ?>">
                        </div>
                        <?php if (empty(user()->fullname)) : ?>

                            <div class=" input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nama Lengkap</span>
                                <input type="text" class="form-control" placeholder="Masukan Nama Anda" aria-label="Username" aria-describedby="basic-addon1" name="nama">
                            </div>



                        <?php endif; ?>
                        <?php if (user()->fullname) : ?>

                            <div class=" input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nama Lengkap</span>
                                <input type="text" class="form-control" placeholder="Masukan Nama Anda" aria-label="Username" aria-describedby="basic-addon1" name="nama" value="<?= (old($user->fullname)) ? old($user->fullname) : $user->fullname; ?>">
                            </div>



                        <?php endif; ?>

                        <button name="tambah_data" class="btn btn-warning mb-2 mt-1">Edit Data</button>
                        <small><a href="<?= base_url('user'); ?>">&laquo; Back TO My Profile</a>
                        </small>
                    </div>









                </div>

            </div>


            </form>








        </div>
    </div>

</div>


<?= $this->endSection(); ?>