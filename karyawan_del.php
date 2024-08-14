<?php

include("koneksi.php");

$id = $_GET['id'];

$perintah = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id = $id");

header("location:karyawan.php");