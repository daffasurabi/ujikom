<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qr Code Generator</title>
    <link rel="stylesheet" href="./aset/qr.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
</head>

<body>
    
    
    <div class="content" >
        <h1>QR Code Generator</h1>
        <canvas id="qr-panel"></canvas>
        

        <div id="form-qr">
            <input type="text" placeholder="Enter text to generate QR code" id="qr-input">
            <button id="qr-btn">Generate</button>
            
        </div>
        <a href="home.php">back</a>
    </div>

    <script>
        let qrPanel = document.querySelector("#qr-panel");
        let qrInput = document.querySelector("#qr-input");
        let qrBtn = document.querySelector("#qr-btn");

        (function () {
            let qr = new QRious({
                element: qrPanel,
                value: "https://www.youtube.com/channel/UCdpaT6CEafkCbD-mZUfP64w/videos",
                size: 300
            });
        })();

        // action generate qr

        qrBtn.addEventListener("click", () => {
            new QRious({
                element: qrPanel,
                value: qrInput.value,
                size: 300
            });
        })
    </script>
    
</body>

</html>
