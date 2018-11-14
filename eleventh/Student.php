
<?php 

	class Student
	{		
		public $pdoConnection ;

		function __construct()
		{
			try{
			$this->pdoConnection = new PDO('mysql:host=localhost;dbname=dbuniversity','root','');	
			}
			catch(PDOException  $pdo){
				echo "Error:".$pdo->getMessage();
				die();
			}
		}
		
		function getSingleStudent($id)
		{
			$ID=$id;
			$sql= "select * from tblstudent where Id='{$ID}'";
			$stmt = $this->pdoConnection->query($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$row=$stmt->fetch();
			return $row;
			
		}

		
		function getAllStudent()
		{			
			$stmt = $this->pdoConnection->query("select * from tblstudent");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$rows = $stmt->fetchAll();
			return $rows;			
		}
	}
?>