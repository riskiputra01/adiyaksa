<!DOCTYPE html>
<html>
<head>
    <title>SERQUAL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!--Start Navigasi Depan-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-2 py-lg-3 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">KRAKATAU TIRTA INDUSTRI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="about.php">Tentang Kami</a>
                <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="karyawan.php">Karyawan</a></li>
                </ul>
            </li>                
            <a class="nav-link" href="kuisioner.php">Kuisioner</a>
            </div>
            </div>
        </div>
        </nav>
    <!--Break Navigasi Depan-->
            <!-- START IMAGE CRUSIAL-->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/home/5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/home/3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <!-- BREAK IMAGE CRUSIAL-->
<?php
    include 'footer.php';
?>