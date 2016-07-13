<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Charter for compassion | EMIS</title>
<!-- Stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
    <link href="favicon.png" type="image/png"  />
<!-- Javascript -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/ddsmoothmenu.js" type="text/javascript"></script>
<script src="js/contentslider.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.1.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/DIN_500.font.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>


	
</head>
<body>

<?php include 'menu.php';?>

<?php

$dateToday;
$keyArray = array();
$valueArray = array();
$statusArray = array();
$reasonArray = array();

$enrollArray = $_SESSION['enrollArray'];
$classname = $_SESSION['classname'];
$section = $_SESSION['section'];
//print_r($enrollArray);

if(count($enrollArray) > 0){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//print_r($_POST);
	
	foreach($_POST as $x => $x_value) {
		
		$val;
		//$dateToday = test_input($_POST['dateToday']);
		
		if (empty($x_value)) {
			$val = "";
		} else {
			$val = test_input($x_value);
		}
		array_push($valueArray, $val);
	}
	//print_r($valueArray);
	if(!empty($valueArray)){
		
		for($i=0; $i<count($valueArray); $i++){
			if($i == 0){
				$dateToday = $valueArray[0];
			}
			elseif($i%2 != 0){
				array_push($statusArray, $valueArray[$i]);
			}
			elseif($i%2 == 0){
				array_push($reasonArray, $valueArray[$i]);
			}
		}
				//print_r($statusArray);
				//print_r($reasonArray);
		
			
			include('class/mysql_crud.php');
			$db = new Database();
			$db->connect(); // Escape any input before insert
			for($j=0; $j<count($enrollArray); $j++){
				$db->insert('studentattendance',array('EnrollmentNumber'=>$enrollArray[$j],'Status'=>$statusArray[$j],'Reason'=>$reasonArray[$j],'DateToday'=>$dateToday,'ClassName'=>$classname,'Section'=>$section));  // Table name, column names and respective values
				
				$res = $db->getResult();  
				/*print($enrollArray[$j]."\n");
				print($statusArray[$j]."\n");
				print($reasonArray[$j]."\n");*/
			}
	}
	else{
		 die("Data not found");
	}
	
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!-- Footer Section -->
<?php include 'footer.php' ?>