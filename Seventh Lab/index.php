<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ajex Testing </title>
	<script>
	
		function getASynchronous()
		{
			req = null;
			req = new XMLHttpRequest();
			req.open("GET","test.php",true);
			req.send();
			req.onreadystatechange = function () {
				if(req.readyState == 4 && req.status == 200)
				{
					document.getElementById("div1").innerHTML = req.responseText;
				}
			}
		}
		
		/*
		function getSynchronous()
		{
			req = null;
			req = new XMLHttpRequest();
			req.open("GET","test.php",false);
			req.send();
			alert(req.responseText);
		}
		*/
		
	</script>
</head>
<body>
	<button onclick="getASynchronous()">Click Me</button>
	<div id="div1"><div>
</body>
</html>