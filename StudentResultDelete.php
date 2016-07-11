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

$enrollnumErr = "";
$enrollnum = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["enrollnum"])) {
    $enrollnumErr = "Enrollment Number is required";
  } else {
    $enrollnum = test_input($_POST["enrollnum"]);
  }
  
  if (empty($_POST["classname"])) {
    $classnameErr = "Class is required";
  } else {
    $classname = test_input($_POST["classname"]);
  }
  
  if (empty($_POST["sect"])) {
    $sectErr = "";
  } else {
    $sect = test_input($_POST["sect"]);
  }
  
  if (empty($_POST["term"])) {
    $termErr = "";
  } else {
    $term = test_input($_POST["term"]);
  }
  
	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	
	$enString = 'EnrollmentNumber="'.$enrollnum.'" AND Class="'.$classname.'" AND Section="'.$sect.'" AND Term="'.$term.'"';
	$db->delete('studentresult',$enString);  // Table name, WHERE conditions
	$res = $db->getResult();  
	//print_r($res);
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