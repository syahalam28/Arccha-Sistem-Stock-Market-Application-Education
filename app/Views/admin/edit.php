<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <svg width="100vw" height="100vh">
        <text></text>
    </svg> -->
    <div class="alert alert-info" role="alert">
        <i class="fas fa-edit fa-1x"> &nbsp;</i>
        <span class="font">Edit User Akses</span>
    </div>
    <div class="row">
        <div class="container mt-3 w-100">

            <div class="card shadow-sm w-100">

                <div class="col-sm-12 mt-3  ">

                    <div class="row" id="view-image">

                        <img id="selected-image" src="<?= base_url('/img/' . $users->user_image); ?>" class="img-thumbnail" style="height: 200px; display:block; margin:auto;" alt="Data Dengan Nama <?= $users->user_image; ?>" title="Profile Picture">




                    </div>
                    <?php if (empty(user()->fullname)) : ?>
                        <div class="row">

                            <label class="img-thumbnail mb-2 mt-2" style="text-align: center; width: 25%; display:block; margin:auto;"><?= $users->username; ?> </label>
                        </div>
                    <?php endif; ?>
                    <?php if (user()->fullname) : ?>
                        <div class="row">

                            <label class="img-thumbnail mb-2 mt-2" style="text-align: center; width: 25%; display:block; margin:auto;"><?= $users->fullname; ?> </label>
                        </div>
                    <?php endif; ?>


                    <form class="form" action="<?= base_url('admin/update/' . $users->userid); ?>" method="POST" enctype="multipart/form-data">

                        <input type="hidden" class="form-control" placeholder="Nama Mahasiswa" aria-label="Username" aria-describedby="basic-addon1" name="zaazLama" value="<?= (old($users->user_image)) ? old($users->user_image) : $users->user_image; ?>">


                </div>



                <div class="col-sm-12 mt-2">

                    <div class="col-sm-10 offset-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="email" value="<?= (old($users->email)) ? old($users->email) : $users->email; ?>" readonly>
                        </div>
                        <div class=" input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Username</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" value="<?= (old($users->username)) ? old($users->username) : $users->username; ?>" readonly>
                        </div>

                        <div class=" input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Akses</span>
                            <select class="form-control" id="category_name" name="category_name">

                                <?php foreach ($akses as $m) : ?>
                                    <option value="<?= $m['id']; ?>"> <?= $m['name']; ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>


                        </div>

                        <button name="tambah_data" class="btn btn-warning mb-2 mt-1">Edit Data</button>
                        <small><a href="<?= base_url('admin'); ?>">&laquo; Back TO User List</a>
                        </small>
                    </div>









                </div>

            </div>


            </form>








        </div>
    </div>

</div>

<?= $this->endSection(); ?>