<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>
</head>
<body>
    <?php
    // Looping dari 2 sampai 1 (mundur)
    for ($i = 2; $i >= 1; $i--) {
        // Looping dari 10 sampai 1 (mundur juga)
        for ($j = 10; $j >= 1; $j--) {
            // Kalikan $i dengan $j
            $hasil = $i * $j;
            // Tampilkan hasil
            echo "$i x $j = $hasil<br><br>";
        }
    }
    ?>
</body>
</html>