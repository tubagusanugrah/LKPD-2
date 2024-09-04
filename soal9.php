<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 9</title>
</head>
<body>
    <?php
    $uang = 150000; // Uang yang mau dipecah
    $pecahan = [100000, 50000, 20000, 500]; // Pecahan yang tersedia menggunakan array sejajar/index
    $hasil = []; // Tempat nyimpen hasil pecahan
    // Loop buat tiap pecahan
    foreach ($pecahan as $nilai) { // as = untuk mencakup variabel isi array dengan nilai yang sama
        // Hitung berapa banyak pecahan yang bisa diambil
        $hasil[$nilai] = intdiv($uang, $nilai); // intdiv = untuk menghitung pecahan
        // Sisa uang setelah diambil pecahan
        $uang = $uang % $nilai;
    }
    // Ngasih jarak di tampilan
    echo "<br>";
    echo "<br>";
    echo "Lembar Rupiah"; // Judul output
    echo "<br>";
    // Loop buat nampilin hasil pecahan
    foreach ($hasil as $nilai => $lembar) {
        // Tampilkan hasil dalam format yang rapi
        echo "Rp " . number_format($nilai, 0, ',', '.') . ": " . $lembar . "<br>"; // number_format = untuk memformat angka
    }
    ?>
</body>
</html>