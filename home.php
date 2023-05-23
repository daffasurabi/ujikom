<?php
error_reporting(0);
?>
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
    <script src="sytle.js"></script>
    <link href="sytlee.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    
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
    <li class="nav-item active">
        <a class="nav-link" href="data.php">data absen <span class="sr-only"></span></a>
    </li>
      </ul>
  </div>
</nav>

<form action="" method="POST" enctype="multipart/form-data" >

    <fieldset >
    <div  align="center">
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
        <div class="jam-digital">
        <div id="jam"></div>
            <div id="unit">
             <span>Jam</span>
             <span>Menit</span>
            <span>Detik</span>
        </div>
        </div>

      
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
<?php
if (isset($_POST['cokot'])) {
    
    echo '<script>
    ambilGambar();
    </script>';
  
}
if (isset($_POST['upload'])) {
    include "koneksi.php";
    $direk = "berkas/";
    $file_name=$_FILES['foto']['name'];
    move_uploaded_file($_FILES["foto"]['tmp_name'],$direk.$file_name);
    $result = $_POST['result'];
    $hari = $_POST['hari_ini'];
    $SQL = "INSERT INTO `waktu`(`id`,`namafile`, `username`, `hari`,`tanggal`) VALUES ('','$file_name','$result','$hari',NOW() )";
    $hasil = mysqli_query($koneksi,$SQL);
    header('location:data.php');
    
   
  
}
?>
<div class="kamera">
<p>Device saat ini: <span id="dsi"></span></p>
		<video id="webcamVideo" width="720" height="480" style="border: 1px black solid;" autoplay></video>
		<canvas id="webcamCanvas" width="720" height="480" style="border: 1px black solid; display: none;"></canvas>
		

        
		<br>
		
		<!-- <button onclick="startCamera();" name="start" values="mulai" >Mulai Kamera</button> -->
		<button onclick="gantiKamera();">Ganti Kamera</button>
		<button onclick="ambilGambar();"name="cokot" >Ambil Gambar</button>
		<button onclick="gantiModeKamera()">Ganti Mode Kamera</button>
		
		<script>
			
			var infourl = new URLSearchParams(window.location.search);
			
			var devicesaya = [];
			var devicesaatini = 0;
			
			var fm = "user";
			
			if(infourl.get("modekamera") == "belakang"){
				fm = { "exact" : "environment" };
			}
			
			var wVideo = document.querySelector("#webcamVideo");
			var wCanvas = document.querySelector("#webcamCanvas");
			
			
			
			//nge list device-device video
			navigator.mediaDevices.enumerateDevices().then(function(devices){
				devices.forEach(function(device){
					if(device.kind == "videoinput"){
						devicesaya.push({
							"id" : device.deviceId,
							"label" : device.label,
						});
					}
				});
			});
			
			setTimeout(function(){
				$("#dsi").html(devicesaya[devicesaatini].label);
			},1000);
			
			
			async function startCamera(){
				var stream = null;
				try{
					
					stream = await navigator.mediaDevices.getUserMedia({ video : { 
						deviceId : devicesaya[devicesaatini].id, 
						facingMode : fm ,
					}, audio : false });
					
					
				}catch(error){
					//console.log(error);
					//alert("Perangkat ini tidak dilengkapi kamera belakang.");
				}
				
				wVideo.srcObject = stream;
			}
			
			function ambilGambar(){
				wCanvas.getContext("2d").drawImage(wVideo, 0, 0, 720, 480);
				var imageData = wCanvas.toDataURL("image/jpg");
				//console.log(imageData);
				
				$.post("gambar.php",{
					'imagedata' : imageData
				}, function(data){
					console.log(data);
				})
				
			}
			
			function gantiModeKamera(){
				if(infourl.get("modekamera") == "belakang"){
					location.href = location.href.split('?')[0];
				}else{
					location.href = location.href + "?modekamera=belakang";
				}
			}
			
			function toggleCanvasVideo(){
				$("#webcamVideo").toggle();
				$("#webcamCanvas").toggle();
			}
			
			function gantiKamera(){
				if(devicesaatini < devicesaya.length-1)
					devicesaatini++;
				else
					devicesaatini = 0
				
				$("#dsi").html(devicesaya[devicesaatini].label);
				startCamera();
			}
			
		</script>

</div>
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
        <p>"${result}"<p>`;
      
        // Prints result as a link inside result element
      

        scanner.clear();
        // Clears scanning instance

        document.getElementById('reader').remove();
        // Removes reader element from DOM since no longer needed
      startCamera();
    
    }

    function error(err) {
        console.error(err);
        // Prints any errors to the console
    }
  
</script>

    
<script>
	
			
</script>
<input type="file" name="foto">
<input type="submit" name="upload" value="Upload">
</form>
</body>
</html>