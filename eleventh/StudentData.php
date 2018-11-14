<!DOCTYPE html>
<html lang="en">
<head>
    <title>Getting the Student data</title>
	<script>
		function getASynchronous()
		{
			req = null;
			req = new XMLHttpRequest();
			
			req.open("GET","http://localhost/Sem_Fourth_practical/eleventh/StudentController.php?view=all",true);
			req.setRequestHeader("Accept", "application/json");
			req.send();
			req.onreadystatechange = function () {
				if(req.readyState == 4 && req.status == 200)
				{
					document.getElementById("div1").innerHTML = req.responseText;
					var obj = JSON.parse(req.responseText);
					
				}
			}
		}
	</script>
</head>
<body>
	<button onclick="getASynchronous()">GET JSON</button>
	<div id="div1"><div>
</body>
</html>