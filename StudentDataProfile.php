<html>
<body>
<?php

	$enrollnum = $firstname = $middlename = $lastname = $fathername = $gender = $add_pre = $add_per = $religion = $sect = $hafiz = $cast = $subcast = $classname = $section = "";
	$dob;
	$phydis = $anydis = $tre = $tresch = $sname = "";
	$age = $height = $weight = 0;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["enrollnum"])) {
		}else {
			$enrollnum = test_input($_POST["enrollnum"]);
		}
  
		if(!empty($enrollnum))
		{

			include('class/mysql_crud.php');
			$db = new Database();
			$db->connect();
			$enString = 'EnrollmentNumber="'.$enrollnum.'"';
			$db->select('studentdata','EnrollmentNumber,FirstName,MiddleName,LastName,FatherName,Gender,DateOfBirth,Address_Present,Address_Permanant,Religion,Sect,HafizeQuran,Cast,SubCast,ClassName,Section',NULL, $enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
			$res = $db->getResult();
			$db->select('healthinformation','EnrollmentNumber,Age,Height,Weight,PhysicalDisablility,AnyDisease,MedicalTreatment,MedicalTreatmentinschool',NULL,$enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
			$res2 = $db->getResult();
			//print_r($res);
		}
		if (count($res) > 0) {
	
			$enrollnum = $res[0]['EnrollmentNumber'];
			if(empty($res[0]['MiddleName'])){
				$sname = $res[0]['FirstName']." ".$res[0]['LastName'];;
			}
			else{
				$sname = $res[0]['FirstName']." ".$res[0]['MiddleName']." ".$res[0]['LastName'];;
			}
			$fathername = $res[0]['FatherName'];
			$gender = $res[0]['Gender'];
			$dob = $res[0]['DateOfBirth'];
			$add_pre = $res[0]['Address_Present'];
			$add_per = $res[0]['Address_Permanant'];
			$religion = $res[0]['Religion'];
			$sect = $res[0]['Sect'];
			$hafiz = $res[0]['HafizeQuran'];
			$cast = $res[0]['Cast'];
			$subcast = $res[0]['SubCast'];
			$classname = $res[0]['ClassName'];
			$section = $res[0]['Section'];
			
			if (count($res2) > 0) {
				$age = $res2[0]['Age'];
				$height = $res2[0]['Height'];
				$weight = $res2[0]['Weight'];
				$phydis = $res2[0]['PhysicalDisablility'];
				$anydis = $res2[0]['AnyDisease'];
				$tre = $res2[0]['MedicalTreatment'];
				$tresch = $res2[0]['MedicalTreatmentinschool'];
			}
			else{
				$age = NULL;
				$height = NULL;
				$weight = NULL;
				$phydis = NULL;
				$anydis = NULL;
				$tre = NULL;
				$tresch = NULL;
			}
			
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