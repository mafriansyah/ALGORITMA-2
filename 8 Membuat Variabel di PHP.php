<?php

$nisn1 = "M AFRIANSYAH";
$harga = 1000;
$nama_barang = "HP IPHONE 32 PRO MAX";
$namabarang1     = "HP";
$harga = 4000;
$stok = 40;

// membuat variabel baru
$stok = 40;

// mengisi ulang variabel dengan nilai baru
$stok = 54;

//1)	Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.
//Contoh: ❌ Salah
//$!nama = "Amellya";
//$46rosi = "Amel";
//Contoh: ✔️ Benar
$nama = "M AFRIANSYAH";
$rosi46 = "rian";
//2)	Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.
//Contoh:
$nama_barang = "diamond";
$namaPembeli = "rian"; //  menggunakan camelCase

//3)	Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
//Contoh:
$nama_barang = "M AFRIANSYAH";
$namaPembeli = "rian";
$harga = 50000000;

//4)	Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
//Contoh: Tiga variabel ini akan dianggap berbeda.
$Belajar = "css";
$BELAJAR = "php";
$belajar = "html";

//==================== cara mencetak ====================
echo 
$nisn1,"<p>".
$harga,"<p>".
$nama_barang,"<p>".
$namabarang1,"<p>".
$harga,"<p>".
$stok,"<p>".
$nama,"<p>".
$rosi46,"<p>".
$nama_barang,"<p>".
$namaPembeli,"<p>". 
$nama_barang,"<p>".
$namaPembeli,"<p>".
$harga,"<p>".
$Belajar,"<p>".
$BELAJAR,"<p>".
$belajar;

echo "<br><br><br><strong>By M AFRIANSYAH </strong>";