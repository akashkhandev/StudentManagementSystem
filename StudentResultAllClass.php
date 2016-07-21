<!DOCTYPE html>
<html>
<body>
<?php

$enrollnum = $sname = $sect = $classname = $tname = "";
$sub1 = $tsub1 = $sub2 = $tsub2 = $sub3 = $tsub3 = $sub4 = $tsub4 = $sub5 = $tsub5 = 0;
$examdate;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (empty($_POST["classname"])) {
		} else {
			$classname = test_input($_POST["classname"]);
		}
  
		if (empty($_POST["sect"])) {
		} else {
			$sect = test_input($_POST["sect"]);
		}
  
		if (empty($_POST["term"])) {
		} else {
			$term = test_input($_POST["term"]);
		}
  
		if (empty($_POST["examdate"])) {
		} else {
			$examdate = test_input($_POST["examdate"]);
		}

		include('class/mysql_crud.php');
		$db = new Database();
		$db->connect();
		$enString = 'ExamDate="'.$examdate.'" AND Class="'.$classname.'" AND Section="'.$sect.'" AND Term="'.$term.'"';
		$db->select('studentresult','EnrollmentNumber, Class, Section, Term, ExamDate, TName, Sub1, TSub1, Sub2, TSub2, Sub3, TSub3, Sub4, TSub4, Sub5, TSub5',NULL, $enString,'EnrollmentNumber ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
		$res = $db->getResult();
		//print_r($res2);
		
		
		if (count($res) > 0) {
			echo "<h5>Class: ".$res[0]["Class"]."</h5><h5>Section: ".$res[0]["Section"]."</h5><h5>Term: ".$res[0]["Term"]."</h5><h5>Examination Year: ".$res[0]["ExamDate"]."</h5><br><br>";
			echo "<table class='pure-table pure-table-bordered'><thead><tr><th>S. No.</th><th>Enrollment Number</th><th>Teacher's Name</th><th>Subject 1</th><th>Total Subject 1</th><th>Subject 2</th><th>Total Subject 2</th><th>Subject 3</th><th>Total Subject 3</th><th>Subject 4</th><th>Total Subject 4</th><th>Subject 5</th><th>Total Subject 5</th></tr>";
			
			for($x = 0; $x < count($res); $x++) {
				echo "</thead><tr><tbody>";
				$num = $x + 1;
				echo "<td>".$num."</td><td>".$res[$x]["EnrollmentNumber"]."</td><td>".$res[$x]["TName"]."</td><td>".$res[$x]["Sub1"]."</td><td>".$res[$x]["TSub1"]."</td><td>".$res[$x]["Sub2"]."</td><td>".$res[$x]["TSub2"]."</td><td>".$res[$x]["Sub3"]."</td><td>".$res[$x]["TSub3"]."</td><td>".$res[$x]["Sub4"]."</td><td>".$res[$x]["TSub4"]."</td><td>".$res[$x]["Sub5"]."</td><td>".$res[$x]["TSub5"]."</td>";
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