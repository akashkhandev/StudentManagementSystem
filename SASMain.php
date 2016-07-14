
<html>
<body>

<?php


$name = $fname = $age = $nationality = $address = $city = $contact = $email = $classname = $section = "";
$enrollArray = array();

	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (empty($_POST["classname"])) {
			$classnameErr = "Class is required";
		} else {
			$classname = test_input($_POST["classname"]);
		}
  
		if (empty($_POST["section"])) {
			$sectErr = "";
		} else {
			$section = test_input($_POST["section"]);
		}
		
	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$enString = 'ClassName="'.$classname.'" AND Section="'.$section.'"';
	$db->select('studentdata','EnrollmentNumber,FirstName,MiddleName,LastName',NULL,$enString,'ClassID ASC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
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
		
		$_SESSION['classname'] = $classname;
		$_SESSION['section'] = $section;
		$_SESSION['enrollArray'] = $enrollArray;
 
	}
	
	}
	
	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


</body>
</html>