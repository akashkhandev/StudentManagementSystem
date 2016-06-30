<html>
<body>
<?php

$enrollnumErr = "";
$enrollnum = $sname = $sect = $classname = $tname = "";
$sub1; $tsub1; $sub2; $tsub2; $sub3; $tsub3; $sub4; $tsub4; $sub5; $tsub5;
$examdate;

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
		$enrollnum1 = 3;
		$enString = 'EnrollmentNumber="'.$enrollnum.'"';
		//print($enString);
		$db->select('studentresult','EnrollmentNumber, SName, Class, Section, ExamDate, TName, Sub1, TSub1, Sub2, TSub2, Sub3, TSub3, Sub4, TSub4, Sub5, TSub5',NULL, $enString,'id DESC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
		$res = $db->getResult();
		//print_r($res);
		}
		if (count($res) > 0) {
	
			$enrollnum = $res[0]['EnrollmentNumber'];
			$sname = $res[0]['SName'];
			$classname = $res[0]['Class'];
			$sect = $res[0]['Section'];
			$examdate = $res[0]['ExamDate'];
			$tname = $res[0]['TName'];
			$sub1 = $res[0]['Sub1'];
			$tsub1 = $res[0]['TSub1'];
			$sub2 = $res[0]['Sub2'];
			$tsub2 = $res[0]['TSub2'];
			$sub3 = $res[0]['Sub3'];
			$tsub3 = $res[0]['TSub3'];
			$sub4 = $res[0]['Sub4'];
			$tsub4 = $res[0]['TSub4'];
			$sub5 = $res[0]['Sub5'];
			$tsub5 = $res[0]['TSub5'];
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