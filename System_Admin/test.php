<html>
	<body onload="updateClock()">
		<p>Current Server Time:</p> <p id="servertime"></p>
	</body>
</html>
	
<script type="text/javascript">
	
	var updateClock  = function() {
		function pad(n) {
			return (n < 10) ? '0' + n : n;
		}

		var now = new Date();
		var hour = pad(now.getUTCHours()+8);
		var min = pad(now.getUTCMinutes());
		var newHour = hour;
		var ampm = "AM";

		if(hour >= 12){
			newHour = hour-12;
			ampm = "PM";
		}
		if(newHour == 0){
			newhour = 12;
		}

		var s = newHour + ":" + min + " " + ampm;

		document.getElementById('servertime').innerHTML = s;

		var delay = 1000 - (now % 1000);
		setTimeout(updateClock, delay);
	};
	
</script>

