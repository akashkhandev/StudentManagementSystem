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

$enrollnumErr = $firstnameErr = $middlenameErr = $lastnameErr = $fathernameErr = $genderErr = $dobErr = $add_preErr = $add_perErr = $religionErr = $sectErr = $hafizErr = $castErr = $subcastErr = "";
$enrollnum = $firstname = $middlename = $lastname = $fathername = $gender = $add_pre = $add_per = $religion = $sect = $hafiz = $cast = $subcast = "";
$dob;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["enrollnum"])) {
    $enrollnumErr = "Enroll. Number is required";
  } else {
    $enrollnum = test_input($_POST["enrollnum"]);
  }
  
  if (empty($_POST["sname"])) {
    $snameErr = "Student Name is required";
  } else {
    $sname = test_input($_POST["sname"]);
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

  if (empty($_POST["examdate"])) {
	$examdateErr = "Examination date is required";
  } else {
    $examdate = test_input($_POST["examdate"]);
  }

  if (empty($_POST["tname"])) {
    $tnameErr = "Teacher's name is required";
  } else {
    $tname = test_input($_POST["tname"]);
  }

  if (empty($_POST["sub1"])) {
    $sub1Err = "Subject 1 is required";
  } else {
    $sub1 = test_input($_POST["sub1"]);
  }

  if (empty($_POST["tsub1"])) {
    $tsub1Err = "Total Subject 1 is required";
  } else {
    $tsub1 = test_input($_POST["tsub1"]);
  }

  if (empty($_POST["sub2"])) {
    $sub2Err = "Subject 2 is required";
  } else {
    $sub2 = test_input($_POST["sub2"]);
  }

  if (empty($_POST["tsub2"])) {
    $tsub2Err = "Total Subject 2 is required";
  } else {
    $tsub2 = test_input($_POST["tsub2"]);
  }

  if (empty($_POST["sub3"])) {
    $sub3Err = "Subject 3 is required";
  } else {
    $sub3 = test_input($_POST["sub3"]);
  }

  if (empty($_POST["tsub3"])) {
    $tsub3Err = "Total Subject 3 is required";
  } else {
    $tsub3 = test_input($_POST["tsub3"]);
  }

  if (empty($_POST["sub4"])) {
    $sub4Err = "Subject 4 is required";
  } else {
    $sub4 = test_input($_POST["sub4"]);
  }

  if (empty($_POST["tsub4"])) {
    $tsub4Err = "Total Subject 4 is required";
  } else {
    $tsub4 = test_input($_POST["tsub4"]);
  }

  if (empty($_POST["sub5"])) {
    $sub5Err = "Subject 5 is required";
  } else {
    $sub5 = test_input($_POST["sub5"]);
  }

  if (empty($_POST["tsub5"])) {
    $tsub5Err = "Total Subject 5 is required";
  } else {
    $tsub5 = test_input($_POST["tsub5"]);
  }
  
	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$enString = 'EnrollmentNumber="'.$enrollnum.'" AND Class="'.$classname.'" AND Section="'.$sect.'" AND Term="'.$term.'"';
	$db->update('studentresult',array('EnrollmentNumber'=>$enrollnum,'SName'=>$sname,'Class'=>$classname,'Section'=>$sect,'Term'=>$term, 'ExamDate'=>$examdate, 'TName'=>$tname, 'Sub1'=>$sub1, 'TSub1'=>$tsub1, 'Sub2'=>$sub2, 'TSub2'=>$tsub2, 'Sub3'=>$sub3,'TSub3'=>$tsub3,'Sub4'=>$sub4,'TSub4'=>$tsub4,'Sub5'=>$sub5,'TSub5'=>$tsub5), $enString); // Table name, column names and values, WHERE conditions
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