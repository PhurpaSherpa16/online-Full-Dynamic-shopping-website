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
	<?php
		if (isset($product)) {
			echo '<div class="col-md-8 alert alert-success alert-dismissable" id="flash-msg">
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
			<h4><i class="icon fa fa-check"></i>'.$product.'</h4>
			</div>';
		}

	?>
		<script>
			$(document).ready(function() {
				$("#flash-msg").delay(10000).fadeOut("slow");
			});
		</script>
		<!-- body part -->
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1" style="background:;">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>Update Products form</h2>
						</div>
			<div class="panel-body">
				<form action="<?php echo base_url();?>ProductContorller/update_Product" method="post" class="register" enctype="multipart/form-data">
					<?php if ($pdata->num_rows()>0){
						foreach ($pdata->result() as $value) {
					?>
			<div class="row">
				<div class="col-md-5">
					<div class="form-group col-md-12">
						<input type="text" name="id" hidden value="<?php echo $value->id;?>">
						<label>Product Name</label>
						<input id="pname" type="text" class="form-control" placeholder="Product name" name="pname" value="<?php echo $value->pname; ?>" required="required">
						</div>
						<span id="perrMsg"></span>
					<div class="form-group col-md-12">
						<label>Product Type</label>
						<select class="form-control" name="ptype" required="required">
						<option id="dp" value="meat"<?php if ($value->ptype=='meat'){echo "selected";}?>>Meat</option>
						<option id="dp" value="herbs" <?php if ($value->ptype=='herbs'){echo "selected";}?>>Herbs</option>
						<option id="dp" value="vegetables" <?php if ($value->ptype=='vegetables'){echo "selected";}?>>Vegetables</option>
						<option id="dp" value="fruits" <?php if ($value->ptype=='fruits'){echo "selected";}?>>Fruit</option>
						</select>
					</div>
					<div class="form-group col-md-12">
						<label>Rate/kg</label><br>
						<input type="number" class="form-control" name="rate" placeholder="Enter the amount" value="<?php echo $value->rate; ?>" required="required">
					</div>
					<div class="form-group" id="des-div">
						<label>Description</label>
						<textarea rows="10" class="form-control" name="desc" id="description" name="description" placeholder="Enter the description of products" required="required"><?php echo $value->details; ?></textarea>
						<span id="desc_error"></span>
					</div>
				</div>
			</div>
					<?php
					}
					} ?>
				<div class="col-md-6" style="background:; margin-left:200px;">
					<button type="submit" class="btn btn-default" >Update</button>
				</div>
				</form>
				</div>
				</div>
				</div>
			</div>
		</div>
		<?php include('footer.php')  ?>
		<script type="text/javascript">
			$(document).ready(function(){
			$('#pname').on('keyup', function(){
				if($('#pname').val().length < 4){
				$('#perrMsg').html('Product Name can not be short than 4 characters!').css('color', 'red');
				$(':input[type="submit"]').prop('disabled', true);
				return;
				}
					else{
						$(':input[type="submit"]').prop('disabled', false);
						$('#perrMsg').html('');
					}
				});

			$('#description').on('keyup', function(){
				if($('#description').val().length < 20){
				$('#desc_error').html('Product details can not be short than 20 characters!').css('color', 'red');
					$(':input[type="submit"]').prop('disabled', true);
					return;
					}
					else{
						$(':input[type="submit"]').prop('disabled', false);
						$('#desc_error').html('');
					}
				});

			});

		</script>
</body>

</html>





