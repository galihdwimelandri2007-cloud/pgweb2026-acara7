<?php
    // Mengulang angka menggunakan while
    $i = 1;

    while ($i < 100) {
        echo $i . "<br>";
        $i++; }

    // Mengulang angka menggunakan for
    for ($i = 1; $i < 100; $i++) {
        echo $i . "<br>";}

    // Mendefinisikan array berisi nama warna
    $colors = array("red", "green", "blue", "yellow");

    // Menampilkan elemen array menggunakan foreach
    foreach ($colors as $value) {
        echo $value . "<br>"; }

    // Menampilkan elemen array berdasarkan indeks
    for ($i = 0; $i < count($colors); $i++) {
        echo $colors[$i] . "<br>"; }

?>