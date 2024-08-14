<?php
include("koneksi.php");
?>
<?php
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
            <a class="navbar-brand" href="#">KRAKATAU TIRTA INDUSTRI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="header.php">Home</a>
                <a class="nav-link" href="about.php">Tentang Kami</a>
                <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="index.php">Karyawan</a></li>
                </ul>
            </li>                
            <a class="nav-link" href="#">Kontak</a>
            </div>
            </div>
        </div>
        </nav>
    <!--Break Navigasi Depan-->
</body>
<div class="container mt-3">
<!--Kalimat Pembuka Layanan Karyawan-->
    <div class="mt-4 mb-1 p-1 bg-primary text-white rounded"><h6 class="text-center">Kualitas Layanan SI & TI PT KTI 2024</h6></div>
    <!--Break Kalimat Pembuka Layanan Karyawan-->
    <a href="karyawan_tambah.php" class="btn btn-primary">Tambah Data</button></a>
        <div class="table-responsive">
            <table class="table">
            <tr>
                <th>LAYANAN</th>
                <th>KUISIONER</th>
                <th>HARAPAN</th>
                <th>FAKTA</th>
                <th>Opsi</th>
            </tr>

                <?php
                    while ($data = mysqli_fetch_array($perintah))
                    {
                        echo "<tr>";
                        echo "<td>". $data['layanan']."</td>";
                        echo "<td>". $data['kuisioner']."</td>";
                        echo "<td>". $data['harapan']."</td>";
                        echo "<td>". $data['fakta']."</td>";
                        echo "<td>
                            <a class='btn btn-warning' href='karyawan_edit.php?id=". $data['id'] . "'><i class='bx bx-edit'></i> Edit
                            <a class='btn btn-danger' href='karyawan_del.php?id=".$data['id']. "'><i class='bx bxs-trash' ></i> Hapus
                        </td>
                        </tr>";
                    }
                ?>
        </table>
    </div>

<?php
    include 'footer.php';
?>