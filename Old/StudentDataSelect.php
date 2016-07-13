<html>
<body>


<?php

$name = $fname = $age = $nationality = $address = $city = $contact = $email = $classname = $section = "";


	include('../class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$db->select('studentdata','EnrollmentNumber,FirstName,MiddleName,LastName,FatherName,Gender,DateOfBirth,Address_Present,Address_Permanant,Religion,Sect,HafizeQuran,Cast,SubCast,ClassName,Section',NULL,NULL,'ClassID ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
	$res = $db->getResult();
	//print_r($res);

	if(count($res)>0){
		
		echo "<table class='pure-table'><thead><tr><th>Enrollment Number</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Father's Name</th><th>Gender</th><th>Date of Birth</th><th>Address Present</th><th>Address Permanant</th><th>Religion</th><th>Sect</th><th>Hafiz-e-Quran</th><th>Cast</th><th>SubCast</th><th>Class</th><th>Section</th></tr>";
		for($x = 0; $x < count($res); $x++) {
			echo "</thead><tr><tbody>";
			echo "<td>".$res[$x]["EnrollmentNumber"]."</td><td>".$res[$x]["FirstName"]."</td><td>".$res[$x]["MiddleName"]."</td><td>".$res[$x]["LastName"]."</td><td>".$res[$x]["FatherName"]."</td><td>".$res[$x]["Gender"]."</td><td>".$res[$x]["DateOfBirth"]."</td><td>".$res[$x]["Address_Present"]."</td><td>".$res[$x]["Address_Permanant"]."</td><td>".$res[$x]["Religion"]."</td><td>".$res[$x]["Sect"]."</td><td>".$res[$x]["HafizeQuran"]."</td><td>".$res[$x]["Cast"]."</td><td>".$res[$x]["SubCast"]."</td><td>".$res[$x]["ClassName"]."</td><td>".$res[$x]["Section"]."</td>";
			echo "</tr></tbody>";
			//print "Hello table!";
		}
		echo "</table>";
 
	}else { 
		die("Data not found");
	}
?>


</body>
</html>