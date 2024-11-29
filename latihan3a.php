<?php

function gantiStyle($tulisan, $kelas) : string {
  return "<span class='$kelas'>$tulisan</span>";
}

$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

echo gantiStyle(tulisan: $tulisan, kelas: $kelas);

?>

<style>
  .ganti-style {
    font-size: 28px;
    font-family: Arial;
    color: #1A0547;
    font-style: italic;
    font-weight: bolder;
   }
</style>