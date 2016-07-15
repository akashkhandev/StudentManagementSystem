<html>
<body>
<?php

$enrollnum = $phydis = $anydis = $tre = $tresch = "";
 $age = $height = $weight = 0;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["enrollnum"])) {
		}else {
			$enrollnum = test_input($_POST["enrollnum"]);
		}

			include('class/mysql_crud.php');
			$db = new Database();
			$db->connect();
			$enString = 'EnrollmentNumber="'.$enrollnum.'"';
			$db->select('healthinformation','EnrollmentNumber,Age,Height,Weight,PhysicalDisablility,AnyDisease,MedicalTreatment,MedicalTreatmentinschool',NULL, $enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
			$res = $db->getResult();
			//print_r($res);
			
		if (count($res) > 0) {
	
			$enrollnum = $res[0]['EnrollmentNumber'];
			$age = $res[0]['Age'];
			$height = $res[0]['Height'];
			$weight = $res[0]['Weight'];
			$phydis = $res[0]['PhysicalDisablility'];
			$anydis = $res[0]['AnyDisease'];
			$tre = $res[0]['MedicalTreatment'];
			$tresch = $res[0]['MedicalTreatmentinschool'];
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