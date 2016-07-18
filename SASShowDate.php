<html>
<head>
</head>
<body>

<?php

$dateToday = $classname = $section = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["dateToday"])) {
		}else {
			$dateToday = test_input($_POST["dateToday"]);
		}
		
		if (empty($_POST["classname"])) {
		} else {
			$classname = test_input($_POST["classname"]);
		}
  
		if (empty($_POST["section"])) {
		} else {
			$section = test_input($_POST["section"]);
		}

	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$enString = 'DateToday="'.$dateToday.'" AND ClassName="'.$classname.'" AND Section="'.$section.'"';
	$db->select('studentattendance','EnrollmentNumber, DateToday, Status, Reason, ClassName, Section',NULL,$enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
	$res = $db->getResult();
	//print_r($res);

	if(count($res)>0){
		echo "<h3>Date: ".$dateToday."</h3>"."<h3>Class: ".$classname."</h3>"."<h3>Section: ".$section."</h3>";
		
		echo "<br><br><br><table class='pure-table'><thead><tr><th>Enrollment Number</th><th>Status</th><th>Reason</th></tr></thead>";
		for($x = 0; $x < count($res); $x++) {
			echo "<tbody><tr>";
			echo "<td>".$res[$x]["EnrollmentNumber"]."</td><td>".$res[$x]["Status"]."</td><td>".$res[$x]["Reason"]."</td>";
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