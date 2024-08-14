<?php
include("koneksi.php");
if(isset($_POST['add'])){
    $layanan = $_POST['layanan'];
    $kuisioner = $_POST['kuisioner'];
    $harapan = $_POST['harapan'];
    $fakta = $_POST['fakta'];
//insert karyawan data into table//
    $query = "INSERT INTO karyawan(layanan,kuisioner,harapan,fakta) VALUES('$layanan','$kuisioner','$harapan','$fakta')";
    $perintah= mysqli_query($koneksi, $query);

    if($query) {
        echo "<script>
                        alert('Simpan Data Berhasil');
                        document.location='karyawan.php';
            </script>";
        }else{
            echo "<script>
                        alert('Simpan Data Gagal');
                        document.location='karyawan.php';
            </script>";
        }
}
?>