<?php
// mengincludkan file koneksi// 
include("koneksi.php");
$perintah = mysqli_query($koneksi, "SELECT * FROM survey");
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

        <h2 class="text-center">FORM SURVEI KARYAWAN</h2>
            <form action= "kuisioner_add.php" method="post">
            DIREKTORAT<SELECT class="form-control mb-3 form-select" name="direktorat" id="direktorat">
            <option></option>
              <option value="Direktorat Utama">Direktorat Utama</option>
              <option value="Direktorat Pengembangan Usaha & Komersial">Direktorat Pengembangan Usaha & Komersial</option>
              <option value="Direktorat Produksi">Direktorat Produksi</option>
              <option value="Direktorat Keuangan dan SDM">Direktorat Keuangan dan SDM </option>
            </SELECT>
            
            DIVISI<SELECT class="form-control mb-3 form-select" name="divisi" id="divisi">
            <option></option>
              <option value="Sub Direktorat PU">Sub Direktorat PU</option>
              <option value="Sekretaris Perusahaan">Sekretaris Perusahaan</option>
              <option value="Satuan Pengawasan Intern">Satuan Pengawasan Intern</option>
              <option value="Divisi Sistem Informasi & Manajemen Kinerja">Divisi Sistem Informasi & Manajemen Kinerja</option>
              <option value="Divisi Human Capital & Umum">Divisi Human Capital & Umum</option>
              <option value="Divisi Keamanan">Divisi Keuangan</option>
              <option value="Divisi Distribusi & Perc Teknik">Divisi Distribusi & Perc Teknik</option>
              <option value="Divisi Pusat Perawatan & HSE">Divisi Pusat Perawatan & HSE</option>
              <option value="Divisi Produksi">Divisi Produksi</option>
              <option value="Divisi Pengembangan Usaha">Divisi Pengembangan Usaha</option>
              <option value="Divisi Perencanaan Korporat">Divisi Perencanaan Korporat</option>
              <option value="Divisi Komersial">Divisi Komersial</option>
            </SELECT>
            
            JENIS KELAMIN<SELECT class="form-control mb-3 form-select" name="jenis_kelamin" id="jenis_kelamin">
            <option></option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option></SELECT>
            
            USIA<SELECT class="form-control mb-3 form-select" name="usia" id="usia">
            <option></option>
            <option value="20-30 Tahun">20-30 Tahun</option>
              <option value="31-40 Tahun">31-40 Tahun</option>
              <option value="41-50 Tahun">41-50 Tahun</option>
              <option value=">50 Tahun">>50 Tahun</option>
            </SELECT>
            
            MASA KERJA<SELECT class="form-control mb-3 form-select" name="masa_kerja" id="masa_kerja">
            <option></option>
            <option value="0-5 Tahun">0-5 Tahun</option>
              <option value="6-10 Tahun">6-10 Tahun</option>
              <option value="11-20 Tahun">11-20 Tahun</option>
              <option value="20 Tahun">20 Tahun</option>
            </SELECT>
            
            LEVEL JABATAN<SELECT class="form-control mb-3 form-select" name="level_jabatan" id="level_jabatan">
            <option></option>
            <option value="Vice President">Vice President</option>
              <option value="Kepala Divisi/Ahli Utama">Kepala Divisi/Ahli Utama</option>
              <option value="Kepala Dinas/Ahli Madya">Kepala Dinas/Ahli Madya</option>
              <option value="Kepala Seksi/Ahli Pertama">Kepala Seksi/Ahli Pertama</option>
              <option value="Teknisi/Analis/Kepala Regu/Staff Analis">Teknisi/Analis/Kepala Regu/Staff Analis</option>
              <option value="Petugas/Operator/Staff Pelaksana">Petugas/Operator/Staff Pelaksana</option>
            </SELECT>

            <!--LAYANAN<SELECT class="form-control mb-3 form-select" name="layanan" id="layanan">
            <option></option>
            <option value="Pernyataan Umum">Pernyataan Umum</option>
              <option value="Solusi Bisnis">Solusi Bisnis</option>
              <option value="Layanan EUD">Layanan EUD</option>
              <option value="Layanan Internet">Layanan Internet</option>
              <option value="Layanan SAP">Layanan SAP</option>
              <option value="Layanan Aplikasi">Layanan Aplikasi</option>
              <option value="Layanan CCTV">Layanan CCTV</option>
            </SELECT>-->


              <!--Kuisioner
              KUISIONER
              <SELECT class="form-control mb-3 form-select" name="kuisioner" id="kuisioner">
              <option value="Layanan SI/TI Tersedia Sesuai Waktu yang dijanjikan">Layanan SI/TI Tersedia Sesuai Waktu yang dijanjikan</option>
              </SELECT>-->

            

                            
              <!--Harapan
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

              
              FAKTA
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
              </SELECT>-->

              
            <button type="submit" class="btn btn-warning" name="add">Simpan</button>
            </form>
</div>

<?php
    include 'footer.php';
?>