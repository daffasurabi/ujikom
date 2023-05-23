<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="./aset/login.css">
  <title>HASH TECHIE OFFICIAL</title>
</head>
<body>
<?php 
include 'koneksi.php';
?>
<form action="prosesregis.php" method="post">
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>regis</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="gmail" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <input type="hidden" value="2" name="level">
                        <label for="">Password</label>
                        </div>
                    <div class="forget">
                        <label for=""></label>
                      
                    </div>
                    <button input type="submit" name="regis" value="regis">login</button>
                </form>
            </div>
        </div>
</from>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>