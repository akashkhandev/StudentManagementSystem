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
	<select name="sect">
      <option value="A" <?php if ($sect == 'A') echo ' selected="selected"'; ?>>A</option>
      <option value="B" <?php if ($sect == 'B') echo ' selected="selected"'; ?>>B</option>
      <option value="C" <?php if ($sect == 'C') echo ' selected="selected"'; ?>>C</option>
      <option value="D" <?php if ($sect == 'D') echo ' selected="selected"'; ?>>D</option>
    </select>
  </br>
  Term:<br>
	<select name="term">
      <option value="Mid Term" <?php if ($term == 'Mid Term') echo ' selected="selected"'; ?>>Mid Term</option>
      <option value="Final Term" <?php if ($term == 'Final Term') echo ' selected="selected"'; ?>>Final Term</option>
    </select>
  </br>
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
</form>
</div>

<!-- Footer Section -->
<?php include 'footer.php' ?>
</body>
</html>