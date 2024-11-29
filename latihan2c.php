<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pola angka</title>
    <style>
        .ganjil {
            background-color: #003;
            color: white;
            width: 40px;
            height: 40px;
            text-align: center;
            vertical-align: middle;
            line-height: 40px;
            display: inline-block;
            margin; 2px;
        }    
        .genap {
            background-color: #999;
            color: black;
            width: 40px;
            height: 40px;
            text-align: center;
            vertical-align: middle;
            line-height: 40px;
            display: inline-block;
            margin; 2px;
        }
    </style>    
</head>
<body>

<?php
// loop luar untuk membuat baris
for ($i = 1; $i <= 5; $i++) {
    // loop dalam untuk membuat angka pada tiap baris
    for ($j = 1; $j <= $i; $j++) {
        //mengcek apakah baris ganjil atau genap untuk memberikan warna yang sesuai
        if ($i % 2 == 0) {
            echo "<div class='genap'>$j</div>";
        } else {
            // jika baris ganjil, gunakan kelas ' ganjil'
            echo "<div class='ganjil'>$j</div>";
        }
    }
    // baris baru setelah setiap baris selesai
    echo "<br>";
}
?>
    
</body>
</html>
   