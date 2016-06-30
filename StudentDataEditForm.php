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
	<select name="gender" value="<?php echo $gender; ?>">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
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
  <select name="hafiz" value="<?php echo $hafiz; ?>">
      <option value="No">No</option>
      <option value="Yes">Yes</option>
    </select>
  <br>
  Cast:<br>
  <input type="text" name="cast" value="<?php echo $cast; ?>" >
  <br>
  Sub Cast:<br>
  <input type="text" name="subcast" value="<?php echo $subcast; ?>" >
  <br>
  <input type="submit" value="Submit" required>

<!-- Footer Section -->
<?php include 'footer.php' ?>
</body>
</html>