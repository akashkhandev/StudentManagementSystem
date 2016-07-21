<!DOCTYPE html>
<html>
<body>
<?php

$enrollnum = $datemonth = $dateyear = $classname = $section = $att_per = $ca_per = $behaviour = $qmr_per = $cca_per = $remarks = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (empty($_POST["enrollnum"])) {
			$enrollnumErr = "Enroll num. is required";
		} else {
			$enrollnum = test_input($_POST["enrollnum"]);
		}

		include('class/mysql_crud.php');
		$db = new Database();
		$db->connect();
		$enString = 'EnrollmentNumber="'.$enrollnum.'"';
		$db->select('studentperformance','EnrollmentNumber, DateMonth, DateYear, ClassName, Section, Att_Per, CA_Per, Behaviour, QMR_Per, CCA_Per, Remarks',NULL, $enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
		$res = $db->getResult();
		//print_r($res2);
		
		
		if (count($res) > 0) {
			
			$datemonth = $res[0]["DateMonth"];
			if($datemonth<10){
				$datemonth = "0".$datemonth;
			}
			echo "<h5>Enrollment Number".$res[0]["EnrollmentNumber"]."</h5><br><br>";
			echo "<table class='pure-table pure-table-bordered'><thead><tr><th>S. No.</th><th>Class</th><th>Section</th><th>Month</th><th>S. No.</th><th>Attendance Performance</th><th>Class Activity Performance</th><th>Behaviour</th><th>Quiz/Monthly Result Performance</th><th>Co-Curricular Activities Performance</th><th>Remarks</th></tr>";
			
			for($x = 0; $x < count($res); $x++) {
				echo "</thead><tr><tbody>";
				$num = $x + 1;
				echo "<td>".$num."</td><td>".$res[$x]["ClassName"]."</td><td>".$res[$x]["Section"]."</td><td>".$datemonth."/".$res[$x]["DateYear"]."</td><td>".$res[$x]["Att_Per"]."</td><td>".$res[$x]["CA_Per"]."</td><td>".$res[$x]["Behaviour"]."</td><td>".$res[$x]["QMR_Per"]."</td><td>".$res[$x]["CCA_Per"]."</td><td>".$res[$x]["Remarks"]."</td>";
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