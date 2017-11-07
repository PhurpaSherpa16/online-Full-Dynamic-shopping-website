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
					<div class="col-lg-6 left" style="padding-bottom: 10px;">
					<label style="margin-left: -13px;">Rate(NRS)/kg :</label>
					<?php echo $value->rate;?>
					</div>
				<form action="<?php echo base_url();?>UserController/addtoCart" method="post">
					<div class="col-lg-6" style="padding-bottom: 10px;">
					<select name="quantity" id="id" style="width: 100%;" onchange="calc(this.value)" required="required">
						<option value="1">1 kg</option>
						<option value="2">2 kg</option>
						<option value="3">3 kg</option>
						<option value="4">4 kg</option>
						<option value="5">5 kg</option>
					</select>
					</div>
				
					<div class="col-lg-12" style="padding-bottom: 10px;">
						<input type="text" name="user_id" hidden value="<?php echo $user_data->id;?>" style="width: 100%;">
						<input type="text" name="product_id" hidden value="<?php echo $value->id;?>" style="width: 100%;">
						<input type="text" name="image" hidden value="<?php echo $value->image;?>" style="width: 100%;">
						<input type="text" name="product_type" hidden value="<?php echo $value->ptype;?>" style="width: 100%;">	
						<input type="text" name="product_name" hidden value="<?php echo $value->pname;?>" style="width: 100%;">
						<input type="text" id="dummy" disabled hidden name="total_price" style="width: 100%;">
						<input type="text" id="rate" hidden value="<?php echo $value->rate;?>" name="product_rate" style="width: 100%;">
						<input type="text" id="total" disabled placeholder="Total Price is <?php echo $value->rate;?>" style="width: 100%; background-color: white; font-weight: bold; font-size: 17px;">
					</div>
				</div>
				<div class="form-group col-md-12" id="des-div">
					<label>Description :</label>
					<pre><?php echo $value->details; ?></pre>							
				</div>
				<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 " id="des-div">
					<div class="col-lg-4 col-sm-offset-1" style="padding-bottom: 10px;">
						<button type="submit"  class="btn" name="buy">Add to cart</button>	
					</div>			
				</div>
				</form>	
			</div>						
			</div>
						<?php
					}
				}
				else{
						echo '<h1 style="text-align: center; color: #e8491d">Sory, No data Found!!!</h1>';
					}
					?>
			</div>
			</div>
			</div>
		</div>
		</div>
	<?php include('footer.php')  ?>
</body>
</html>

<script>
	//calculation formula of rate * quantity 
	function calc(num){
		var a=document.getElementById('dummy').value=num;
		var c=document.getElementById('rate').value;
		var d=a*c;
		document.getElementById('total').value=d;
		document.getElementById('total').innerHTML=d;
	}


</script>




<!-- <div class="col-lg-4 col-sm-offset-1" style="padding-bottom: 10px;">
					<button type="submit"  class="btn" name="buy">Buy</button>	
					</div>
					<div class="col-lg-5">
					<button type="button" class="btn" name="cart">Add to cart</button>	
					</div>

				-->
