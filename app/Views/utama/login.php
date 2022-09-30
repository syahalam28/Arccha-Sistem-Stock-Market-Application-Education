<?php
//Fungsi untuk mencegah inputan karakter yang tidak sesuai
function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//Cek apakah ada kiriman form dari method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    include "db/koneksi.php";
    $username = input($_POST["username"]);
    $p = input(md5($_POST["password"]));

    $sql = "select * from users where username='" . $username . "' and password='" . $p . "' limit 1";
    $hasil = mysqli_query($kon, $sql);
    $jumlah = mysqli_num_rows($hasil);

    if ($jumlah > 0) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["id_user"] = $row["id_user"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["nama"] = $row["nama"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["level"] = $row["level"];


        if ($_SESSION["level"] = $row["level"] == 1) {
            header("Location:admin/index.php");
        } else if ($_SESSION["level"] = $row["level"] == 2) {
            header("Location:operator/index.php");
        } else if ($_SESSION["level"] = $row["level"] == 3) {
            header("Location:pelanggan/index.php");
        }
    } else {
        echo "<div class='alert alert-danger'>
				<strong>Error!</strong> Username dan password salah. 
			  </div>";
    }
}

?>
<?php include 'layout/header.php';
include 'layout/navbar.php'; ?>

<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block">
                    <h2 class="text-center">Sign In to BitBank</h2>
                    <form class="text-left clearfix mt-50" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <div class="form-group">
                            <input type="username" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-main">Sign In</button>

                    </form>
                    <p class="mt-20">New in this site ?<a href="signup.php"> Create New Account</a></p>
                    <p><a href="forget-password.php"> Forgot your password?</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'layout/footer.php'; ?>
<!-- end footer -->


<!-- end Footer Area
    ========================================== -->


<!-- 
    Essential Scripts
    =====================================-->

<!-- Main jQuery -->
<script src="plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/dist/js/popper.min.js"></script>
<script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<!-- Smooth Scroll js -->
<script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>

<!-- Custom js -->
<script src="js/script.js"></script>

</body>

</html>