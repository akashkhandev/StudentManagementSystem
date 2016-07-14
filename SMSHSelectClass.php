<html>
<body>


<?php

$enrollnum = $phydis = $anydis = $tre = $tresch = $classname = $section = "";
 $age = $height = $weight = 0;
 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (empty($_POST["classname"])) {
			$classnameErr = "Class is required";
		} else {
			$classname = test_input($_POST["classname"]);
		}
  
		if (empty($_POST["section"])) {
			$sectErr = "";
		} else {
			$section = test_input($_POST["section"]);
		}

	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$enString = 'ClassName="'.$classname.'" AND Section="'.$section.'"';
	$db->select('studentdata','EnrollmentNumber',NULL,$enString,'ClassID ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
	$res = $db->getResult();
	//print_r($res);

	if(count($res)>0){
		
		echo "<table class='pure-table'><thead><tr><th>Enrollment Number</th><th>Age</th><th>Height</th><th>Weight</th><th>Physical Disablility</th><th>Any Disease</th><th>Medical Treatment</th><th>Medical Treatment in School</th></tr>";
		for($x = 0; $x < count($res); $x++) {
			
			$enString = 'EnrollmentNumber="'.$res[$x]["EnrollmentNumber"].'"';
			$db->select('healthinformation','EnrollmentNumber,Age,Height,Weight,PhysicalDisablility,AnyDisease,MedicalTreatment,MedicalTreatmentinschool',NULL,$enString,'Id ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
			$res2 = $db->getResult();
			//print_r($res2);
			if(count($res2)>0){
				echo "</thead><tr><tbody>";
				echo "<td>".$res2[0]["EnrollmentNumber"]."</td><td>".$res2[0]["Age"]."</td><td>".$res2[0]["Height"]."</td><td>".$res2[0]["Weight"]."</td><td>".$res2[0]["PhysicalDisablility"]."</td><td>".$res2[0]["AnyDisease"]."</td><td>".$res2[0]["MedicalTreatment"]."</td><td>".$res2[0]["MedicalTreatmentinschool"]."</td>";
				echo "</tr></tbody>";
			}
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