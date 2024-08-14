<?php
// mengincludkan file koneksi// 
include("koneksi.php");
$perintah = mysqli_query($koneksi, "SELECT * FROM karyawan");
?>
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
            <a class="navbar-brand" href="#">KRAKTAU TIRTA INDUSTRI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="about.php">Tentang Kami</a>
                <a class="nav-link" href="layanan.php">Layanan</a>
                <a class="nav-link" href="#">Kontak</a>
            </div>
            </div>
        </div>
        </nav>
            <!--Start Garis Navigasi Atas-->
            <footer style="border-top: 4px solid #0095B6;  ">
            <div class="container" style="padding-bottom: 10px;">
        </div>
    <!--Break Garis Navigasi Atas-->
    <!--Break Navigasi Depan-->
<div class="container mt-3">
        <!-- Modal -->
            <div class="modal fade" id="TambahData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"></div>

        <h2 class="text-center">QUESIONER KEPUASAN LAYANAN SI/TI</h2>
            <form action= "karyawan_add.php" method="post">
             
            LAYANAN<SELECT class="form-control mb-3 form-select" name="layanan" id="layanan">
            <option></option>
            <option value="Pernyataan Umum">Pernyataan Umum</option>
              <option value="Solusi Bisnis">Solusi Bisnis</option>
              <option value="Layanan EUD">Layanan EUD</option>
              <option value="Layanan Internet">Layanan Internet</option>
              <option value="Layanan SAP">Layanan SAP</option>
              <option value="Layanan Aplikasi">Layanan Aplikasi</option>
              <option value="Layanan CCTV">Layanan CCTV</option>
            </SELECT>

              <!--Kuisioner-->
              KUISIONER
              <SELECT class="form-control mb-3 form-select" name="kuisioner" id="kuisioner">
              <option value="Layanan SI/TI Tersedia Sesuai Waktu yang dijanjikan">Layanan SI/TI Tersedia Sesuai Waktu yang dijanjikan</option>
              </SELECT>


              <!--Harapan-->
              HARAPAN
              <SELECT class="form-control mb-3 form-select" name="harapan" id="harapan">
              <option>silahkan beri nilai harapan</option>
              <option value="1 STS">1 STS</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7 STSS">7 SSS</option>
              </SELECT>

              
              <!--FAKTA-->
              FAKTA
              <SELECT class="form-control mb-3 form-select" name="fakta" id="fakta">
              <option>silahkan beri nilai fakta</option>
              <option value="1 STS">1 STS</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7 SSS">7 SSS</option>
              </SELECT>

              
            <button type="submit" class="btn btn-warning" name="add">Simpan</button>
            </form>
</div>

<?php
    include 'footer.php';
?>