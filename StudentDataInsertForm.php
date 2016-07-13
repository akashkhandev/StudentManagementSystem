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
<form id="studentform" action="StudentDataInsert.php" method="post">
  Enrollment Number:<br>
  <input type="text" name="enrollnum" required>
  <br>
  First Name:<br>
  <input type="text" name="firstname" required>
  <br>
  Middle Name:<br>
  <input type="text" name="middlename" >
  <br>
  Last Name:<br>
  <input type="text" name="lastname" required>
  <br>
  Father's Name:<br>
  <input type="text" name="fathername" required>
  </br>
  Gender:<br>
	<select name="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </br>
  Date of Birth:<br>
  <input type="date" name="dob" required>
  <br>
  Address Present:<br>
  <input type="text" name="add_pre" required>
  <br>
  Address Permanant:<br>
  <input type="text" name="add_per" required>
  <br>
  Religion:<br>
  <input type="text" name="religion" required>
  </br>
  Sect:<br>
  <input type="text" name="sect" >
  <br>
  HafizeQuran:<br>
  <select name="hafiz">
      <option value="No">No</option>
      <option value="Yes">Yes</option>
    </select>
  <br>
  Cast:<br>
  <input type="text" name="cast" >
  <br>
  Sub Cast:<br>
  <input type="text" name="subcast" >
  <br>
  <h3>Education:</h3><br>
  Class:<br>
	<select name="classname">
      <option value="Kachi">Kachi</option>
      <option value="Grade 1">Grade 1</option>
      <option value="Grade 2">Grade 2</option>
      <option value="Grade 3">Grade 3</option>
      <option value="Grade 4">Grade 4</option>
      <option value="Grade 5">Grade 5</option>
      <option value="Grade 6">Grade 6</option>
      <option value="Grade 7">Grade 7</option>
      <option value="Grade 8">Grade 8</option>
      <option value="Grade 9">Grade 9</option>
      <option value="Grade 10">Grade 10</option>
    </select>
  </br>
  Section:<br>
	<select name="section">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
    </select>
  </br>
  <input type="submit" value="Submit" >
</form>
</div>

<!-- Footer Section -->
<?php include 'footer.php' ?>
</body>
</html>