<html>
<body>


<?php

$enrollnum = $phydis = $anydis = $tre = $tresch = "";
 $age = $height = $weight = 0;
 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (empty($_POST["enrollnum"])) {
    $enrollnumErr = "Enroll. Number is required";
  } else {
    $enrollnum = test_input($_POST["enrollnum"]);
  }

	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$enString = 'EnrollmentNumber="'.$enrollnum.'"';
	$db->select('healthinformation','EnrollmentNumber,Age,Height,Weight,PhysicalDisablility,AnyDisease,MedicalTreatment,MedicalTreatmentinschool',NULL,$enString,'Id ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
	$res = $db->getResult();
	//print_r($res);

	if(count($res)>0){
		
		echo "<table class='pure-table'><thead><tr><th>Enrollment Number</th><th>Age</th><th>Height</th><th>Weight</th><th>Physical Disablility</th><th>Any Disease</th><th>Medical Treatment</th><th>Medical Treatment in School</th></tr>";
		for($x = 0; $x < count($res); $x++) {
			echo "</thead><tr><tbody>";
			echo "<td>".$res[$x]["EnrollmentNumber"]."</td><td>".$res[$x]["Age"]."</td><td>".$res[$x]["Height"]."</td><td>".$res[$x]["Weight"]."</td><td>".$res[$x]["PhysicalDisablility"]."</td><td>".$res[$x]["AnyDisease"]."</td><td>".$res[$x]["MedicalTreatment"]."</td><td>".$res[$x]["MedicalTreatmentinschool"]."</td>";
			echo "</tr></tbody>";
			//print "Hello table!";
		}
		echo "</table>";
 
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


</body>
</html>