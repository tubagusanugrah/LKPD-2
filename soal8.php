<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 8</title>
</head>
<body>
    <?php
    // Nyiapin array data nilai
    $data = [80, 90, 75, 100, 85, 100, 66];
    // Nilai yang mau dicari
    $cari = 100;
    // Hitung berapa kali nilai $cari muncul di dalam array $data
    $hitung = array_count_values($data)[$cari]; // array_count_values = untuk menghitung berapa kali suatu nilai muncul di dalam array
    // Tampilkan hasilnya
    echo $hitung;
    ?>
</body>
</html>