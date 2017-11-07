<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="keywords" content="PHP, HTML, CSS">
	<meta name="description" content="Online Medecinal Food Shopping">
	<meta name="author" content="Phurpa Sherpa">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/interface.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/ViewInterfaceProduct.css">
	<script src='<?php echo base_url(); ?>assets/js/jquery.min.js'></script>
	<script src='<?php echo base_url(); ?>assets/js/bootstrap.min.js'></script>
	<title>Online Medecinal Food shopping center</title>
</head>

<body>
	<header style="border: none">
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
							<input type="password" name="password" placeholder="Enter your password" required="required" >
							<button type="submit" class="button1" name="login">Login</button>
							<a href="<?php echo base_url(); ?>Auth/getRegister">Register Now!!</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>

	

<!-- NAV AREA -->
<?php include("nav.php"); ?>

		<!-- body part -->
		<div class="container" >
			<div class="row">
				<div class="col-md-10 col-md-offset-1" style="background:;">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3>Product Details</h3>
						</div>
						<div class="panel-body">
										<?php if ($pdata->num_rows()>0){
											foreach ($pdata->result() as $value) {
												?>
									<div class="row">
									<div class="col-md-6" class="text-center" id="Pimage">
										<div class="well" >
											<div class="box">
												<img src="<?php echo base_url()?>assets/images/products/<?php echo $value->image;?>" id="showImage" class="img-fluid" alt="product Image" height="250px" width="100%">
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group col-md-12">
										<label>Product Name :</label>
										<?php echo $value->pname; ?>
										</div>
										<div class="form-group col-md-12">
											<label>Product Type :</label>
											<?php echo $value->ptype; ?>
										</div>
										<div class="form-group col-md-12">
											<label>Rate/kg :</label>
										<?php echo $value->rate; ?>
										</div>
										<div class="form-group" id="des-div">
											<label>Description :</label>
											<pre><?php echo $value->details; ?></pre>
											<pre>***Note Please login to do any action</pre>
										</div>
									</div>
										
									</div>
												<?php
											}

											}
										else{
												echo '<h1 style="text-align: center; color: #e8491d">Sory, No data Found!!!</h1>';}
										 ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('footer.php')  ?>
</body>

</html>





