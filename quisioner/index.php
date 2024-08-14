<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Kuisioner</title>
</head>
<body>
<div class="container mt-2">
    <div class="mt-4 mb-1 p-1 bg-primary text-white rounded"><h6 class="text-center">Kuisioner Harapan dan Fakta</h6></div>
        <div class="table-responsive">
            <table class="table">
                <form action="kuisioner_process.php"  method="post">

                    <?php
                        $questions = [
                            "Layanan SI/TI dapat diandalkan?",
                            "Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan?",
                            "Seluruh layanan SI/TI sudah diinformasikan kepada Anda?",
                            "Staff di Group OLTI selalu memberikan bantuan kepada Anda?",
                            "Layanan SI/TI disediakan perusahaan ditempat kerja anda?",
                        ];

                        foreach ($questions as $index => $question) {
                            $num = $index + 1;
                            echo "<tr>";
                            echo "<td>$num. $question";

                            echo "<td><label for='harapan$num'>Harapan:</label>";
                            echo "<td><input type='text' id='harapan_$num' name='harapan_$num' required><br></td>";
                            echo "<td>";

                            echo "<label for='fakta_$num'>Fakta:</label>";
                            echo "<td><input type='text' id='fakta_$num' name='fakta_$num' required><br></td>";
                            echo "<td>
                            </tr>";
                        }
                        ?>
        </div>
                </form>
                <input type="submit" value="Kirim">
</body>
</html>
