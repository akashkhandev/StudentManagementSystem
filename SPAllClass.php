<!DOCTYPE html>
<html>
<body>
<?php

$enrollnum = $datemonth = $dateyear = $classname = $section = $att_per = $ca_per = $behaviour = $qmr_per = $cca_per = $remarks = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
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
		$enString = 'ClassName="'.$classname.'" AND Section="'.$section.'" AND DateMonth="'.$datemonth.'" AND DateYear="'.$dateyear.'"';
		$db->select('studentperformance','EnrollmentNumber, DateMonth, DateYear, ClassName, Section, Att_Per, CA_Per, Behaviour, QMR_Per, CCA_Per, Remarks',NULL, $enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
		$res = $db->getResult();
		//print_r($res2);
		
		
		if (count($res) > 0) {
			
			$datemonth = $res[0]["DateMonth"];
			if($datemonth<10){
				$datemonth = "0".$datemonth;
			}
			echo "<h5>Class: ".$res[0]["ClassName"]."</h5><h5>Section: ".$res[0]["Section"]."</h5><h5>Month: ".$datemonth."/".$res[0]["DateYear"]."</h5><br><br>";
			echo "<table class='pure-table pure-table-bordered'><thead><tr><th>S. No.</th><th>Enrollment Number</th><th>Name</th><th>Attendance Performance</th><th>Class Activity Performance</th><th>Behaviour</th><th>Quiz/Monthly Result Performance</th><th>Co-Curricular Activities Performance</th><th>Remarks</th></tr>";
			
			for($x = 0; $x < count($res); $x++) {
				
				$enString = 'EnrollmentNumber="'.$res[$x]["EnrollmentNumber"].'"';
				$db->select('studentdata','EnrollmentNumber,FirstName,MiddleName,LastName',NULL,$enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
				$res2 = $db->getResult();
				
				$name = "";
				if(count($res2)>0){
					if(empty($res2[0]["MiddleName"])){
						$name = $res2[0]["FirstName"]." ".$res2[0]["LastName"];
					}
					else{
						$name = $res2[0]["FirstName"]." ".$res2[0]["MiddleName"]." ".$res2[0]["LastName"];
					}
				}
				
				echo "</thead><tr><tbody>";
				$num = $x + 1;
				echo "<td>".$num."</td><td>".$res[$x]["EnrollmentNumber"]."</td><td>".$name."</td><td>".$res[$x]["Att_Per"]."</td><td>".$res[$x]["CA_Per"]."</td><td>".$res[$x]["Behaviour"]."</td><td>".$res[$x]["QMR_Per"]."</td><td>".$res[$x]["CCA_Per"]."</td><td>".$res[$x]["Remarks"]."</td>";
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

</html>
</body>