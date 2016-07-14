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
		include_once('StudentDataEditSelect.php');
	?> 
	
<div id="formId">
<form id="studentform" action="StudentDataEdit.php" method="post">
  Enrollment Number:<br>
  <input type="text" name="enrollnum" value="<?php echo $enrollnum; ?>" required>
  <br>
  First Name:<br>
  <input type="text" name="firstname" value="<?php echo $firstname; ?>" required>
  <br>
  Middle Name:<br>
  <input type="text" name="middlename" value="<?php echo $middlename; ?>">
  <br>
  Last Name:<br>
  <input type="text" name="lastname" value="<?php echo $lastname; ?>" required>
  <br>
  Father's Name:<br>
  <input type="text" name="fathername" value="<?php echo $fathername; ?>" required>
  </br>
  Gender:<br>
	<select name="gender">
      <option value="Male" <?php if ($gender == 'Male') echo ' selected="selected"'; ?>>Male</option>
      <option value="Female" <?php if ($gender == 'Female') echo ' selected="selected"'; ?>>Female</option>
    </select>
  </br>
  Date of Birth:<br>
  <input type="date" name="dob" value="<?php echo $dob; ?>" required>
  <br>
  Address Present:<br>
  <input type="text" name="add_pre" value="<?php echo $add_pre; ?>" required>
  <br>
  Address Permanant:<br>
  <input type="text" name="add_per" value="<?php echo $add_per; ?>" required>
  <br>
  Religion:<br>
  <input type="text" name="religion" value="<?php echo $religion; ?>" required>
  </br>
  Sect:<br>
  <input type="text" name="sect" value="<?php echo $sect; ?>" >
  <br>
  HafizeQuran:<br>
  <select name="hafiz">
      <option value="No" <?php if ($hafiz == 'No') echo ' selected="selected"'; ?>>No</option>
      <option value="Yes" <?php if ($hafiz == 'Yes') echo ' selected="selected"'; ?>>Yes</option>
    </select>
  <br>
  Cast:<br>
  <input type="text" name="cast" value="<?php echo $cast; ?>" >
  <br>
  Sub Cast:<br>
  <input type="text" name="subcast" value="<?php echo $subcast; ?>" >
  <br>
  <h3>Education:</h3><br>
  Class:<br>
	<select name="classname">
      <option value="Kachi" <?php if ($classname == 'Kachi') echo ' selected="selected"'; ?>>Kachi</option>
      <option value="Grade 1" <?php if ($classname == 'Grade 1') echo ' selected="selected"'; ?>>Grade 1</option>
      <option value="Grade 2" <?php if ($classname == 'Grade 2') echo ' selected="selected"'; ?>>Grade 2</option>
      <option value="Grade 3" <?php if ($classname == 'Grade 3') echo ' selected="selected"'; ?>>Grade 3</option>
      <option value="Grade 4" <?php if ($classname == 'Grade 4') echo ' selected="selected"'; ?>>Grade 4</option>
      <option value="Grade 5" <?php if ($classname == 'Grade 5') echo ' selected="selected"'; ?>>Grade 5</option>
      <option value="Grade 6" <?php if ($classname == 'Grade 6') echo ' selected="selected"'; ?>>Grade 6</option>
      <option value="Grade 7" <?php if ($classname == 'Grade 7') echo ' selected="selected"'; ?>>Grade 7</option>
      <option value="Grade 8" <?php if ($classname == 'Grade 8') echo ' selected="selected"'; ?>>Grade 8</option>
      <option value="Grade 9" <?php if ($classname == 'Grade 9') echo ' selected="selected"'; ?>>Grade 9</option>
      <option value="Grade 10" <?php if ($classname == 'Grade 10') echo ' selected="selected"'; ?>>Grade 10</option>
    </select>
  </br>
  Section:<br>
	<select name="section">
      <option value="A" <?php if ($section == 'A') echo ' selected="selected"'; ?>>A</option>
      <option value="B" <?php if ($section == 'B') echo ' selected="selected"'; ?>>B</option>
      <option value="C" <?php if ($section == 'C') echo ' selected="selected"'; ?>>C</option>
      <option value="D" <?php if ($section == 'D') echo ' selected="selected"'; ?>>D</option>
    </select>
  </br>
  <input type="submit" value="Submit" required>

 </form>
 </div>
  
<!-- Footer Section -->
<?php include 'footer.php' ?>
</body>
</html>