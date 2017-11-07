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
	<style>
		.btn{
			background-color: #35424a ;
			width: 80px;
			height: 30px;
			color: white;
			font-family: Aerial, helvetica, sans-serif;
  			font-size: 15px;
  			line-height: 1.5;
		}
		.btn:hover{
			background-color: #e8491d;
			color: #d5d9e0;

		}
	</style>
</head>

<body>
		<?php include("Normalnav.php"); ?>
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
				<div class="form-group col-md-12" id="des-div">
					<label>Description :</label>
					<pre><?php echo $value->details; ?></pre>
											
				</div>

				<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 " id="des-div">
					<div class="col-lg-4 col-sm-offset-1" style="padding-bottom: 10px;">
						<button type="submit" class="btn" name="buy">Buy</button><br>	
					</div>
					<div class="col-lg-5">
						<button type="sbumit" class="btn" name="cart">Add to cart</button>	
					</div>					
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





