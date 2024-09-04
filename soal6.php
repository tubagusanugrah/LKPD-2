<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 6</title>
</head>
<body>
    <?php
    // Daftar siswa dengan nama dan nilai mereka menggunakan array multidimensi/array di dalam array
    $student = [
        [
            'nama' => 'Andi',
            'nilai' => [80, 78, 82, 78, 88], 
        ],
        [
            'nama' => 'Beni',
            'nilai' => [86, 70, 80, 85, 81],
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83, 91, 70, 73, 81],
        ],
        [
            'nama' => 'Eko',
            'nilai' => [89, 85, 84, 86, 88],
        ],
    ];
    // Looping untuk setiap siswa
    foreach ($student as &$siswa) {
        // Hitung total nilai dari array nilai
        $totalNilai = array_sum($siswa['nilai']); // arry sum = untuk menghitung total dari sebuah array
        // Hitung jumlah nilai yang ada
        $jumlahNilai = count($siswa['nilai']); // count = untuk mencari berapa banyak sebuah array
        // Hitung rata-rata dengan bagi total nilai sama jumlah nilai
        $rataRata = $totalNilai / $jumlahNilai;
        // Simpan rata-rata ke dalam array siswa
        $siswa['rata_rata'] = $rataRata;
    }
    // Loop lagi untuk tampilkan hasilnya
    foreach ($student as $siswa) {
        // Tampilkan nama dan nilai rata-rata siswa
        echo "Nilai rata-rata {$siswa['nama']} adalah {$siswa['rata_rata']} <br />";
    }
    ?>
</body>
</html>