<?php
include("koneksi.php");
include("index.php");
?>

<?php
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
    <!--Kalimat Pembuka Layanan Karyawan-->
    <div class="container mt-2">
        <div class="mt-4 mb-1 p-1 bg-primary text-white rounded"><h6 class="text-center">Kualitas Layanan SI & TI PT KTI 2024</h6></div>
    <!--Break Kalimat Pembuka Layanan Karyawan-->
        <a href="kuisioner_tambah.php" class="btn btn-primary">ISI KUISIONER</button></a>
                <table class="table table-bordered">
                    <tr>
                        <th>DIREKTORAT</th>
                        <th>DIVISI</th>
                        <th>JENIS KELAMIN</th>
                        <th>USIA</th>
                        <th>MASA KERJA</th>
                        <th>LEVEL JABATAN</th>
                        <th>LAYANAN</th>
                        <th>KUISIONER</th>
                        <th>HARAPAN</th>
                        <th>FAKTA</th>
                    </tr>
                    <?php
                     while ($data = mysqli_fetch_array($perintah))
                        {
                        echo "<tr>";
                        echo "<td>". $data['direktorat']."</td>";
                        echo "<td>". $data['divisi']."</td>";
                        echo "<td>". $data['jenis_kelamin']."</td>";
                        echo "<td>". $data['usia']."</td>";
                        echo "<td>". $data['level_jabatan']."</td>";
                        echo "<td>". $data['masa_kerja']."</td>";
                        echo "<td>". $data['layanan']."</td>";
                        echo "<td>". $data['kuisioner']."</td>";
                        echo "<td>". $data['harapan']."</td>";
                        echo "<td>". $data['fakta']."</td>";
                        echo "<td>
                        </td>
                        </tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
</body>
</html>
<!--
<a class='btn btn-warning' href='karyawan_edit.php?id=". $data['id'] . "'><i class='bx bx-edit'></i> Edit
<a class='btn btn-danger' href='karyawan_del.php?id=".$data['id']. "'><i class='bx bxs-trash' ></i> Hapus