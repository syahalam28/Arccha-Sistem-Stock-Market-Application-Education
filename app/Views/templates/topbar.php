<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>

    </form> -->



    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->






        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <!-- Menampilkan Jam (Aktif) -->
                <div id="clock" class="d-lg-inline text-gray-600 small" style="margin-right:-90px; margin-bottom:20px;"></div>
                <script type="text/javascript">
                    function showTime() {
                        var a_p = "";
                        var today = new Date();
                        var curr_hour = today.getHours();
                        var curr_minute = today.getMinutes();
                        var curr_second = today.getSeconds();
                        if (curr_hour < 12) {
                            a_p = "AM";
                        } else {
                            a_p = "PM";
                        }
                        if (curr_hour == 0) {
                            curr_hour = 12;
                        }
                        if (curr_hour > 12) {
                            curr_hour = curr_hour - 12;
                        }
                        curr_hour = checkTime(curr_hour);
                        curr_minute = checkTime(curr_minute);
                        curr_second = checkTime(curr_second);
                        document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                    }

                    function checkTime(i) {
                        if (i < 10) {
                            i = "0" + i;
                        }
                        return i;
                    }
                    setInterval(showTime, 500);
                    //
                </script>

                <!-- Menampilkan Hari, Bulan dan Tahun -->
                <span id="clock" class="mr-2  text-gray-600 small" style="display: block;">
                    <br>
                    <script type='text/javascript'>
                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth();
                        var thisDay = date.getDay(),
                            thisDay = myDays[thisDay];
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        //
                    </script>
                </span>
                <div class="topbar-divider d-none d-sm-block"></div>
                <div class="mr-2 d-none d-lg-inline text-gray-600 small">

                    <!-- <!-- <div class="jam-digital-malasngoding mr-4 d-none d-lg-inline text-gray-600 small"> -->

                    <p style="margin-bottom:-3px;">
                        <?php
                        $tanggal = mktime(date('m'), date("d"), date('Y'));
                        // echo "Tanggal : <b> " . date("d-m-Y", $tanggal) . "</b>";
                        date_default_timezone_set("Asia/Jakarta");
                        $jam = date("H:i:s");
                        // echo " | Pukul : <b> " . $jam . " " . " </b> ";
                        $a = date("H");
                        if (($a >= 6) && ($a <= 10)) {
                            echo " <b> Selamat Pagi </b>";
                        } else if (($a >= 11) && ($a <= 15)) {
                            echo "  <b> Selamat  Siang </b>  ";
                        } elseif (($a > 15) && ($a <= 18)) {
                            echo " <b> Selamat  Sore </b> ";
                        } else {
                            echo " <b> Selamat Malam </b>";
                        }
                        ?>
                    </p>

                    <!-- <div class="kotak">
                        <p id="jam"></p>
                    </div>
                    <div class="kotak">
                        <p id="menit"></p>
                    </div>
                    <div class="kotak">
                        <p id="detik"></p>
                    </div> -->
                </div>
                <!-- Pengaturan Waktu -->




                <!-- Akhir Pengaturan waktu -->
                <!-- </div> -->
                <!-- user adalah helper yang menentukan siapa yang lagi login ini fungsi bawaan myth/auth -->
                <span class=" mr-2 d-none d-lg-inline text-gray-600 small">
                    <?php if (user()->fullname) : ?>
                        <?= user()->fullname; ?>
                    <?php endif; ?>
                    <?php if (empty(user()->fullname)) : ?>
                        <?= user()->username; ?>
                    <?php endif; ?>
                </span>
                <img class="img-profile rounded-circle" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>">


            </a>

            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('user/tampil'); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    My Profile
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>


    </ul>

</nav>