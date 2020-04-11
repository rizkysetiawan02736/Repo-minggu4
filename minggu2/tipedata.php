<?php
$nim = "A22.2019.02728";
$nama = 'Alawi';
$umur = 20;
$nilai = 85.25;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur;
print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif";
else echo "Status : Tidak Aktif";
?>
