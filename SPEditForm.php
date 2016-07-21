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
		include_once('SPEditSelect.php');
	?> 
	
<div id="formId">
<form id="studentform" action="SPEdit.php" method="post">
	<h5>Enrollment Number: <?php echo $enrollnum; ?></h5><br>
  <input type="hidden" name="enrollnum" value="<?php echo $enrollnum; ?>" required>
  <br>
  Month:<br>
	<select name="datemonth">
      <option value="01" <?php if ($datemonth == '1') echo ' selected="selected"'; ?>>Jan</option>
      <option value="02" <?php if ($datemonth == '2') echo ' selected="selected"'; ?>>Feb</option>
      <option value="03" <?php if ($datemonth == '3') echo ' selected="selected"'; ?>>Mar</option>
      <option value="04" <?php if ($datemonth == '4') echo ' selected="selected"'; ?>>Apr</option>
      <option value="05" <?php if ($datemonth == '5') echo ' selected="selected"'; ?>>May</option>
      <option value="06" <?php if ($datemonth == '6') echo ' selected="selected"'; ?>>Jun</option>
      <option value="07" <?php if ($datemonth == '7') echo ' selected="selected"'; ?>>Jul</option>
      <option value="08" <?php if ($datemonth == '8') echo ' selected="selected"'; ?>>Aug</option>
      <option value="09" <?php if ($datemonth == '9') echo ' selected="selected"'; ?>>Sep</option>
      <option value="10" <?php if ($datemonth == '10') echo ' selected="selected"'; ?>>Oct</option>
      <option value="11" <?php if ($datemonth == '11') echo ' selected="selected"'; ?>>Nov</option>
      <option value="12" <?php if ($datemonth == '12') echo ' selected="selected"'; ?>>Dec</option>
    </select>
	Year:<br>
	<input type="number" name="dateyear" value="<?php echo $dateyear; ?>" min="1980" max="2099" required>
  </br>
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
  Attendance Performance:<br>
	<select name="att_per">
      <option value="Excellent" <?php if ($att_per == 'Excellent') echo ' selected="selected"'; ?>>Excellent</option>
      <option value="Good" <?php if ($att_per == 'Good') echo ' selected="selected"'; ?>>Good</option>
      <option value="Satisfied" <?php if ($att_per == 'Satisfied') echo ' selected="selected"'; ?>>Satisfied</option>
      <option value="Unsatisfied" <?php if ($att_per == 'Unsatisfied') echo ' selected="selected"'; ?>>Unsatisfied</option>
      <option value="Poor" <?php if ($att_per == 'Poor') echo ' selected="selected"'; ?>>Poor</option>
    </select>
  </br>
  Class Activity Performance:<br>
	<select name="ca_per">
      <option value="Excellent" <?php if ($ca_per == 'Excellent') echo ' selected="selected"'; ?>>Excellent</option>
      <option value="Good" <?php if ($ca_per == 'Good') echo ' selected="selected"'; ?>>Good</option>
      <option value="Satisfied" <?php if ($ca_per == 'Satisfied') echo ' selected="selected"'; ?>>Satisfied</option>
      <option value="Unsatisfied" <?php if ($ca_per == 'Unsatisfied') echo ' selected="selected"'; ?>>Unsatisfied</option>
      <option value="Poor" <?php if ($ca_per == 'Poor') echo ' selected="selected"'; ?>>Poor</option>
    </select>
  </br>
  Behaviour:<br>
	<select name="behaviour">
      <option value="Excellent" <?php if ($behaviour == 'Excellent') echo ' selected="selected"'; ?>>Excellent</option>
      <option value="Good" <?php if ($behaviour == 'Good') echo ' selected="selected"'; ?>>Good</option>
      <option value="Satisfied" <?php if ($behaviour == 'Satisfied') echo ' selected="selected"'; ?>>Satisfied</option>
      <option value="Unsatisfied" <?php if ($behaviour == 'Unsatisfied') echo ' selected="selected"'; ?>>Unsatisfied</option>
      <option value="Poor" <?php if ($behaviour == 'Poor') echo ' selected="selected"'; ?>>Poor</option>
    </select>
  </br>
  Quiz/Monthly Result Performance:<br>
	<select name="qmr_per">
      <option value="Excellent" <?php if ($qmr_per == 'Excellent') echo ' selected="selected"'; ?>>Excellent</option>
      <option value="Good" <?php if ($qmr_per == 'Good') echo ' selected="selected"'; ?>>Good</option>
      <option value="Satisfied" <?php if ($qmr_per == 'Satisfied') echo ' selected="selected"'; ?>>Satisfied</option>
      <option value="Unsatisfied" <?php if ($qmr_per == 'Unsatisfied') echo ' selected="selected"'; ?>>Unsatisfied</option>
      <option value="Poor" <?php if ($qmr_per == 'Poor') echo ' selected="selected"'; ?>>Poor</option>
    </select>
  </br>
  Co-Curricular Activities Performance:<br>
	<select name="cca_per">
      <option value="Excellent" <?php if ($cca_per == 'Excellent') echo ' selected="selected"'; ?>>Excellent</option>
      <option value="Good" <?php if ($cca_per == 'Good') echo ' selected="selected"'; ?>>Good</option>
      <option value="Satisfied" <?php if ($cca_per == 'Satisfied') echo ' selected="selected"'; ?>>Satisfied</option>
      <option value="Unsatisfied" <?php if ($cca_per == 'Unsatisfied') echo ' selected="selected"'; ?>>Unsatisfied</option>
      <option value="Poor" <?php if ($cca_per == 'Poor') echo ' selected="selected"'; ?>>Poor</option>
    </select>
  </br>
  Remarks:<br>
  <input type="text" name="remarks" value="<?php echo $remarks; ?>" required>
  <br>
  <input type="submit" value="Submit">
</form>
</div>

<!-- Footer Section -->
<?php include 'footer.php' ?>
</body>
</html>