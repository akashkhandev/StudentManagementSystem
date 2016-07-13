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
		include_once('SASEditSelect.php');
	?> 
	
<div id="formId">
<form id="studentform" action="SASEdit.php" method="post">
	<h4>Date: <?php echo $dateToday; ?></h4>
  <br>
  <h4>Student Enrollment Number: <?php echo $enrollnum; ?></h4>
  <br>
  Status:<br>
	<select name="status">
      <option value="Present" <?php if ($status == 'Present') echo ' selected="selected"'; ?>>Present</option>
      <option value="Absent" <?php if ($status == 'Absent') echo ' selected="selected"'; ?>>Absent</option>
      <option value="Leave" <?php if ($status == 'Leave') echo ' selected="selected"'; ?>>Leave</option>
    </select>
  <br>
  Reason (if Leave):<br>
  <input type="text" name="reason" value="<?php echo $reason; ?>">
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
	<select name="section">
      <option value="A" <?php if ($section == 'A') echo ' selected="selected"'; ?>>A</option>
      <option value="B" <?php if ($section == 'B') echo ' selected="selected"'; ?>>B</option>
      <option value="C" <?php if ($section == 'C') echo ' selected="selected"'; ?>>C</option>
      <option value="D" <?php if ($section == 'D') echo ' selected="selected"'; ?>>D</option>
    </select>
  </br>
  </br>
  <input type="submit" value="Submit">
  </form>
  </div>

<!-- Footer Section -->
<?php include 'footer.php' ?>
</body>
</html>

