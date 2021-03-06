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

$enrollnum = $firstname = $middlename = $lastname = $fathername = $gender = $add_pre = $add_per = $religion = $sect = $hafiz = $cast = $subcast = $classname = $section = "";
$dob;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["enrollnum"])) {
  } else {
    $enrollnum = test_input($_POST["enrollnum"]);
  }
  
  if (empty($_POST["firstname"])) {
  } else {
    $firstname = test_input($_POST["firstname"]);
  }
  
  if (empty($_POST["middlename"])) {
    $middlename = "";
  } else {
    $middlename = test_input($_POST["middlename"]);
  }
  
  if (empty($_POST["lastname"])) {
  } else {
    $lastname = test_input($_POST["lastname"]);
  }

  if (empty($_POST["fathername"])) {
  } else {
    $fathername = test_input($_POST["fathername"]);
  }

  if (empty($_POST["gender"])) {
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["dob"])) {
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if (empty($_POST["add_pre"])) {
  } else {
    $add_pre = test_input($_POST["add_pre"]);
  }

  if (empty($_POST["add_per"])) {
  } else {
    $add_per = test_input($_POST["add_per"]);
  }

  if (empty($_POST["religion"])) {
  } else {
    $religion = test_input($_POST["religion"]);
  }

  if (empty($_POST["sect"])) {
    $sect = "";
  } else {
    $sect = test_input($_POST["sect"]);
  }

  if (empty($_POST["hafiz"])) {
  } else {
    $hafiz = test_input($_POST["hafiz"]);
  }

  if (empty($_POST["cast"])) {
    $cast = "";
  } else {
    $cast = test_input($_POST["cast"]);
  }

  if (empty($_POST["subcast"])) {
    $subcast = "";
  } else {
    $subcast = test_input($_POST["subcast"]);
  }
  
  if (empty($_POST["classname"])) {
  } else {
    $classname = test_input($_POST["classname"]);
  }
  
  if (empty($_POST["section"])) {
  } else {
    $section = test_input($_POST["section"]);
  }
  
	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$enString = 'EnrollmentNumber="'.$enrollnum.'"';
	$db->update('studentdata',array('EnrollmentNumber'=>$enrollnum,'FirstName'=>$firstname,'MiddleName'=>$middlename,'LastName'=>$lastname, 'FatherName'=>$fathername, 'Gender'=>$gender, 'DateOfBirth'=>$dob, 'Address_Present'=>$add_pre, 'Address_Permanant'=>$add_per, 'Religion'=>$religion, 'Sect'=>$sect,'HafizeQuran'=>$hafiz,'Cast'=>$cast,'SubCast'=>$subcast,'ClassName'=>$classname,'Section'=>$section), $enString); // Table name, column names and values, WHERE conditions
	if ($db->rowsEffected()){
		echo '<script language="javascript">';
		echo 'alert("Successfully Updated"); location.href="StudentData.php"';
        echo '</script>';
	}
	else{
		die("Data not Updated");
	}
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