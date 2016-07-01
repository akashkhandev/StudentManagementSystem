<html>
<head>
</head>
<body>

<?php

$dateToday = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["dateToday"])) {
			$dateTodayErr = "Date is required";
		}else {
			$dateToday = test_input($_POST["dateToday"]);
		}

	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$enString = 'DateToday="'.$dateToday.'"';
	$db->select('studentattendance','EnrollmentNumber, DateToday, Status, Reason',NULL,$enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
	$res = $db->getResult();
	//print_r($res);

	if(count($res)>0){
		echo "<h3>Date:".$dateToday."</h3>";
		}
		echo "<br><br><br><table class='pure-table'><thead><tr><th>Date</th><th>Status</th><th>Reason</th></tr></thead>";
		for($x = 0; $x < count($res); $x++) {
			echo "<tbody><tr>";
			echo "<td>".$res[$x]["EnrollmentNumber"]."</td><td>".$res[$x]["Status"]."</td><td>".$res[$x]["Reason"]."</td>";
			echo "</tr></tbody>";
			//print "Hello table!";
		}
		echo "</table>";
 
	}else {
		echo "0 results";
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