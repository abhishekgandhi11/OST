<?php
spl_autoload_register();		
class StudentHandler extends SimpleRest {

	
	function getAllStudent() {	

		$stud = new Student();
		$rawData = $stud->getAllStudent();
		
		$statusCode=200;
		$requestContentType =$_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = json_encode($rawData);
			echo $response;
		}
	}
	
	
	public function getStudent($id) {

		$stud = new Student();
		$rawData = $stud->getSingleStudent($id);
		$statusCode=200;
		$requestContentType =$_SERVER['HTTP_ACCEPT'];
		$this->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = json_encode($rawData);
			echo $response;
		}
	}
}
?>