<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qr Code Generator</title>
    <link rel="stylesheet" href="./aset/csu.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
</head>

<body>
    
    
    <div class="content" >
        <h1>QR Code Generator</h1>
        <canvas id="qr-panel"></canvas>
        

        <div id="form-qr">
            <input type="text" placeholder="Enter text to generate QR code" id="qr-input">
            
                        <div class="dapka">
                         <button id="qr-btn">Generate</button>
                        </div>
        
                
                        <div class="dida">
                         <button id="dida">Gs</button>
                        </div>
        
        </div>
        
        <script>
    const srcElement = document.querySelector("body"),
    btns = document.querySelectorAll("button");
    btns.forEach(btn => { // looping through each btn
      // adding click event to each btn
      btn.addEventListener("click", () => {
        // creating canvas of element using html2canvas
        html2canvas(srcElement).then(canvas => {
          // adding canvas/screenshot to the body
          if(btn.id === "take-src-only") {
            return document.body.appendChild(canvas);
          }
          if(btn.id === "dida"){
          const a = document.createElement("a");
          a.href = canvas.toDataURL();
          a.download = "screenshot.jpg";
          a.click();
          }
        });
      });
    });
        </script>
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
