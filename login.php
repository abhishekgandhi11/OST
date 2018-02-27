<html>
	<head>
		<title>Home->Insert</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	</head>
	<body>
		<form method="POST" action="#">
			<div class="container" name="main _div" border="">
				<div class="" name="header">
					<div class="row">
						<div class="col-md-8">
							<h2 class="display-4"><b>Student Information System</b></h2>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-2">Log-In</div>
					</div>
				</div>
					<div class="row">
						<div class="col-md-3">	
						</div>
						<div class="col-md-6">
						</div>
						<div class="col-md-3">
						</div>
					</div>
					<div class="jumbotron" name="third_div">
						<div class="row">
							<div class="col-md-3">
							</div>
							<div class="col-md-6">
								<h2>Log-In</h2> 
								<br><br>
								<div class="form-group">
									<label for="name">User Name:</label>
									<input type="text" class="form-control" name="usrname">
								</div>
								<div class="form-group">
									<label for="password">Password:</label>
									<input type="text" class="form-control" name="pwd">
								</div>
								<!--<div class="form-group">
									<input type="checkbox" name="ck" class=""> Save as cookie
									<br>
								</div>-->
								<button type="submit" name="submit" class="btn btn-success btn-block" data-toggle="tooltip" title="Login from here" >LOG-IN </button><br><br>
								</div>
								<div class="col-md-3">
						</div>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>

<?php
	session_start();
	echo "before";
	if(isset($_POST['submit']))
	{
		//echo "inside if condition";
		$_SESSION["s_username"]=$_POST["usrname"];
		$_SESSION["s_pwd"]=$_POST["pwd"];
		header('Location: index.php');
	}
	else{
		echo "fail";
	}
?>