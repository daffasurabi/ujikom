<?php
include "koneksi.php";
	$gmail = $_POST['gmail'];
	$password = md5($_POST['password']);

	$select = mysqli_query($koneksi,"SELECT * FROM BARU WHERE gmail = '$gmail' AND password = '$password' ");
	$row = mysqli_num_rows($select);

	if($row > 0){
		session_start();
		$_SESSION ["gmail"] = $row ["gmail"];
		$_SESSION ["password"] = $row ["password"];
		header("location:home.php");
	}
	else {
		
 			echo "<script> 
			 alert('username atau password salah!');
			 document.location.href = 'index.php';
		 	</script>
	 		";
	
	}

?>