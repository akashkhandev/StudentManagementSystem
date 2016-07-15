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

$enrollnum = $status = $reason = $classname = $section = "";
$dateToday;

$enrollnum = $_SESSION['enrollnum'];
$dateToday = $_SESSION['dateToday'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["status"])) {
  } else {
    $status = test_input($_POST["status"]);
  }
  
  if (empty($_POST["reason"])) {
    $reason = "";
  } else {
    $reason = test_input($_POST["reason"]);
  }
		
		if (empty($_POST["classname"])) {
		} else {
			$classname = test_input($_POST["classname"]);
		}
  
		if (empty($_POST["section"])) {
		} else {
			$section = test_input($_POST["section"]);
		}
  
  try{
	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$enString = 'EnrollmentNumber="'.$enrollnum.'" AND DateToday="'.$dateToday.'"';
	$db->update('studentattendance',array('Status'=>$status,'Reason'=>$reason,'ClassName'=>$classname,'Section'=>$section), $enString); // Table name, column names and values, WHERE conditions
	if ($db->rowsEffected()){
		echo '<script language="javascript">';
		echo 'alert("Successfully Updated"); location.href="SAS.php"';
        echo '</script>';
	}
	else{
		die("Data not Updated");
	}
	$res = $db->getResult();
	//print_r($res);
	  
  }
  catch(Exception $e) {
	echo $e->getMessage();
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

</body>
</html>