<?php
//cara membuat indexed array
$minuman = array("<p>bandrek", "<p>susu", "<p>Jus mangga");
array("bandrek");
array("susu");
array("Jus mangga");

//mengakses elemen array
echo $minuman  = "<p>bandrek"; //output:kopi
echo $minuman = "<p>susu"; //output:Teh
echo $minuman  = "<p>Jus mangga"; //output:jus jeruk
//menampilkan seluruh isi array
print_r($minuman);

$makanan = ["cempedak", "kacang", "buryam"];
array("cempedak");
array("kacang");
array("buryam");

echo $makanan  = "<p>cempedak"; //output:cempedak
echo $makanan = "<p>kacang"; //output:kacang
echo $makanan  = "<p>buryam"; //output:buryam

print_r($makanan);

echo "<p><br><strong>By mafriansyah</strong>";
?>