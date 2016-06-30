<!DOCTYPE html>
<html>
<body>

<?php
$enrollnumErr = "";
$enrollnum = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["enrollnum"])) {
			$enrollnumErr = "Enrollment Number is required";
		}else {
			$enrollnum = test_input($_POST["enrollnum"]);
		}

	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$enString = 'EnrollmentNumber="'.$enrollnum.'"';
	$db->select('studentattendance','EnrollmentNumber, DateToday, Status, Reason',NULL,$enString,'DateToday ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
	$res = $db->getResult();
	$db->select('studentdata','FirstName, MiddleName, LastName',NULL,$enString,'ClassID ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
	$resName = $db->getResult();
	//print_r($res);

	if(count($res)>0){
		echo "<h3>EnrollmentNumber: ".$enrollnum."</h3>";
		if(count($resName)>0){
		if(empty($resName[0]["MiddleName"])){
			echo "<h3>Name: ".$resName[0]["FirstName"]." ".$resName[0]["MiddleName"]." ".$resName[0]["LastName"]."</h3>";
		}
		else{
			echo "<h3>Name: ".$resName[0]["FirstName"]." ".$resName[0]["LastName"]."</h3>";
		}
		}
		echo "<table><tr><th>Date</th><th>Status</th><th>Reason</th></tr>";
		for($x = 0; $x < count($res); $x++) {
			echo "<tr>";
			echo "<td>".$res[$x]["DateToday"]."</td><td>".$res[$x]["Status"]."</td><td>".$res[$x]["Reason"]."</td>";
			echo "</tr>";
			//print "Hello table!";
		}
		echo "</table>";
 
	}else {
		echo "0 results";
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