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

$enrollnum = $phydis = $anydis = $tre = $tresch = "";
 $age = $height = $weight = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  if (empty($_POST["enrollnum"])) {
    $enrollnumErr = "Enroll. Number is required";
  } else {
    $enrollnum = test_input($_POST["enrollnum"]);
  }
  
  if (empty($_POST["age"])) {
    $ageErr = "age is required";
  } else {
    $age = test_input($_POST["age"]);
  }
  
  if (empty($_POST["height"])) {
    $height = "height is required";
  } else {
    $height = test_input($_POST["height"]);
  }
  
  if (empty($_POST["weight"])) {
    $weightErr = "weight is required";
  } else {
    $weight = test_input($_POST["weight"]);
  }

  if (empty($_POST["phydis"])) {
	$phydis = "N/A";
  } else {
    $phydis = test_input($_POST["phydis"]);
  }

  if (empty($_POST["anydis"])) {
    $anydis = "N/A";
  } else {
    $anydis = test_input($_POST["anydis"]);
  }

  if (empty($_POST["tre"])) {
    $tre = "N/A";
  } else {
    $tre = test_input($_POST["tre"]);
  }

  if (empty($_POST["tresch"])) {
    $tresch = "N/A";
  } else {
    $tresch = test_input($_POST["tresch"]);
  }
  
	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect(); // Escape any input before insert
	$db->insert('healthinformation',array('EnrollmentNumber'=>$enrollnum,'Age'=>$age,'Height'=>$height,'Weight'=>$weight, 'PhysicalDisablility'=>$phydis, 'AnyDisease'=>$anydis, 'MedicalTreatment'=>$tre, 'MedicalTreatmentinschool'=>$tresch));  // Table name, column names and respective values
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