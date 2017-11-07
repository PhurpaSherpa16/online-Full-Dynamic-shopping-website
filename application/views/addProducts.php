<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="keywords" content="PHP, HTML, CSS">
	<meta name="description" content="Online Medecinal Food Shopping">
	<meta name="author" content="Phurpa Sherpa">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/interface.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/register.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/ViewInterfaceProduct.css">
	<script src='<?php echo base_url(); ?>assets/js/jquery.min.js'></script>
	<script src='<?php echo base_url(); ?>assets/js/bootstrap.min.js'></script>
	<title>Online Medecinal Food shopping center</title>
</head>

<body>
	<header style="border-bottom: none;">
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

		<!-- body part -->
			<?php include('addProductForm.php')  ?>

		<!-- form -->
		<?php include('footer.php')  ?>

		<script>
			$("#upimage").change(function(e) {
				for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
					var file = e.originalEvent.srcElement.files[i];
					var img = document.getElementById('showImage');
					var reader = new FileReader();
					reader.onloadend = function() {
						img.src = reader.result;
					}
					reader.readAsDataURL(file);
					$("#upimage").before(img);
				}
			});
		</script>
</body>

</html>

<?php 
		if (isset($addProductError)) {
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
  					<div class="modal-body"> <?php echo  $addProductError; ?></div>
  				</div> 
  			</div> 
		</div>
	<?php
		}
	?>

