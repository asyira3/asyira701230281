<?php
// fungsi untuk menghitung luas persegi panjang
function hitungluaspersegipanjang($panjang, $lebar) 
{
    $luas = $panjang * $lebar;
    return $luas;
}

//memanggil fungsi dan manampilkan hasilnya
$panjang = 3;
$lebar = 5;
echo "luas hitung luas persegi panjang $panjang  dan $lebar adalah:" . hitungluaspersegipanjang($panjang, $lebar);
?>