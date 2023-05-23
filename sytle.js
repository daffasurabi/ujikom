function animation(span) {
	span.className = "turn";
	setTimeout(function () {
	   span.className = ""
	}, 700);
 }
 
 function jam() {
	setInterval(function () {
 
	   var waktu = new Date();
	   var jam   = document.getElementById('jam');
	   var hours = waktu.getHours();
	   var minutes = waktu.getMinutes();
	   var seconds = waktu.getSeconds();
 
	   if (waktu.getHours() < 10)
	   {
		  hours = '0' + waktu.getHours();
	   }
	   if (waktu.getMinutes() < 10)
	   {
		  minutes = '0' + waktu.getMinutes();
	   }
	   if (waktu.getSeconds() < 10)
	   {
		  seconds = '0' + waktu.getSeconds();
	   }
	   jam.innerHTML  = '<span>' + hours + '</span>'
					  + '<span>' + minutes + '</span>'
					  + '<span>' + seconds +'</span>';
 
	   var spans      = jam.getElementsByTagName('span');
	   animation(spans[2]);
	   if (seconds == 0) animation(spans[1]);
	   if (minutes == 0 && seconds == 0) animation(spans[0]);
 
	}, 1000);
 }
 
 jam();
 