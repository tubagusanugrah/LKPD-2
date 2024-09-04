<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 10</title>
</head>

<body>
    <?php
    // Array usia yang berisi daftar umur
    $usia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50]; // array index
    // Inisialisasi variabel untuk ngitung kategori
    $dewasa = 0;       // Buat nyimpen jumlah dewasa
    $AnakAnak = 0;     // Buat nyimpen jumlah anak-anak
    // Looping buat periksa tiap umur dalam array $usia
    foreach ($usia as $umur) { // as = untuk mencakup variabel isi array
        // Cek apakah umur lebih dari atau sama dengan 17
        if ($umur >= 17) {
            $dewasa++;  // Kalau iya, tambah hitungan dewasa
        } else {
            $AnakAnak++; // Kalau nggak, tambah hitungan anak-anak
        }
    }
    // Tampilkan daftar usia
    echo "List usia: ";
    foreach ($usia as $umur2) {
        echo $umur2 . ","                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ; // Tampilkan tiap umur, pisah pake koma
    };
    echo "<br>"; // Ganti baris
    // Tampilkan jumlah kategori Dewasa
    echo "Jumlah kategori Dewasa: " . $dewasa;
    echo "<br>"; // Ganti baris
    // Tampilkan jumlah kategori Anak-anak
    echo "Jumlah kategori Anak-anak: " . $AnakAnak;
    ?>
</body>
</html>