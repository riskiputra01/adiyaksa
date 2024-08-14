<?php
include("../koneksi.php");
?>
<?php
$sql = "SELECT * FROM survey"; // Ganti dengan nama tabel Anda
$result = $koneksi->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="./dist/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                    <a class="navbar-brand me-auto text-danger" href="#">Service<span class="text-warning">Quality</span></a>
                    <ul class="nav ms-auto">
                        <li class="nav-item dropstart">
                            <a class="nav-link text-dark ps-3" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown">
                                <i class="fa fa-bell fa-lg py-2" aria-hidden="true"></i>
                                <span class="badge bg-danger">10</span>
                            </a>
                            <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                                <div class="d-flex p-3 border-bottom align-items-cente mb-2">
                                    <i class="fa fa-bell me-3" aria-hidden="true"></i>
                                    <span class="fw-bold lh-1">Notifikasi</span>
                                </div>
                                <a class="dropdown-item py-2" href="#">
                                    <div class="d-flex overflow-hidden">
                                        <i class="fa fa-envelope fa-lg dropdown-icons bg-primary text-white p-2 me-2"
                                            aria-hidden="true"></i>
                                        <div class="d-block content">
                                            <p class="lh-1 mb-0">Safna Prasetiono</p>
                                            <span class="content-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Quia sint laboriosam in architecto earum.</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2" href="#">
                                    <div class="d-flex overflow-hidden">
                                        <i class="fa fa-file fa-lg dropdown-icons bg-warning text-white p-2 me-2"
                                            aria-hidden="true"></i>
                                        <div class="d-block content">
                                            <p class="lh-1 mb-0">file informations</p>
                                            <span class="content-text">your file has exceeded the limit.</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2" href="#">
                                    <div class="d-flex overflow-hidden">
                                        <i class="fa fa-hdd-o fa-lg dropdown-icons bg-danger text-white p-2 me-2"
                                            aria-hidden="true"></i>
                                        <div class="d-block content">
                                            <p class="lh-1 mb-0">Storage</p>
                                            <span class="content-text">Your storage is full, delete some files.</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <img src="./images/user/user.png" alt="user" class="img-user">
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom mb-2">
                                <img src="./images/user/user.png" alt="user" class="img-user me-2">
                                <div class="d-block">
                                    <p class="fw-bold m-0 lh-1">YourName</p>
                                    <small>krakatautirtaindustri@gmail.com</small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-3">
                    <img src="./images/user/user.png" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-white">KTI</p>
                    <small class="text-white">Krakatau Tirta Industri</small>
                </div>
            </div>
            <div class="slider-body px-1">
                <nav class="nav flex-column">
                    <a class="nav-link px-3 active" href="#">
                        <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                    </a>
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="kuesioner.php">
                        <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>Data Kuisioner
                    </a>
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-calendar fa-lg box-icon" aria-hidden="true"></i>Kalkulasi Survey
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-bell fa-lg box-icon" aria-hidden="true"></i>Grafik Survey
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>

        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-15">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>Selamat Datang Admin!</h2>
                            <p>Halaman ini merupakan Data survey kepuasan Pelayanan Karyawan PT.Krakatu Tirt Industri.</p>
            
                <div class="container">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Direktorat</th>
                                <th>Divisi</th>
                                <th>Jenis Kelamin</th>
                                <th>Usia</th>
                                <th>Level Jabatan</th>
                                <th>Masa Kerja</th>
                                <th>Layanan</th>
                                <th>Kuisioner</th>
                                <th>Harapan</th>
                                <th>Fakta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                // Output data setiap baris
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["direktorat"] . "</td>";
                                    echo "<td>" . $row["divisi"] . "</td>";
                                    echo "<td>" . $row["jenis_kelamin"] . "</td>";
                                    echo "<td>" . $row["usia"] . "</td>";
                                    echo "<td>" . $row["level_jabatan"] . "</td>";
                                    echo "<td>" . $row["masa_kerja"] . "</td>";
                                    echo "<td>" . $row["layanan"] . "</td>";
                                    echo "<td>" . $row["kuisioner"] . "</td>";
                                    echo "<td>" . $row["harapan"] . "</td>";
                                    echo "<td>" . $row["fakta"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='9' class='text-center'>No data available</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
$koneksi->close();
?>


