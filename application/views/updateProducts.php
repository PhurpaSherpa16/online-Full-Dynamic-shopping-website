<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="keywords" content="PHP, HTML, CSS">
	<meta name="description" content="Online Medecinal Food Shopping">
	<meta name="author" content="Phurpa Sherpa">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/interface.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/register.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/viewParticular.css">
	<script src='<?php echo base_url(); ?>assets/js/jquery.min.js'></script>
	<script src='<?php echo base_url(); ?>assets/js/bootstrap.min.js'></script>
	<title>Online Medecinal Food shopping center</title>
  <style media="screen">
  select{
    width: 200px;
    height: 30px;
    font-style: italic;
    font-family: sans-serif;
    margin-left: 30px;
    color: black;
    color: grey;
    border-radius: 4px;
  }
  #btn:hover {
    background: white;
    color: #35424a;
}
  </style>
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
		if (isset($register)) {
			echo '<div class="col-md-8 alert alert-success alert-dismissable" id="flash-msg">
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
			<h4><i class="icon fa fa-check"></i>'.$register.'</h4>
			</div>';
		}
	?>
	 <script>
		 $(document).ready(function () {
		     $("#flash-msg").delay(10000).fadeOut("slow");
		 });
		 var specific_pt_data;
		 $(document).ready(function() {

		 	$('#option_val').on('change', function() {
		 		var pt = $('#option_val').val();
		 		console.log(pt);
		 		var url = '<?php echo base_url(); ?>AdminController/updateProductsValue';

		 		$.ajax({
		 			url:url,
		 			method: "GET",
		 			data: {name:pt},
		 			success: function(result) {
		 				console.log(result);
		 				specific_pt_data = result;
		 				$('#pname').empty();
		 				$('#pname').append($('<option disabled selected>', {
		 						value: '11',
		 						text : 'choose one'
		 					}));
		 				$('#product_cont').empty();
		 				for (var i = 0; i < result.length; i++) {
		 					var p = result[i];
		 					
		 					$('#pname').append($('<option>', {
		 						value: p['id'],
		 						text : p['pname']
		 					}));

		 					load_data(p);

		 				}
		 			}
		 		});

		 	});
		 	$('#pname').on('change', function() {
		 		var p_id = $('#pname').val();
		 		console.log(p_id);
		 		$('#product_cont').empty();
		 		for (var i = 0; i < specific_pt_data.length; i++) {
		 			var p = specific_pt_data[i];
		 			if (p['id'] == p_id) {
		 				load_data(p);
		 			}
		 		}
		 	});


		 });


		 function load_data(product) {
		 	console.log(product);

		 	$('#product_cont').append("<div id='box'  class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>"+
		 		"<div id='thumbnail' class='thumbnail'>"+
		 		"<img id='viewImages' src='<?php echo base_url();?>assets/images/products/"+product['image']+"' alt='products' height='200px'>"+
				"<div class='caption'>"+
				"<h4>"+product['pname']+"</h4>"+
				"<a href='<?php echo base_url();?>AdminController/display_Product?id="+product['id']+"'><button id='btn' class='btn btn-primary'>View</button></a><br><br>"+
				"<a href='<?php echo base_url();?>AdminController/deleteProduct?id="+product['id']+"'><button id='btn' class='btn btn-primary'>Delete</button></a>"+
				"</div>"+
		 		"</div>"+
		 		"</div>");
		 }
	 </script>
	 <!-- body part -->
   <div class="container" style="min-height: 400px;" >
		<div class="row">
		 	<div class="col-lg-12 col-sm-12 col-xs-12">
		 		<h2>Update Products</h2>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<label>Product Type</label>
						<select id="option_val"  name="productsType">
              			<option value="none" >None</option>
              			<option value="meat" >Meat</option>
              			<option value="herbs">Herbs</option>
              			<option value="Fruits" >Fruits</option>
              			<option value="vegetables">Vegetables</option>
						</select>
						<div id="myDiv" hidden></div>
				</div>
		 		 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<label>Products Name</label>
             		<select class="form-group" id="pname" name="product">           			
            		</select>

				</div>
			
		 	</div>

			<!-- View By Product Type only division -->
		 	<div id="product_Type" class="col-lg-12 col-sm-12 col-xs-12" style="min-height: 200px; background-color: #" >
				<div id="product_cont" class="container" style="background: #; padding: 10px; padding-left: 20px;">
				</div>
		 	</div>

			<!-- View By Product Name only division -->

		</div>
  	</div>
		<!-- Extra -->
	<?php include('footer.php');?>
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
