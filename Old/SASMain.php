
<html>
<body>

<?php


$name = $fname = $age = $nationality = $address = $city = $contact = $email = "";
$enrollArray = array();


	include('../class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$db->select('studentdata','EnrollmentNumber,FirstName,MiddleName,LastName',NULL,NULL,'ClassID ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
	$res = $db->getResult();
	//print_r($res);

	if(count($res)>0){
		
		echo "<table class='pure-table'><thead><tr><th>Enrollment Number</th><th>Name</th><th>Status</th><th>Reason (if leave)</th></tr></thead>";
		for($x = 0; $x < count($res); $x++) {
			echo "<tbody><tr>";
			$statusString ='name="status'.$x.'"';
			$reasonString = 'name="reason'.$x.'"';
			echo "<td>".$res[$x]["EnrollmentNumber"]."</td><td>".$res[$x]["FirstName"]." ".$res[$x]["MiddleName"]." ".$res[$x]["LastName"].'</td><td><select '.$statusString.'><option value="Present">Present</option><option value="Absent">Absent</option><option value="Leave">Leave</option></select></td><td><input type="text" '.$reasonString.'/></td>';
			echo "</tr></tbody>";
			//print "Hello table!";
			
			array_push($enrollArray, $res[$x]["EnrollmentNumber"]);
		}
		echo "</table>";
		$_SESSION['enrollArray'] = $enrollArray;
 
	}else {
		die("Data not found");
	}
?>


</body>
</html>