<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
            <i class="fas fa-users"></i>
            <span class="font">User's List</span>
        </div>
        <!-- mt-2 margin top -->


        <div class="col-md-4">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan Keyword Pencarian.." aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $i = 1 + (5 * ($currentPage - 1));
                        ?>

                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $user['username']; ?></td>
                                <td><?= $user['email']; ?></td>
                                <td>
                                    <?php if ($user['name']) : ?>
                                        <span class="badge badge-<?= ($user['name'] == 'user') ? 'warning' : 'success' ?>"><?= $user['name']; ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/' . $user['userid']); ?>" class="btn btn-info">Detail</a>
                                    <a href="<?= base_url('admin/edit' . $user['userid']); ?>" class="btn btn-warning">Edit</a>

                                </td>


                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <?= $pager->links('users', 'Lokasi_pagination'); ?>
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

<?= $this->endSection(); ?>