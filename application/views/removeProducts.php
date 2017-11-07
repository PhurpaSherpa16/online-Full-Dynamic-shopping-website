<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="keywords" content="PHP, HTML, CSS">
	<meta name="description" content="Online Medecinal Food Shopping">
	<meta name="author" content="Phurpa Sherpa">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/interface.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/register.css">
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
	 </script>
	 <!-- body part -->




   <div class="container" style="min-height:300px;">
		 <div class="row">
			 <div class="col-md-8 col-md-offset-2">
				 <h2>Remove Products</h2>
				 <form action="<?php echo base_url(); ?>register/registerUser" method="post" class="register">
           <div class="form-group">
						 <label>Product Type</label>
						 <select class="form-group" name="productsType">
              			<option id="dp" value="meat">Meat</option>
              			<option id="dp" value="herbs">Herbs</option>
              			<option id="dp" value="vegetables">Vegetables</option>
						 </select>
					 </div>

           <div class="form-group">
						 <label>Products Name</label>
             <select class="form-group" name="productsType">
              <option value="#"><?php echo"apple" ?></option>
            </select>
					 </div>

					 <button type="submit" class="btn btn-default">Remove</button>
					<div class="help">
						<?php if (isset($data['register'])) {
							echo $data['register'];
						} ?>
					</div>
				 </form>
			 </div>
		 </div>

  </div>

	<?php include('footer.php')?>
</body>

</html>
