<!DOCTYPE html>
<html>
<body>

<?php

	$enrollnum = $sname = $sect = $classname = $tname = "";
	$sub1 = $tsub1 = $sub2 = $tsub2 = $sub3 = $tsub3 = $sub4 = $tsub4 = $sub5 = $tsub5 = 0;
	$examdate;

	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$db->select('studentresult','EnrollmentNumber, SName, Class, Section, ExamDate, TName, Sub1, TSub1, Sub2, TSub2, Sub3, TSub3, Sub4, TSub4, Sub5, TSub5',NULL,NULL,'id ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
	$res = $db->getResult();
	//print_r($res);

	if(count($res)>0){
		
		echo "<table><tr><th>Enrollment Number</th><th>Student Name</th><th>Class</th><th>Section</th><th>Examination Date</th><th>Teacher's Name</th><th>Subject 1</th><th>Total Subject 1</th><th>Subject 2</th><th>Total Subject 2</th><th>Subject 3</th><th>Total Subject 3</th><th>Subject 4</th><th>Total Subject 4</th><th>Subject 5</th><th>Total Subject 5</th></tr>";
		for($x = 0; $x < count($res); $x++) {
			echo "<tr>";
			echo "<td>".$res[$x]["EnrollmentNumber"]."</td><td>".$res[$x]["SName"]."</td><td>".$res[$x]["Class"]."</td><td>".$res[$x]["Section"]."</td><td>".$res[$x]["ExamDate"]."</td><td>".$res[$x]["TName"]."</td><td>".$res[$x]["Sub1"]."</td><td>".$res[$x]["TSub1"]."</td><td>".$res[$x]["Sub2"]."</td><td>".$res[$x]["TSub2"]."</td><td>".$res[$x]["Sub3"]."</td><td>".$res[$x]["TSub3"]."</td><td>".$res[$x]["Sub4"]."</td><td>".$res[$x]["TSub4"]."</td><td>".$res[$x]["Sub5"]."</td><td>".$res[$x]["TSub5"]."</td>";
			echo "</tr>";
			//print "Hello table!";
		}
		echo "</table>";
 
	}else {
		echo "0 results";
	}
?>


</body>
</html>