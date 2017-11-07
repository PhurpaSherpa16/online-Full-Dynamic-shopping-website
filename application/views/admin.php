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
<style>
	#a span:hover{
    color:#e8491d;
  }
</style>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12" style="background-color:#;">
					<div class="col-sm-6" style="background-color:#;">
						<div id="branding" class="page_header">
							<h1><span class="hightlight">Online</span> Medecinal Food Shopping</h1>
						</div>
					</div>
					<a id="a" href="<?php echo base_url();?>AdminController/Help" style="color: white"><span class="glyphicon glyphicon-question-sign" style="float:right;" aria-hidden="true">Help</span></a>
				</div>
			</div>
		</div>

		<!-- NAV AREA -->
		<?php include("adminnav.php"); ?>

	</header>

 <!-- body part -->
  <div class="welcome">
		<h1 style="text-align:center;">Welcome Admin <?php echo $user_data->fname ?></h1>
	</div>
   <!-- Footer Part-->
	<?php include('footer.php')?>
</body>

</html>

	<?php 
		if (isset($message)) {
	?>
		<button type="button" id="msg" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" style="display: none"></button>
		 <script>
		 $(document).ready(function () {
		     $("#msg").click();
		 });
	 	</script>
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  			<div class="modal-dialog modal-sm" role="document"> 
  				<div class="modal-content"> 
  					<div class="modal-header"> 
  						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
  						</button> 
  						<h4 class="modal-title" id="mySmallModalLabel">Update Information</h4> 
  					</div> 
  					<div class="modal-body"> <?php echo  $message; ?></div>
  				</div> 
  			</div> 
		</div>
	<?php
		}
	?>

