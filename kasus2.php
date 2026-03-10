<!-- cara menjalankan code -->
<!-- 1. Simpan code ini dalam file bernama kasus2.php -->
<!-- 2. Jalankan server lokal (misalnya XAMPP) dan akses file ini melalui browser dengan URL seperti: http://localhost/kasus2.php?n=255 -->

<?php
if(!isset($_GET['n'])){
    echo "Masukkan nilai desimal di URL, contoh: ?n=255";
    exit;
}

$desimal = $_GET['n'];

if(!is_numeric($desimal)){
    echo "Input harus berupa angka.";
    exit;
}

$hexadecimal = strtoupper(dechex($desimal));
echo $hexadecimal;
?>