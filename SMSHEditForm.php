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
		include_once('SMSHEditSelect.php');
	?> 
	
<div id="formId">
<form id="studentform" action="SMSHEdit.php" method="post">
	<h5>Enrollment Number: <?php echo $enrollnum; ?></h5><br>
  <input type="hidden" name="enrollnum" value="<?php echo $enrollnum; ?>" required>
  <br>
  Age:<br>
  <input type="number" name="age" value="<?php echo $age; ?>" min="1" max="50" required>
  <br>
  Height(cm):<br>
  <input type="number" name="height" value="<?php echo $height; ?>" min="1" max="250" required>
  <br>
  Weight(Kg):<br>
  <input type="number" name="weight" value="<?php echo $weight; ?>" min="1" max="200" required>
  <br>
  Physical Disablility:<br>
  <input type="text" name="phydis" value="<?php echo $phydis; ?>">
  <br>
  Any Disease:<br>
  <input type="text" name="anydis" value="<?php echo $anydis; ?>">
  <br>
  Medical Treatment:<br>
  <input type="text" name="tre" value="<?php echo $tre; ?>">
  </br>
  Medical Treatment in School:<br>
  <input type="text" name="tresch" value="<?php echo $tresch; ?>">
  </br>
  <input type="submit" value="Submit" required>

 </form>
 </div>
  
<!-- Footer Section -->
<?php include 'footer.php' ?>
</body>
</html>