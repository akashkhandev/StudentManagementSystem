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

$enrollnum = $sname = $sect = $classname = $tname = "";
$sub1 = $tsub1 = $sub2 = $tsub2 = $sub3 = $tsub3 = $sub4 = $tsub4 = $sub5 = $tsub5 = 0;
$examdate;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  if (empty($_POST["enrollnum"])) {
	  
  } else {
    $enrollnum = test_input($_POST["enrollnum"]);
  }
  
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

  if (empty($_POST["tname"])) {
  } else {
    $tname = test_input($_POST["tname"]);
  }

  if (empty($_POST["sub1"])) {
  } else {
    $sub1 = test_input($_POST["sub1"]);
  }

  if (empty($_POST["tsub1"])) {
  } else {
    $tsub1 = test_input($_POST["tsub1"]);
  }

  if (empty($_POST["sub2"])) {
  } else {
    $sub2 = test_input($_POST["sub2"]);
  }

  if (empty($_POST["tsub2"])) {
  } else {
    $tsub2 = test_input($_POST["tsub2"]);
  }

  if (empty($_POST["sub3"])) {
  } else {
    $sub3 = test_input($_POST["sub3"]);
  }

  if (empty($_POST["tsub3"])) {
  } else {
    $tsub3 = test_input($_POST["tsub3"]);
  }

  if (empty($_POST["sub4"])) {
  } else {
    $sub4 = test_input($_POST["sub4"]);
  }

  if (empty($_POST["tsub4"])) {
  } else {
    $tsub4 = test_input($_POST["tsub4"]);
  }

  if (empty($_POST["sub5"])) {
  } else {
    $sub5 = test_input($_POST["sub5"]);
  }

  if (empty($_POST["tsub5"])) {
  } else {
    $tsub5 = test_input($_POST["tsub5"]);
  }
  
  try{
	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect(); // Escape any input before insert
	$db->insert('studentresult',array('EnrollmentNumber'=>$enrollnum,'Class'=>$classname,'Section'=>$sect,'Term'=>$term, 'ExamDate'=>$examdate, 'TName'=>$tname, 'Sub1'=>$sub1, 'TSub1'=>$tsub1, 'Sub2'=>$sub2, 'TSub2'=>$tsub2, 'Sub3'=>$sub3,'TSub3'=>$tsub3,'Sub4'=>$sub4,'TSub4'=>$tsub4,'Sub5'=>$sub5,'TSub5'=>$tsub5));  // Table name, column names and respective values
	if ($db->rowsEffected()){
		echo '<script language="javascript">';
		echo 'alert("Successfully Saved"); location.href="StudentResult.php"';
        echo '</script>';
	}
	else{
		die("Data not Saved");
	}
	$res = $db->getResult();  
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