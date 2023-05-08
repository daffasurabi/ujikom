<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./aset/home.css">
    <script src="./node_modules/html5-qrcode/html5-qrcode.min.js"></script>
    <link href="sytle.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="qr.php">pembuat qr <span class="sr-only"></span></a>
    </li>
      </ul>
  </div>
</nav>
<form action="insert.php" method="post" > 
    <fieldset >
    <div  align="center">
        absensi karyawan
        <hr>
        <div>
            <?php
            function hari_ini(){
                $hari = date ("D");
             
                switch($hari){
                    case 'Sun':
                        $hari_ini = "Minggu";
                    break;
             
                    case 'Mon':			
                        $hari_ini = "Senin";
                    break;
             
                    case 'Tue':
                        $hari_ini = "Selasa";
                    break;
             
                    case 'Wed':
                        $hari_ini = "Rabu";
                    break;
             
                    case 'Thu':
                        $hari_ini = "Kamis";
                    break;
             
                    case 'Fri':
                        $hari_ini = "Jumat";
                    break;
             
                    case 'Sat':
                        $hari_ini = "Sabtu";
                    break;
                    
                    default:
                        $hari_ini = "Tidak di ketahui";		
                    break;
                }
             
                return  $hari_ini;
               
              
             
            }
            ?>
            <input type="hidden" value="<?php echo hari_ini() ?>" name="hari_ini">
            
            
            <?php
            echo "Hari ini adalah "  . hari_ini();
            ?>
             
        jam
        <p id="clock" name="clock"></p>
                    <script>
                       setInterval(customClock, 500);
                       function customClock() {
                           var time = new Date();
                           var hrs = time.getHours();
                           var min = time.getMinutes();
                           var sec = time.getSeconds();
                           
                           document.getElementById('clock').innerHTML = hrs + ":" + min + ":" + sec;
                           
                       }
                       
                    </script>
                    <?php
                    echo  date('d-m-Y');
                    ?>
    </div>
    <style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    #reader {
    background-color: #FFF;
    position: relative;
    width: 600px;
    border-radius: 30px;
    display: flex;
    justify-content: center;
    align-items: center; 
    }
    #result {
        text-align: center;
        font-size: 1.5rem;
    }
</style>

<main>
    <div id="reader"></div>
    <div id="result"></div>
</main>
    

<script>

    const scanner = new Html5QrcodeScanner('reader', { 
        // Scanner will be initialized in DOM inside element with id of 'reader'
        qrbox: {
            width: 250,
            height: 250,            
        },  // Sets dimensions of scanning box (set relative to reader element width)
        fps: 30, // Frames per second to attempt a scan
    });


    scanner.render(success, error);
    // Starts scanner

    function success(result) {

        document.getElementById('result').innerHTML = `
        <h2>Success absen</h2>
        <hr>
        <input type="hidden" value="${result}" name="result">
        <p>"${result}"<p>

        `;
      
        // Prints result as a link inside result element
      

        scanner.clear();
        // Clears scanning instance

        document.getElementById('reader').remove();
        // Removes reader element from DOM since no longer needed
    
    }

    function error(err) {
        console.error(err);
        // Prints any errors to the console
    }

</script>
<button type="submit">kirim</button>
</form>
</body>
</html>