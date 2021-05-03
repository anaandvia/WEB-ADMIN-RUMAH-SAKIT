?>
<?php
session_start();
$user = $_SESSION['user'];
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="sylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="rs.css">
        <!-- Bootstrap javascript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

    <title>ADMINISTRATOR</title>
</head>
<body>
<!-- Navbar -->
<section>
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <a class="navbar-brand" href="#"><img src="img/logo2.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <div class="navbar-nav" >
            <a class="nav-item nav-link active" href="#"><h5><i class="fas fa-bell " style="color: white"></i></h5></a>
            <a class="nav-item nav-link" href="#"><h5><i class="fas fa-comment " style="color: white"></i></h5></a>
            <a class="nav-item nav-link" data-toggle="dropdown" id="dropdownMenuButton" href=""><h5><i class="fas fa-user-circle " style="color: white"></i></h5></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" ><?php echo $user;?></a>
                    <a class="dropdown-item" href="login.php">Log Out </a>
                </div>
        </div>
    </div>
</nav>
</section>
<!-- Akhir Navbar -->
<!-- Dashboard -->
<div id="home">
    <div class="isi">
      <div class="container atas">
        <h1>Requesh Overview</h1>
        <div class="row">
          <a href="pendaftaran.php" class="home-link">
            <div class="shadow"><img src="img/pendaftaran.png" width="200px">
            </div>
            <div class="card-title">Form Pendaftaran</div></a>
          </a>
          <a href="pemeriksaan.php" class="home-link">
            <div class="shadow"><img src="img/pemeriksaan.png" width="200px">
            </div>
            <div class="card-title">Form Pemeriksaan</div></a>
          </a>
          <a href="pembayaran.php" class="home-link">
            <div class="shadow"><img src="img/pembayaran.png" width="200px">
            </div>
            <div class="card-title">Form Pembayaran</div></a>
          </a> 
        </div>
      </div>
    </div>
</div>

<div id="home">
    <div class="isi">
      <div class="container atas">
        <h1>Input Data</h1>
        <div class="row">
          <a href="pasien.php" class="home-link">
            <div class="shadow"><img src="img/pasien.png" width="200px">
            </div>
            <div class="card-title">Data Pasien</div></a>
          </a>
          <a href="dokter.php" class="home-link">
            <div class="shadow"><img src="img/dokter.png" width="200px">
            </div>
            <div class="card-title">Data Dokter</div></a>
          </a>
          <a href="obat.php" class="home-link">
            <div class="shadow"><img src="img/obat.png" width="200px">
            </div>
            <div class="card-title">Obat-Obatan</div></a>
          </a> 
          <a href="fasilitas.php" class="home-link">
            <div class="shadow"><img src="img/fasilitas.png" width="200px">
            </div>
            <div class="card-title">Fasilitas Rumah Sakit</div></a>
          </a>
        </div>
      </div>
    </div>
</div>
<!-- Akhir Dashboard -->
<!--Footer dan Copyright-->
<footer class="bg-dark">
    <div class="row" style="padding: 30px;">
        <div class="col-md-4"><img src="img/logo2.png"></a>
            <p>Awal Bross adalah Rumah Sakit Swasta No.1 di Batam. Dengan Fasilitas dan Pelayanan Terbaik di Kepulauan Riau</p>
        </div>
        <div class="col-md-4"><h3>INFO</h3>
            <p><a href="#">Awal Bross</p></a> 
            <p><a href="#">Pelayanan 24 Jam</p></a> 
            <p><a href="#">Laboratorium</p></a> 
            <p><a href="#">Unit UGD</p></a> 
        </div>
        <div class="col-md-4"><h3>CONTACT US</h3>
            <p>Jl. Ahmad Yani, Batam Centre, Batam . 29461</p>
            <h7><i class="fas fa-phone-square-alt mr-3"> Phone : +62 778 469856</i></h7><br><br>
            <h7>Follow Us</h7><br>
            <a href="#" class="fab fa-facebook-square fa-2x mr-3"></a>
            <a href="#" class="fab fa-instagram fa-2x mr-3"></a>
            <a href="#" class="fab fa-pinterest-square fa-2x mr-3"></a>
            <a href="#" class="fab fa-google-plus-square fa-2x mr-3"></a>
        </div>
    </div>
</footer>
<!-- Akhir Footer -->
</body>
</html>