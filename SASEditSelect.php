<html>
<body>
<?php

$enrollnum = $status = $reason = $classname = $section = "";
$dateToday;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["enrollnum"])) {
		}else {
			$enrollnum = test_input($_POST["enrollnum"]);
		}
		if (empty($_POST["dateToday"])) {
		}else {
			$dateToday = test_input($_POST["dateToday"]);
		}

	try{
		include('class/mysql_crud.php');
		$db = new Database();
		$db->connect();
		$enString = 'EnrollmentNumber="'.$enrollnum.'" AND DateToday="'.$dateToday.'"';
		$db->select('studentattendance','DateToday, EnrollmentNumber, Status, Reason,ClassName,Section',NULL, $enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
		$res = $db->getResult();
		//print_r($res);
		
  }
  catch(Exception $e) {
	echo $e->getMessage();
	}
}
		if (count($res) > 0) {
	
			$dateToday = $res[0]['DateToday'];
			$enrollnum = $res[0]['EnrollmentNumber'];
			$status = $res[0]['Status'];
			$reason = $res[0]['Reason'];
			$classname = $res[0]['ClassName'];
			$section = $res[0]['Section'];
			
			$_SESSION['enrollnum'] = $enrollnum;
			$_SESSION['dateToday'] = $dateToday;
		}
		else{
			die("Data not found");
		}
		
	
	
	

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>

</html>
</body>