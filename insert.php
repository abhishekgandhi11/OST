<html>
	<head>
		<title>Home->Insert</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	</head>
	<body>
		<form method="post" action="#">
			<div class="container" name="main _div" border="">
				<div class="" name="header">
					<div class="row">
						<div class="col-md-8">
							<h2 class="display-4"><b>Student Information System</b></h2>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-2">Home / Insert</div>
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
								<h2>Insert Student Record</h2> 
								<br><br>
								<div class=""form-group>
									<label for="name">Name:</label>
									<input type="text" class="form-control" name="name">
								</div><br>
								<div class=""form-group>
									<label for="semester">Semester:</label>
									<input type="text" class="form-control" name="semester">
								</div><br>
								<div class=""form-group>
									<label for="marks">Marks:</label>
									<input type="text" class="form-control" name="marks">
								</div><br><br>
								<button type="submit" name="submit" class="btn btn-info btn-block" data-toggle="tooltip" title="For Inserting Record" >Insert</button><br><br>
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
	require_once('studentinfodatabase.php');
	
	if(isset($_POST['submit']))
	{
		$name=$_POST["name"];
		$sem=$_POST["semester"];
		$marks=$_POST["marks"];
		try
		{
		$sql = "insert into stud (name,semester,marks) values('$name',$sem,$marks)";
		$conn->exec($sql);
		echo "Record Inserted...";	
		}
		catch(PDOException $e){
		echo $echo . "<br>" . $e->getMessage();
		}	
	}
	
	
?>