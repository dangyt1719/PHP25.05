<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<script type="text/javascript">
			var counter=0;
		function timer()
		{
			 
			counter++;
			
			document.getElementById("count").innerHTML=counter;
			setTimeout("timer()",1000);
		xmlhttp.open("GET","index.php?counter="+counter,true);
		xmlhttp.send("GET","index.php?counter="+counter);
		window.location.href = 'index.php?counter'+counter
		}
		
});

		</script>
		<script src="form1.json"></script>
</head>
<body onload="timer()">
	Секунд прошло <span id="count">-1</span>

</body>

</html>