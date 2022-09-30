<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('utama'); ?>">
        <div class="sidebar-brand-icon">
            <!-- <img style="width: 100%;" class="" src="<?= base_url(); ?>/img/logo.png"> -->

        </div>
        <div class="sidebar-brand-text mx-2 mt-2"><sup>Arccha Technical analysis</sup></div>
    </a>

    <!-- Melakukan Premision Jika Login Sebagai Admin Maka Yang Tampil Halaman Admin. pembuatan berdasarkan dokumentasi myth/auth menggunakan in_groups -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('utama'); ?>">
            <i class="fa fa-house-user"></i>
            <span>Home</span>
        </a>
    </li>
    <?php if (in_groups('admin')) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            ADMIN
        </div>


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('User/Utama'); ?>">
                <i class="fa fa-tv"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Utama/pesan'); ?>">
                <i class="fas fa-comment"></i>
                <span>Pesan Masuk</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin'); ?>">
                <i class="fas fa-users"></i>
                <span>User List</span></a>
        </li>
    <?php endif; ?>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Profile
    </div>



    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/user'); ?>">
            <i class="fas fa-user"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Nav Item - Edit Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/user/edit/' . user()->id); ?>">
            <i class="fas fa-edit"></i>
            <span>Edit Profile</span></a>
    </li>


    <!-- Heading -->
    <div class="sidebar-heading">
        TECHNICAL ANALYSIS CHART
    </div>


    <!-- Chart -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-chart-line"></i>
            <span>Chart Analysis</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Arccha Chart Analysis</h6>
                <?php if (in_groups('admin')) : ?>

                    <a class="collapse-item" href="<?= base_url('Analisis/utama'); ?>">
                        <i class="fas fa-chart-line"></i>
                        <span>Advanced Chart</span></a>

                <?php endif; ?>

                <?php if (in_groups('admin')) : ?>

                    <a class="collapse-item" href="<?= base_url('Analisis/utama'); ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Live Chart</span></a>

                <?php endif; ?>

                <a class="collapse-item" href="<?= base_url('Analisis'); ?>">
                    <i class="fas fa-chart-bar"></i>
                    <span>Regular Chart</span></a>


            </div>
        </div>
    </li>

    <!-- Akhir Chart -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-calculator"></i>
            <span>Calculator</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">

            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Arccha Calculator</h6>

                <a class="collapse-item" href="<?= base_url('Analisis/hitung'); ?>">
                    <i class="fas fa-calculator"></i>
                    <span>Price Degree</span></a>

                <a class="collapse-item" href="<?= base_url('Analisis/hitung2'); ?>">
                    <i class="fas fa-calculator"></i>
                    <span>Price Time</span></a>


            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Analisis/sinyal'); ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Signal</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Analisis/konsul'); ?>">
            <i class="fas fa-comment"></i>
            <span>Consultation</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>