<!DOCTYPE html>
<html>
<body>
<?php

$enrollnumErr = "";
$enrollnum = $sect = $classname = $tname = "";
$sub1 = $tsub1 = $sub2 = $tsub2 = $sub3 = $tsub3 = $sub4 = $tsub4 = $sub5 = $tsub5 = 0;
$examdate;

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
		$db->select('studentresult','EnrollmentNumber, Class, Section, Term, ExamDate, TName, Sub1, TSub1, Sub2, TSub2, Sub3, TSub3, Sub4, TSub4, Sub5, TSub5',NULL, $enString,'ExamDate DESC,Term ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
		$res = $db->getResult();
		//print_r($res2);
		
		
		if (count($res) > 0) {
			echo "<h5>Enrollment Number: ".$res[0]["EnrollmentNumber"]."</h5><br><br><br>";
			echo "<table class='pure-table pure-table-bordered'><thead><tr><th>S. No.</th><th>Class</th><th>Section</th><th>Term</th><th>Examination Year</th><th>Teacher's Name</th><th>Subject 1</th><th>Total Subject 1</th><th>Subject 2</th><th>Total Subject 2</th><th>Subject 3</th><th>Total Subject 3</th><th>Subject 4</th><th>Total Subject 4</th><th>Subject 5</th><th>Total Subject 5</th></tr>";
		
			for($x = 0; $x < count($res); $x++) {
				echo "</thead><tr><tbody>";
				$num = $x + 1;
				echo "<td>".$num."</td><td>".$res[$x]["Class"]."</td><td>".$res[$x]["Section"]."</td><td>".$res[$x]["Term"]."</td><td>".$res[$x]["ExamDate"]."</td><td>".$res[$x]["TName"]."</td><td>".$res[$x]["Sub1"]."</td><td>".$res[$x]["TSub1"]."</td><td>".$res[$x]["Sub2"]."</td><td>".$res[$x]["TSub2"]."</td><td>".$res[$x]["Sub3"]."</td><td>".$res[$x]["TSub3"]."</td><td>".$res[$x]["Sub4"]."</td><td>".$res[$x]["TSub4"]."</td><td>".$res[$x]["Sub5"]."</td><td>".$res[$x]["TSub5"]."</td>";
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