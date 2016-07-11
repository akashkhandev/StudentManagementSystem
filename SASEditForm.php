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
  <input type="submit" value="Submit">
  </form>
  </div>

<!-- Footer Section -->
<?php include 'footer.php' ?>
</body>
</html>

