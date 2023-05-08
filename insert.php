<?php 

include 'koneksi.php';

$result = $_POST['result'];
$hari = $_POST['hari_ini'];


$SQL = "INSERT INTO `waktu`(`id`, `username`, `hari`,`tanggal`) VALUES ('','$result','$hari',NOW() )";
$hasil = mysqli_query($koneksi,$SQL);



?>