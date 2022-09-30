<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
            <i class="fas fa-comment"></i>
            <span class="font">Pesan Masuk</span>
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
                            <th scope="col">No</th>
                            <!-- <th scope="col">Username</th> -->
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Tanggal</th>
                            <!-- <th scope="col">Status</th> -->
                            <th scope="col" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $i = 1 + (5 * ($currenPage - 1));
                        ?>

                        <?php foreach ($pesan as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <!-- <td><?= $p['nama']; ?></td> -->
                                <td><?= $p['email']; ?></td>
                                <td><?= $p['subject']; ?></td>
                                <td><?= $p['time']; ?></td>
                                <td>
                                    <a href="<?= base_url('Utama/detail/' . $p['contact_id']); ?>" class="btn btn-info">Detail</a>

                                </td>


                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <?= $pager->links('contact', 'Lokasi_pagination'); ?>
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