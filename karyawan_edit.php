<?php
include("koneksi.php");
include("index.php");
$id = $_GET['id'];

$query = "SELECT * FROM karyawan WHERE id= '$id'";
$perintah = mysqli_query($koneksi, $query);

while($data = mysqli_fetch_array($perintah)){

    $direktorat = $data['direktorat'];
    $divisi = $data['divisi'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $usia = $data['usia'];
    $masa_kerja = $data['masa_kerja'];
    $level_jabatan = $data['level_jabatan'];
}
?>  
<div class="container mt-3">
    <h2 class="text-center mt-4">Form Data Edit</h2>
    <form action="#" method="post">
        Direktorat <input type="text" name="direktorat" value="<?php echo $direktorat; ?>" class="form-control">
        Divis/Bagian<input type="text" name="divisi" value="<?php echo $divisi; ?>" class="form-control">
        jenis Kelamin <input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" class="form-control">
        Usia <input type="text" name="usia" value="<?php echo $usia; ?>" class="form-control">
        Masa Kerja <input type="text" name="masa_kerja" value="<?php echo $masa_kerja; ?>" class="form-control">
        Level Jabatan <input type="text" name="level_jabatan" value="<?php echo $level_jabatan; ?>" class="form-control">
        
        <input type="hidden" name="id"  value="<?php echo $id;?>">
        <input type="submit" name="edit" value="Simpan" class="btn btn-success mt-3">
    </form>
<?php
    if(isset($_POST['edit'])){
        $direktorat = $_POST['direktorat'];
        $divisi = $_POST['divisi'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $usia = $_POST['usia'];
        $masa_kerja = $_POST['masa_kerja'];
        $level_jabatan = $_POST['level_jabatan'];

        $query = "UPDATE karyawan SET direktorat='$direktorat', divisi='$divisi', jenis_kelamin='$jenis_kelamin', usia='$usia', masa_kerja='$masa_kerja', level_jabatan='$level_jabatan'
        WHERE  id='$id'";

        $printah = mysqli_query($koneksi, $query);
        echo "<script>window.location.replace('karyawan.php');</script>";
    }
?>
<div class="bg-light mt-5">
    <div class="container p-4 text-center">
</div>
    </div>
<?php
include 'footer.php'
?>