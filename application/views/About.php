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
	<title>Online Medecinal Food shopping center</title>
</head>
<body>
	<!-- NAV AREA -->
<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#;">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 " style="background-color:#;">
						<div id="branding" class="page_header" >
							<h1><span class="hightlight">Online</span> Medecinal Food Shopping</h1>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 " style="background-color:;">
						<form method="post" action="<?php echo base_url(); ?>Auth/loginCheck" >
							<input type="email" name="email" placeholder="Enter your email" required="required">
							<input type="password" name="password" placeholder="Enter your password" required="required">
							<button type="submit" class="button1" name="login">Login</button>
							<a href="<?php echo base_url(); ?>Auth/getRegister">Register Now!!</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>
 	<!-- body part -->
 	<div class="container" style="min-height: 400px;">
<!-- First Container -->
	<div class="container-fluid bg-1 text-center">
		<div class="col-lg-10 col-sm-12 col-xs-12" style="background-color: #8eafe5; border-radius: 5px; margin: 10px;">
			<div class="col-lg-7 col-sm-12 col-xs-12">
			<h3 class="margin">What is online medecinal Food Shopping?</h3>
			<span>Online Medicinal Food Shopping is the food management system, which will deliver food products to customer and get the order form the different customer. This web base application will helps the people to buy the foods product from the online market where we provide them a product according to their demand. These types of online market is not much available in our country though available, in comparison to our website they do not provide the full details and information to customer about their healthy factor and side effect factor by consuming them in wrong way.</span>
			</div>
			<div class="col-lg-5 col-sm-12 col-xs-12">
				<img src="<?php echo base_url();?>Assets/images/logo.png" alt="image" height="250px" width="300px;">
			</div>
		</div>
		<div class="col-lg-10 col-sm-12 col-xs-12 pull-right" style="background-color: #8ee598;border-radius: 5px; margin: 10px;">
			<div class="col-lg-5 col-sm-12 col-xs-12">
				<img src="<?php echo base_url();?>Assets/images/aims.png" alt="image" height="250px" width="300px;">
			</div>
			<div class="col-lg-7 col-sm-12 col-xs-12">
			<h3 class="margin">What is its Aims?</h3>
			<p style="text-align: left;">•To earn the profit in business.</p>
			<p style="text-align: left;">•To provide easy shopping station and service.</p>
			<p style="text-align: left;">•To spread the knowledge and information about medicinal foods.</p>
			<p style="text-align: left;">•To provide the quality of products.</p>
			</div>
		</div>
		<div class="col-lg-10 col-sm-12 col-xs-12" style="background-color: #edc297; border-radius: 5px; margin: 10px;">
			<div class="col-lg-7 col-sm-12 col-xs-12">
			<h3 class="margin">What is our objectives?</h3>
			<span>Health is define as the state of being physically and mentally fit or fine. Health plays a vital role for the development of infrastructure. For doing our work and to live a happy life we all need to be healthy. Education about health is important for being healthy. This type of education need to be known by the all the people. Healthy people can act and think rationally by which county can moves forward to the development steps
			For such development movement, this website will provide the service and information to people about food and their medicinal cure.
			</span>
			</div>
			<div class="col-lg-5 col-sm-12 col-xs-12">
				<img src="<?php echo base_url();?>Assets/images/obj.png" alt="image" height="250px" width="300px;">
			</div>
  			
		</div>
	</div>
</div>
   <!-- Footer Part-->
	<?php include('interfacefooter.php')?>
</body>
</html>
