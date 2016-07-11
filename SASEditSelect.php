<html>
<body>
<?php


$dateErr = $enrollnumErr = $statusErr = $reasonErr = "";
$enrollnum = $status = $reason = "";
$dateToday;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["enrollnum"])) {
			$enrollnumErr = "Enrollment Number is required";
		}else {
			$enrollnum = test_input($_POST["enrollnum"]);
		}
		if (empty($_POST["dateToday"])) {
			$dateTodayErr = "Date is required";
		}else {
			$dateToday = test_input($_POST["dateToday"]);
		}
  
		if(!empty($enrollnum))
		{

		include('class/mysql_crud.php');
		$db = new Database();
		$db->connect();
		$enString = 'EnrollmentNumber="'.$enrollnum.'" AND DateToday="'.$dateToday.'"';
		$db->select('studentattendance','DateToday, EnrollmentNumber, Status, Reason',NULL, $enString,'Id DESC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
		$res = $db->getResult();
		//print_r($res);
		}
		if (count($res) > 0) {
	
			$dateToday = $res[0]['DateToday'];
			$enrollnum = $res[0]['EnrollmentNumber'];
			$status = $res[0]['Status'];
			$reason = $res[0]['Reason'];
			
			$_SESSION['enrollnum'] = $enrollnum;
			$_SESSION['dateToday'] = $dateToday;
		}
		else{
			die("Data not found");
		}
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