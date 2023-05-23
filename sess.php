<?php
include "koneksi.php";
	$gmail = $_POST['gmail'];
	$password = md5($_POST['password']);

	$sql = mysqli_query($koneksi,"SELECT * FROM BARU WHERE gmail = '$gmail' AND password = '$password' ");
	$count = mysqli_num_rows($sql);
$fetchData = mysqli_fetch_array($sql);
if($count > 0){
    $level = $fetchData['level'];
    if($level == '1'){
        $_SESSION['gmail'] = $gmail;
        $_SESSION['level'] = $level;
        header('location:home.php');
    }else if($level == '2'){
        $_SESSION['gmail'] = $gmail;
        $_SESSION['level'] = $level;
        header('location:data.php');
    }
}else{
    echo "Username dan Password yang Anda masukan salah. <br>";
    echo "<a href='index.html'>Kembali</a>";
}
?>

