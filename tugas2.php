<?php
    $r = 7; 
    $s = 10;
    $pi = 3.14;

    $luasAlas = $pi * pow($r, 2);
    $luasPermukaan = $luasAlas + ($pi * $r * $s);

    echo "<h3>Hasil Perhitungan Kerucut</h3>";
    echo "Jari-jari (r): $r <br>";
    echo "Garis Pelukis (s): $s <br>";
    echo "--------------------------- <br>";
    echo "Luas Alas Kerucut: " . $luasAlas . "<br>";
    echo "Luas Permukaan Kerucut: " . $luasPermukaan . "<br>";
?>