<?php
    include("..//koneksi.php");
    include("../index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Layanan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <?php
        // Array contoh data card (bisa juga diambil dari database)
        $cards = [
            ['title' => 'Layanan 1', 'text' => 'Deskripsi layanan 1', 'link' => '#', 'btn_text' => 'Lihat Detail'],
            ['title' => 'Layanan 2', 'text' => 'Deskripsi layanan 2', 'link' => '#', 'btn_text' => 'Lihat Detail'],
            ['title' => 'Layanan 3', 'text' => 'Deskripsi layanan 3', 'link' => '#', 'btn_text' => 'Lihat Detail'],
            ['title' => 'Layanan 4', 'text' => 'Deskripsi layanan 4', 'link' => '#', 'btn_text' => 'Lihat Detail'],
            ['title' => 'Layanan 5', 'text' => 'Deskripsi layanan 5', 'link' => '#', 'btn_text' => 'Lihat Detail'],
            ['title' => 'Layanan 6', 'text' => 'Deskripsi layanan 6', 'link' => '#', 'btn_text' => 'Lihat Detail'],
            ['title' => 'Layanan 7', 'text' => 'Deskripsi layanan 7', 'link' => '#', 'btn_text' => 'Lihat Detail'],
        ];

        // Menampilkan 7 card
        foreach ($cards as $card) {
            echo '
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">' . htmlspecialchars($card['title']) . '</h5>
                        <p class="card-text">' . htmlspecialchars($card['text']) . '</p>
                        <a href="' . htmlspecialchars($card['link']) . '" class="btn btn-primary">' . htmlspecialchars($card['btn_text']) . '</a>
                    </div>
                </div>
            </div>
            ';
        }
        ?>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

</body>