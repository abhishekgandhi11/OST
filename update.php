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
								<h2>Update Student Record</h2> 
								<br><br>
								<div class=""form-group>
									<label for="rollno">Roll No:</label>
									<input type="text" class="form-control" name="rno">
								</div><br>
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
								<button type="submit" name="submit" class="btn btn-block btn-success" data-toggle="tooltip" title="For Deleting Record" >Update</button><br><br>
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
	if(isset($_POST['submit'])){
		$rno=intval($_POST["rno"]);
		$name=$_POST["name"];
		$sem=intval($_POST["semester"]);
		$marks=intval($_POST["marks"]);
		try{
		$sql = "update stud set name='$name',semester=$sem,marks=$marks where rollno=$rno";
		$conn->exec($sql);
		echo "Record Updated...";	
		}
		catch(PDOException $e){
			echo $echo . "<br>" . $e->getMessage();
		}
	}

	
?>