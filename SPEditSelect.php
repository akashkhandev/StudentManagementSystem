<html>
<body>
<?php

$enrollnum = $datemonth = $dateyear = $classname = $section = $att_per = $ca_per = $behaviour = $qmr_per = $cca_per = $remarks = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
	if (empty($_POST["enrollnum"])) {
  } else {
    $enrollnum = test_input($_POST["enrollnum"]);
  }
  
  if (empty($_POST["datemonth"])) {
  } else {
    $datemonth = test_input($_POST["datemonth"]);
  }
  
  if (empty($_POST["dateyear"])) {
  } else {
    $dateyear = test_input($_POST["dateyear"]);
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
		$enString = 'EnrollmentNumber="'.$enrollnum.'" AND ClassName="'.$classname.'" AND Section="'.$section.'" AND datemonth="'.$datemonth.'" AND dateyear="'.$dateyear.'"';
		$db->select('studentperformance','EnrollmentNumber, DateMonth, DateYear, ClassName, Section, Att_Per, CA_Per, Behaviour, QMR_Per, CCA_Per, Remarks',NULL, $enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
		$res = $db->getResult();
		//print_r($enString);
		//print_r($res);
		
		if (count($res) > 0) {
	
			$enrollnum = $res[0]['EnrollmentNumber'];
			$datemonth = $res[0]['DateMonth'];
			$dateyear = $res[0]['DateYear'];
			$classname = $res[0]['ClassName'];
			$section = $res[0]['Section'];
			$att_per = $res[0]['Att_Per'];
			$ca_per = $res[0]['CA_Per'];
			$behaviour = $res[0]['Behaviour'];
			$qmr_per = $res[0]['QMR_Per'];
			$cca_per = $res[0]['CCA_Per'];
			$remarks = $res[0]['Remarks'];
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