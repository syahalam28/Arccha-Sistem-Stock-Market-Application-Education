<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>


<div class="container-fluid">
    <div class="alert alert-info" role="alert">
        <i class="fas fa-calculator fa-1x"> &nbsp;</i>
        <span class="font">Calculator</span>
    </div>
    <div class="row">
        <div class="container mt-3 w-100">
            <div class="card shadow-sm w-100">
                <div class="col-sm-12 mt-3  ">
                    <div class="row">
                        <div class="col-sm-6">
                            <form class="row g-3">
                                <div class="col-auto">
                                    <!-- <label for="staticEmail2" class="visually-hidden">Email</label> -->
                                    <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com"> -->
                                </div>
                                <div class="col-auto">
                                    <!-- <label for="inputPassword2" class="visually-hidden">Password</label> -->
                                    <input type="text" class="form-control" id="pendapatan" placeholder="Key Price">
                                    <input type='button' style="width: 50%; border-radius: 10px;" value="Result" class="btn btn-primary mb-3 mt-3" onclick="hitung()">
                                </div>

                            </form>
                        </div>
                        <div class="col-sm-6">
                            <form class="row g-3">

                                <div class="col-auto">
                                    <p id="container"></p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?= $this->endSection(); ?>