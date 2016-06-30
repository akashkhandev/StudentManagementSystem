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
		include_once('StudentResultEditSelect.php');
	?> 
	
<div id="formId">
<form id="studentform" action="StudentResultEdit.php" method="post">
  Student Enrollment Number:<br>
  <input type="text" name="enrollnum" value="<?php echo $enrollnum; ?>" required>
  <br>
  Student Name:<br>
  <input type="text" name="sname" value="<?php echo $sname; ?>" required>
  <br>
  Class:<br>
  <input type="text" name="classname" value="<?php echo $classname; ?>" required>
  <br>
  Section:<br>
  <input type="text" name="sect" value="<?php echo $sect; ?>" required>
  <br>
  Examination Date:<br>
  <input type="date" name="examdate" value="<?php echo $examdate; ?>" required>
  </br>
  Teacher Name:<br>
  <input type="text" name="tname" value="<?php echo $tname; ?>" required>
  <br>
  <div id="subform">
  Subject 1:
  <input type="number" name="sub1" class = "subform" value="<?php echo $sub1; ?>" required>
  Out of:
  <input type="number" name="tsub1" class = "subform" value="<?php echo $tsub1; ?>" required>
  <br>
  Subject 2:
  <input type="number" name="sub2" class = "subform" value="<?php echo $sub2; ?>" required>
  Out of:
  <input type="number" name="tsub2" class = "subform" value="<?php echo $tsub2; ?>" required>
  </br>
  Subject 3:
  <input type="number" name="sub3" class = "subform" value="<?php echo $sub3; ?>" required>
  Out of:
  <input type="number" name="tsub3" class = "subform" value="<?php echo $tsub3; ?>" required>
  <br>
  Subject 4:
  <input type="number" name="sub4" class = "subform" value="<?php echo $sub4; ?>" required>
  Out of:
  <input type="number" name="tsub4" class = "subform" value="<?php echo $tsub4; ?>" required>
  <br>
  Subject 5:
  <input type="number" name="sub5" class = "subform" value="<?php echo $sub5; ?>" required>
  Out of:
  <input type="number" name="tsub5" class = "subform" value="<?php echo $tsub5; ?>" required>
  </div>
  <br>
  <input type="submit" value="Submit">

<!-- Footer Section -->
<?php include 'footer.php' ?>
</body>
</html>