<?php
    // Deklarasi variabel
    $kecamatan = array("Moyudan", "Minggir", "Seyegan", "Godean", "Gamping");
    $luas = array(27.62, 27.27, 26.63, 26.84, 29.25);
    $penduduk = array(31497, 29886, 47129, 72028, 108675);

    // Membuat tabel HTML
    echo "<html><body>";
    echo "<h2>Data Penduduk Kecamatan</h2>";
    echo "<table border='1' cellpadding='6' cellspacing='0'>";
    echo "<tr><th>Kecamatan</th><th>Luas</th><th>Jumlah Penduduk</th></tr>";

    // Menampilkan data tabel
    for ($i = 0; $i < count($kecamatan); $i++) {
        echo "<tr>";
        echo "<td>" . $kecamatan[$i] . "</td>";
        echo "<td>" . $luas[$i] . "</td>";
        echo "<td>" . $penduduk[$i] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</body></html>";
?>