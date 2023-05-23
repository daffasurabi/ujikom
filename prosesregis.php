<?php 

include 'koneksi.php';

$role = $_POST["level"];
$gmail = $_POST["gmail"];
$password = md5($_POST['password']);

 
$SQL = "INSERT INTO `baru`(`id`, `gmail`, `password`, `level`) VALUES ('','$gmail','$password','$role')";
$hasil = mysqli_query($koneksi,$SQL);
?>
<script>
alert("akun sudah terdaftar");
window.location.href = "index.php";
</script>
