<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>
<body>
    <?php
    // Looping dari 1 sampai 11
    for ($x = 1; $x <= 11; $x++) {
        // Cek apakah $x itu ganjil
        if ($x % 2 == 1) {
            // Loop lagi dari 1 sampai 11 buat nilai $j
            for ($j = 1; $j <= 11; $j++) {
                // Cek kalau $j sama dengan 5
                if ($j == 5) {
                    // Tampilkan hasil kali $x dan $j dengan format "x * j = hasil"
                    echo $x . "x" . $j . "=" . $x * $j . "<br>";
                }
            }
        }
    }
    ?>
</body>
</html>