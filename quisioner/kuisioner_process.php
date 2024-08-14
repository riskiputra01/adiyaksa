<?php
// Koneksi ke database
$servername = "localhost";  // Nama server database
$username = "root";         // Username database
$password = "";             // Password database
$dbname = "serqual";  // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk memasukkan data
$stmt = $conn->prepare("INSERT INTO kuisioner (pertanyaan, harapan, fakta) VALUES (?, ?, ?)");

// Looping melalui data yang diterima dari form
$questions = [
                "Layanan SI/TI dapat diandalkan?",
                "Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan?",
                "Seluruh layanan SI/TI sudah diinformasikan kepada Anda?",
                "Staff di Group OLTI selalu memberikan bantuan kepada Anda?",
                "Layanan SI/TI disediakan perusahaan ditempat kerja anda?",
    
];

foreach ($questions as $index => $question) {
    $num = $index + 1;
    $harapan = $_POST["harapan_$num"];
    $fakta = $_POST["fakta_$num"];

    // Mengikat parameter
    $stmt->bind_param("sss", $question, $harapan, $fakta);

    // Menjalankan query
    if ($stmt->execute() === FALSE) {
        echo "Error: " . $stmt->error;
    }
}

// Menutup statement dan koneksi
$stmt->close();
$conn->close();

// Redirect ke halaman sukses atau tampilkan pesan sukses
header("Location: sukses.php");
exit();
?>
