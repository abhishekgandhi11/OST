<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	</head>
	<body>
		<form method="post">
			<div class="container" name="main _div" border="">
				<div class="" name="header">
					<div class="row">
						<div class="col-md-8">
							<h2 class="display-4"><b>Student Information System</b></h2>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-2">Home</div>
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
								<h2>Select any button to perform</h2> 
								<br><br>
								<button type="submit" formaction="insert.php"  class="btn btn-info btn-block" data-toggle="tooltip" title="For Inserting Record" >Insert</button><br><br>
								<button type="submit" formaction="update.php" class="btn btn-success btn-block" data-toggle="tooltip" title="For Updating Record">Update</button><br><br>
								<button type="submit" formaction="delete.php" class="btn btn-danger btn-block" data-toggle="tooltip" title="For Deleting Record">Delete</button><br><br>
								<button type="submit" name="submit" class="btn btn-danger btn-block" data-toggle="tooltip" title="Log out from Here">Log-out</button><br><br>								</div>
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
	if($_SESSION["s_username"]==NULL && $_SESSION["s_pwd"]==NULL){
		header('Location: login.php');
	}
	else{
		
	}
	if(isset($_POST['submit'])){
		session_destroy();
		header('Location: logout.php');
	}
?>