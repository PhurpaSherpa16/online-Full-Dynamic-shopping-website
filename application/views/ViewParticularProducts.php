<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="keywords" content="PHP, HTML, CSS">
	<meta name="description" content="Online Medecinal Food Shopping">
	<meta name="author" content="Phurpa Sherpa">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/interface.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/viewParticular.css">
	<?php include("script.php") ?>
	<title>Online Medecinal Food shopping center</title>
</head>

<body>
	<!-- Nav Area -->
	<header style="border-bottom: none">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12" style="background-color:#;">
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
	
	<!-- Body Part (Boxes part) -->
			<div id="container" class="container" style="background: #; padding: 10px; padding-left: 20px;">
			<?php 
				if ($product_data->num_rows()>0){
					foreach ($product_data->result() as $data) {
						?>
							<div id="box"  class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				 			<div id="thumbnail" class="thumbnail" style="background: #;">
				 				<img id="viewImages" src="<?php echo base_url();?>assets/images/products/<?php echo $data->image ?>" alt="products">
				 				<div class="caption">
				 					<h4><?php echo $data->pname;?></h4>
									<a href="<?php echo base_url();?>AdminController/display_Product?id=<?php  echo $data->id;?>"><button id="btn" class="btn btn-primary">View</button></a>
				 				</div>
				 			</div>
						 	</div>
						<?php
					}
				}
				else {
					?>
						<h1 style="text-align: center; color: #e8491d">Sory, No data Found!!!</h1>
				<?php }
				?>
			</div>
	<!--footer -->
	<?php include('footer.php');?>
</body>