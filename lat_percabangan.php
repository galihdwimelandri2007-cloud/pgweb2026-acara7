<?php
    // Mendefinisikan nilai untuk operasi
    $a = 10;
    $b = 3;

    // Menampilkan hasil operasi aritmatika
    echo "Penjumlahan: " . ($a + $b) . "<br>";
    echo "Pengurangan: " . ($a - $b) . "<br>";
    echo "Perkalian: " . ($a * $b) . "<br>";
    echo "Pembagian: " . ($a / $b) . "<br>";
    echo "Modulus: " . ($a % $b) . "<br>";

    // Memeriksa kondisi dengan operator perbandingan dan logika
    $x = 1001;
    $y = 50;

    if ($x == 100 || $y == 80) {
        echo "Hello world <br>";
    } elseif ($x == 10 || $y == 80) {
        echo "Program selesai <br>";
    } else {
        echo "Kondisi tidak terpenuhi <br>";
    }

    // Menguji operator logika AND
    if ($x > 100 && $y < 80) {
        echo "Kedua kondisi terpenuhi <br>";
    }
?>