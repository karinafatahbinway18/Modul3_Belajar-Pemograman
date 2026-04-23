<?php
$a="300";
$b="456";
$komentar="Selamat Datang";

echo ("Nilai Variabel a adalah = $a <br>");
//variabel bertipe integar
echo ("Nilai Variabel b adalah = $b <br>");
//variabel bertipe string

$tambah= $a + $b;
$kurang= $a - $b;
$kali= $a * $b;
$bagi= $a / $b;

echo ("Hasil penjumlahan dari a dan b adalah =$tambah <br>");
echo ("Hasil pengurangan dari a dan b adalah =$kurang <br>");
echo ("Hasil perkalian dari a dan b adalah =$kali <br>");
echo ("Hasil pembagian dari a dan b adalah =$bagi <br>");

$nama = "UMPKU";
$garis= "===========";

echo "<p>";
echo $garis."<br>";
echo $komentar . "Di lab Praktikum". $nama. "<br> Selamat datang karin <br>";
echo $garis."<br>";

?>

