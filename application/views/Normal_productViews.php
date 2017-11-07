<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="keywords" content="PHP, HTML, CSS">
	<meta name="description" content="Online Medecinal Food Shopping">
	<meta name="author" content="Phurpa Sherpa">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/interface.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/box.css">
  	<link rel="stylesheet" href="<?php echo base_url();?>assets/boo.css" rel="stylesheet">
	<script src='<?php echo base_url(); ?>assets/js/jquery.min.js'></script>
	<script src='<?php echo base_url(); ?>assets/js/bootstrap.min.js'></script>
	<title>Online Medecinal Food shopping center</title>
</head>
<body>
	<!-- NAV AREA -->
	<?php include("Normalnav.php"); ?>

 	<!-- body part -->
  	<?php include("NormalGridProduct.php");?>
   <!-- Footer Part-->
	<?php include('footer.php')?>

</body>
</html>
