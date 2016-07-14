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
		include_once('StudentResultShow.php');
	?> 
	
	<h4>Enrollment Number: <?php echo $enrollnum; ?></h4><br>
	<h4>Student Name: <?php echo $sname; ?></h4><br>
	<h4>Class: <?php echo $classname; ?></h4><br>
	<h4>Section: <?php echo $sect; ?></h4><br>
	<h4>Term: <?php echo $term; ?></h4><br><br><br><br>
	<table class='pure-table'>
	<thead>
	<tr><th>Examination Year</th>
	<th>Teacher's Name</th><th>Subject 1</th><th>Total Subject 1</th><th>Subject 2</th><th>Total Subject 2</th>
	<th>Subject 3</th><th>Total Subject 3</th><th>Subject 4</th><th>Total Subject 4</th><th>Subject 5</th>
	<th>Total Subject 5</th></tr>
	</thead>
	
	
	<tbody>
	<tr><td><?php echo $examdate; ?></td><td><?php echo $tname; ?></td><td><?php echo $sub1; ?></td>
	<td><?php echo $tsub1; ?></td><td><?php echo $sub2; ?></td><td><?php echo $tsub2; ?></td>
	<td><?php echo $sub3; ?></td><td><?php echo $tsub3; ?></td><td><?php echo $sub4; ?></td>
	<td><?php echo $tsub4; ?></td><td><?php echo $sub5; ?></td><td><?php echo $tsub5; ?></td></tr>
	</tbody>
	
	</table>
	
<!-- Footer Section -->
<?php include 'footer.php' ?>
</body>
</head>