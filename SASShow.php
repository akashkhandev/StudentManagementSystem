<!DOCTYPE html>
<html>
<body>

<?php

$enrollnum = $datemonth = $dateyear = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["enrollnum"])) {
		}else {
			$enrollnum = test_input($_POST["enrollnum"]);
		}
		
		if (empty($_POST["datemonth"])) {
		}else {
			$datemonth = test_input($_POST["datemonth"]);
		}
		
		if (empty($_POST["dateyear"])) {
		}else {
			$dateyear = test_input($_POST["dateyear"]);
		}

	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$enString = 'EnrollmentNumber="'.$enrollnum.'" AND month(DateToday)="'.$datemonth.'" AND year(DateToday)="'.$dateyear.'"';
	//print_r($enString);
	$db->select('studentattendance','EnrollmentNumber, DateToday, Status, Reason',NULL,$enString,'DateToday ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
	$res = $db->getResult();
	$enString = 'EnrollmentNumber="'.$enrollnum.'"';
	$db->select('studentdata','FirstName, MiddleName, LastName',NULL,$enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
	$resName = $db->getResult();
	//print_r($res);

	if(count($res)>0){
		echo "<h5>EnrollmentNumber: ".$enrollnum."</h5>";
		if(count($resName)>0){
		if(empty($resName[0]["MiddleName"])){
			echo "<h5>Name: ".$resName[0]["FirstName"]." ".$resName[0]["MiddleName"]." ".$resName[0]["LastName"]."</h5>";
		}
		else{
			echo "<h5>Name: ".$resName[0]["FirstName"]." ".$resName[0]["LastName"]."</h5>";
		}
		}
		echo "<br><br><table class='pure-table'><thead><tr><th>S. No.</th><th>Date</th><th>Status</th><th>Reason</th></tr>";
		for($x = 0; $x < count($res); $x++) {
			$num = $x + 1;
			echo "</thead><tbody><tr>";
			echo "<td>".$num."</td><td>".$res[$x]["DateToday"]."</td><td>".$res[$x]["Status"]."</td><td>".$res[$x]["Reason"]."</td>";
			echo "</tr></tbody>";
			//print "Hello table!";
		}
		echo "</table>";
 
	}else {
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


</body>
</html>