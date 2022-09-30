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

                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        <i class="fas fa-calculator fa-1x"> &nbsp;</i>
                                        <span class="font">BEARISH VECTOR</span>
                                    </div>
                                    <!-- <label for="inputPassword2" class="visually-hidden">Password</label> -->
                                    <input type="text" class="form-control mb-2" id="low" placeholder="Price Low">
                                    <input type="text" class="form-control mb-2" id="high" placeholder="Price High">
                                    <input type="text" class="form-control mb-2" id="time" placeholder="Time Change Hours">
                                    <input type='button' style="width: 50%; border-radius: 10px;" value="Result" class="btn btn-primary mb-3 mt-3" onclick="hitung2()">
                                </div>


                            </form>
                        </div>
                        <div class="col-sm-6">
                            <form class="row g-3">

                                <div class="col-12">
                                    <div class="alert alert-success" role="alert">
                                        <i class="fas fa-calculator fa-1x"> &nbsp;</i>
                                        <span class="font">BULLISH VECTOR</span>
                                    </div>
                                    <!-- <label for="inputPassword2" class="visually-hidden">Password</label> -->
                                    <input type="text" class="form-control mb-2" id="high2" placeholder="Price High">
                                    <input type="text" class="form-control mb-2" id="low2" placeholder="Price Low">
                                    <input type="text" class="form-control mb-2" id="time2" placeholder="Time Change Hours">
                                    <input type='button' style="width: 50%; border-radius: 10px;" value="Result" class="btn btn-primary mb-3 mt-3" onclick="hitung3()">
                                </div>

                            </form>
                        </div>

                    </div>

                </div>

                <div class="col-sm-12">



                    <p style="text-align: center;" id="container"></p>


                </div>

            </div>
        </div>

    </div>

    <?= $this->endSection(); ?>