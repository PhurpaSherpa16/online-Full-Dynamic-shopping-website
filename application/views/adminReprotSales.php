<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="keywords" content="PHP, HTML, CSS">
	<meta name="description" content="Online Medecinal Food Shopping">
	<meta name="author" content="Phurpa Sherpa">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/interface.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin.css">
	<script src='<?php echo base_url(); ?>assets/js/jquery.min.js'></script>
	<script src='<?php echo base_url(); ?>assets/js/bootstrap.min.js'></script>
  	<link href="<?php echo base_url();?>assets/new/css/mdb.min.css" rel="stylesheet">
  	<link href="<?php echo base_url();?>assets/new/css/style.css" rel="stylesheet">
	<title>Online Medecinal Food shopping center</title>
</head>
<style>
   		#viewImages{
   			height: 180px;
   			width: 100%
   		}
   		#thumbnail{

   		}
   		h3{
   			color: white;
   		}
		#btn{
			background: #e8491d;
			width: 100px;
			height: 30px;
		}
		#btn{
			color: white;
			font-size: 15px;
			line-height: 0;
		}
		#btn:hover{
			background: white;
			color: blue;
		}
  </style>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#;">
					<div class="col-sm-6" style="background-color:#;">
						<div id="branding" class="page_header">
							<h1><span class="hightlight">Online</span> Medecinal Food Shopping</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- NAV AREA -->
		<?php include("adminnav.php"); ?>
	</header>
  <body>
 <!-- body part -->
		<div class="container" style="background: ; padding: 10px; padding-left: 20px; min-height: 400px;">
				 <div  class="col-lg-3 col-sm-4 col-xs-12">
				 	<div id="thumbnail" class="thumbnail" style="background: #;">
				 		<img id="viewImages" src="<?php echo base_url();?>assets/images/cus.jpg" alt="Fruits" style="background-color: white">
				 		<div class="caption">
				 			<h3>View Of Customer</h3>
				 			<a href="<?php echo base_url();?>AdminController/customerData"><button id="btn" class="btn btn-primary">View</button></a>
				 		</div>
				 	</div>
				 </div>
				 <div  class="col-lg-3 col-sm-4 col-xs-12">
				 	<div id="thumbnail" class="thumbnail">
				 		<img id="viewImages" src="<?php echo base_url();?>assets/images/sales.jpg" alt="Fruits">
				 		<div class="caption">
				 			<h3>View Of Sales</h3>
				 			<a href="<?php echo base_url();?>AdminController/salesData"><button id="btn" class="btn btn-primary">View</button></a>
				 		</div>
				 	</div>
				 </div>
		</div>
   <!-- Footer Part-->
	<?php include('footer.php');?>
</body>

</html>
