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
								<h2>Delete Student Record</h2> 
								<br><br>
								<div class="form-group">
									<label for="rollno">Roll No:</label>
									<input type="text" class="form-control" name="rno">
								</div><br>
								<button type="submit" name="submit" class="btn btn-block btn-danger" data-toggle="tooltip" title="For Inserting Record" >Delete</button><br><br>
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
		$rno=intval($_POST['rno']);
		try{
			$sql = "delete from stud where rollno=$rno";
			$conn->exec($sql);
			echo "Record Deleted...";	
		}
		catch(PDOException $e){
			echo $echo . "<br>" . $e->getMessage();
		}
	}
?>