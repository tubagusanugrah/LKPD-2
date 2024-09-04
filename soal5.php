<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 5</title>
</head>
<body>
    <?php
    // Buat dua array index berisi angka-angka 
    $angka1 = [80, 77, 65, 89, 55, 12, 90, 86]; // array index
    $angka2 = [77, 99, 55, 81, 45, 90, 91, 98]; // array index
    // Tampilkan angka yang ada di kedua array
    echo "yang ada di kedua variabel: ";
    echo "<br>";
    // Cari angka yang sama di $angka1 dan $angka2
    $membandingkan = array_intersect($angka1, $angka2); // array intersect =  untuk mencari nilai-nilai yang sama di antara beberapa array
    // Looping buat tampilin angka-angka yang sama tadi
    foreach ($membandingkan as $membandingkan1) { // as/alias untuk mencakup variabel isi array nya dengan nilai yang sama
        echo $membandingkan1 . ",";
    }
    echo "<br>";
    // Cari angka yang ada di $angka1 tapi nggak ada di $angka2
    $membandingkan2 = array_diff($angka1, $angka2); // array diff = untuk mencari nilai-nilai yang beda di antara beberapa array
    // Tampilkan angka yang cuma ada di $angka1
    echo "yang tidak ada di kedua variabel: ";
    echo "<br>";
    foreach ($membandingkan2 as $membandingkan22) { // as/alias untuk mencakup variabel isi array nya dengan nilai yang sama
        echo $membandingkan22 . ",";
    }
    ?>
</body>
</html>