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

<link rel="stylesheet" href="pure-release-0.6.0/pure-min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">	

	
</head>
<body>

<?php include 'menu.php';?>

	<?php
		include_once('StudentDataProfile.php');
	?>
	
	<h5>Enrollment Number: <?php echo $enrollnum; ?></h5>
	<h5>Student Name: <?php echo $sname; ?></h5>
	<h5>Class: <?php echo $classname; ?></h5>
	<h5>Section: <?php echo $section; ?></h5><br><br>
	<table class='pure-table'>
	<thead>
	<tr><th>Father Name</th><th>Gender</th><th>Date of Birth</th><th>Address Present</th>
	<th>Address Permanant</th><th>Religion</th><th>Sect</th><th>Hafiz-e-Quran</th><th>Cast</th>
	<th>SubCast</th></tr>
	</thead>
		
	<tbody>
	<tr><td><?php echo $fathername; ?></td><td><?php echo $gender; ?></td><td><?php echo $dob; ?></td>
	<td><?php echo $add_pre; ?></td><td><?php echo $add_per; ?></td><td><?php echo $religion; ?></td>
	<td><?php echo $sect; ?></td><td><?php echo $hafiz; ?></td><td><?php echo $cast; ?></td>
	<td><?php echo $subcast; ?></td></tr>
	</tbody>
	</table>
	<br><br><br>
	
	<h3>Health Information:</h3><br>
	<table class='pure-table'>
	<thead>
	<tr><th>Age</th><th>Height</th><th>Weight</th><th>Physical Disablility</th><th>Any Disease</th>
	<th>Medical Treatment</th><th>Medical Treatment in school</th></tr>
	</thead>
		
	<tbody>
	<tr><td><?php echo $age; ?></td><td><?php echo $height; ?></td><td><?php echo $weight; ?></td>
	<td><?php echo $phydis; ?></td><td><?php echo $anydis; ?></td><td><?php echo $tre; ?></td>
	<td><?php echo $tresch; ?></td></tr>
	</tbody>
	</table>

	<?php
		include_once('StudentDataProfileResult.php');
	?>

<!-- Footer Section -->
<?php include 'footer.php' ?>
	
	
</body>
</html>