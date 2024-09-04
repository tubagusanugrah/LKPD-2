<!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <?php
    // Nyiapin variable yang mau dicek berisi kata selamat ulang tahun
    $isiteks = "Selamat ulang tahun yang ke 17!"; // Teks yang mau dicek
    // Bikin fungsi cekAngka yang mengecek apakah ada angka di dalam teks
    function cekAngka($isiteks)
    {
        // Coba cari semua angka di dalam teks pakai preg_match_all
        // '/\d/' regex/digit itu buat nyari digit angka (0-9)
        // Hasil pencariannya disimpen di array $angka
        if (preg_match_all('/\d/', $isiteks, $angka)) { // preg_match_all = untuk mencari angka
            // Gabungin semua angka yang ketemu menggunakan implode jadi satu string, dipisah pake koma
            $angkaDitemui = implode(',', $angka[0]); // implode = untuk mengubah array kedalam string
            // Tampilkan pesan kalau teksnya ngandung angka, terus tampilkan angka-angkanya
            echo "Teks mengandung angka: $angkaDitemui"; 
        } else {  
            // Kalau nggak ada angka yang ketemu, tampilkan pesan ini
            echo "Angka tidak ditemukan";
        }
    }
    // Panggil fungsi cekAngka buat ngecek hasil teks yang tadi
    cekAngka($isiteks);
    ?>
</body>
</html>