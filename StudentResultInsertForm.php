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

<div id="formId">
<form id="studentform" action="StudentResultInsert.php" method="post">
  Student Enrollment Number:<br>
  <input type="text" name="enrollnum" required>
  <br>
  Student Name:<br>
  <input type="text" name="sname" required>
  <br>
  Class:<br>
  <input type="text" name="classname" required>
  <br>
  Section:<br>
  <input type="text" name="sect" >
  <br>
  Examination Date:<br>
  <input type="date" name="examdate" required>
  </br>
  Teacher Name:<br>
  <input type="text" name="tname" required>
  <br>
  <div id="subform">
  Subject 1:
  <input type="number" name="sub1" class = "subform" required>
  Out of:
  <input type="number" name="tsub1" class = "subform" required>
  <br>
  Subject 2:
  <input type="number" name="sub2" class = "subform" required>
  Out of:
  <input type="number" name="tsub2" class = "subform" required>
  </br>
  Subject 3:
  <input type="number" name="sub3" class = "subform" required>
  Out of:
  <input type="number" name="tsub3" class = "subform" required>
  <br>
  Subject 4:
  <input type="number" name="sub4" class = "subform" required>
  Out of:
  <input type="number" name="tsub4" class = "subform" required>
  <br>
  Subject 5:
  <input type="number" name="sub5" class = "subform" required>
  Out of:
  <input type="number" name="tsub5" class = "subform" required>
  </div>
  <br>
  <input type="submit" value="Submit">
</form>
</div>

<!-- Footer Section -->
<?php include 'footer.php' ?>
</body>
</html>