<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
    <?php
    // Jam kerja normal sehari
    $jamnormal = 8; 
    // Jam kerja sebenarnya (input yang bisa diubah sesuai kondisi)
    $jamkerja = 10;
    // Hitung jam lembur
    $lembur = $jamkerja - $jamnormal;
    // Gaji per jam pertama dan jam lembur berikutnya
    $jampertama = 50000;
    $jamselanjutnya = 25000;
    // Hitung kompenisasi (gaji) berdasarkan jam kerja
    if ($jamkerja >= $jamnormal) {
        // Kalau kerja lebih dari jam normal, hitung lembur
        $kompenisasi = $jampertama + ($jamselanjutnya * $lembur) - 25000;
    } else {
        // Kalau kerja kurang dari atau sama dengan jam normal, hitung biasa
        $kompenisasi = $jamkerja * $jampertama;
    }
    // Tampilkan hasilnya
    echo "Lama Kerja : " . $jamkerja;
    echo "<br>";
    echo "Jam Lebih : " . $lembur;
    echo "<br>";
    echo "Kompenisasi : " . $kompenisasi;
    ?>
</body>
</html>