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

	<div class="container">
		 <div class="row">
			 <div class="col-md-8 col-md-offset-2">
				 <h2>Register form</h2>
				 <form action="<?php echo base_url(); ?>AdminController/profileUpdate" method="post" class="register">
				 	<?php if ($pdata->num_rows()>0){
						foreach ($pdata->result() as $value) 
						{
					?>
					 <div class="form-group">
						 <label>First Name</label>
						 <input type="text" name="id" value="<?php echo $value->id; ?>" style="display: none;" >
						 <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" autocomplete="off" value="<?php echo $value->fname; ?>" required="required" >
						 <span id="f_error"></span>
					 </div>
					 <div class="form-group">
						 <label>Last Name</label>
						 <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" autocomplete="off" value="<?php echo $value->lname; ?>" required="required" >
						 <span id="l_error"></span>
					 </div>
					 <div class="form-group">
						 <label for="email" hidden>Email:</label>
						 <input type="email" class="form-control" id="email" name="email" style="display: none" autocomplete="off" placeholder="Enter email" value="<?php echo $value->email; ?>" required="required">
					 </div>
					 <div class="form-group">
						 <label>Address:</label>
						 <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" autocomplete="off" value="<?php echo $value->address; ?>" required="required" >
						 <span id="a_error"></span>
					 </div>
					 <div class="form-group">
						 <label>Phone Number:</label>
						 <input type="number" min="1" class="form-control" id="phonenumber" name="phonenumber" min="0" placeholder="Enter Phone number" autocomplete="off" value="<?php echo $value->phone; ?>" required="required" >
						 <span id="p_error"></span>
					 </div>
					 <div class="form-group">
						 <label>Password:</label>
						 <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php echo $value->password; ?>" required="required">
						 <span id="pas_error"></span>
					 </div>
					 	<?php
							}
						} ?>
					 <button type="submit" class="btn btn-default">Submit</button>
					<div class="help">
						<?php if (isset($data['register'])) {
							echo $data['register'];
						} ?>
					</div>
				 </form>
			 </div>
		 </div>
  </div>

  <script>
  					$(document).ready(function(){
					$('#firstname').on('keyup', function(){
					if($('#firstname').val().length < 3){
					$('#f_error').html('***At least 3 character require').css('color', 'red');
					$(':input[type="submit"]').prop('disabled', true);
						return;
					}
					else{
						$(':input[type="submit"]').prop('disabled', false);
						$('#f_error').html('');
					}
					});
					});

					$(document).ready(function(){
					$('#lastname').on('keyup',function(){
						if ($('#lastname').val().length<3){
						$('#l_error').html('***At least 3 character require').css('color','red');
						$(':input[type="submit"]').prop('disabled',true);
						return;
						}
						else{
							$(':input[type="submit"]').prop('disabled',false);
							$('#l_error').html('');
						}
					});
					});

					$(document).ready(function(){
					$('#address').on('keyup',function(){
					if ($('#address').val().length<3){
						$('#a_error').html('***Address need at least 3 character').css('color','red');
						$(':input[type="submit"]').prop('disabled',true);
						return;
					}	
					else{
						$(':input[type="submit"]').prop('disabled',false);
						$('#a_error').html('');
					}
					});
					});

					$(document).ready(function(){
					$('#phonenumber').on('keyup',function(){ 
						if ($('#phonenumber').val().length<9){
						$('#p_error').html('***At least 9 number require').css('color','red');
						$(':input[type="submit"]').prop('disabled',true);
						return;
					}
					else{
						$(':input[type="submit"]').prop('disabled',false);
						$('#p_error').html('');
					}
					});
					});

					$(document).ready(function(){
					$('#password').on('keyup',function(){
					if ($('#password').val().length<5){
						$('#pas_error').html('***At least 5 character require').css('color','red');
						$(':input[type="submit"]').prop('disabled',true);
						return;
					}
					else{
						$(':input[type="submit"]').prop('disabled',false);
						$('#pas_error').html('');
					}
					});
					});

  </script>
<?php include("footer.php"); ?>
</body>

</html>



