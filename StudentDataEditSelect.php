<html>
<body>
<?php

	$enrollnumErr = $firstnameErr = $middlenameErr = $lastnameErr = $fathernameErr = $genderErr = $dobErr = $add_preErr = $add_perErr = $religionErr = $sectErr = $hafizErr = $castErr = $subcastErr = "";
	$enrollnum = $firstname = $middlename = $lastname = $fathername = $gender = $add_pre = $add_per = $religion = $sect = $hafiz = $cast = $subcast = "";
	$dob;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["enrollnum"])) {
			$enrollnumErr = "Enrollment Number is required";
		}else {
			$enrollnum = test_input($_POST["enrollnum"]);
		}
  
		if(!empty($enrollnum))
		{

			include('class/mysql_crud.php');
			$db = new Database();
			$db->connect();
			$enString = 'EnrollmentNumber="'.$enrollnum.'"';
			$db->select('studentdata','EnrollmentNumber,FirstName,MiddleName,LastName,FatherName,Gender,DateOfBirth,Address_Present,Address_Permanant,Religion,Sect,HafizeQuran,Cast,SubCast',NULL, $enString,'ClassID DESC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
			$res = $db->getResult();
			//print_r($res);
		}
		if (count($res) > 0) {
	
			$enrollnum = $res[0]['EnrollmentNumber'];
			$firstname = $res[0]['FirstName'];
			$middlename = $res[0]['MiddleName'];
			$lastname = $res[0]['LastName'];
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