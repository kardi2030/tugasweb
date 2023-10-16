<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php</title>
</head>
<body>
    <h1>PHP Dasar</h1>


<?php

$umur = 90;
$nama = "Kardi";

echo 'umur : ' .$umur;

echo '<br>';

echo "umur : $umur";

echo '<br>';

$array_nama = ['kardi','muhammad','ahmad'];

echo 'nama 1 : ' .$array_nama[0];
echo '<br>'; 
echo 'nama 2 : ' .$array_nama[1];
echo '<br>'; 

$array_identitas = [
'kardi' => ['nama' => 'Muhammad','umur' => '90'],
'Muhammad' => ['nama' => 'Irfan','umur' => '95'],
];

echo $array_identitas['kardi']['umur'];
echo '<br>';

echo "cetak dari PHP";
echo "1"

?>

</body>
</html>