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
</head>
<body>
	<header>
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
							<input type="password" name="password" placeholder="Enter your password" required="required">
							<button type="submit" class="button1" name="login">Login</button>
							<a href="<?php echo base_url(); ?>Auth/getRegister">Register Now!!</a>
						</form>
					</div>
				</div>
			</div>
		</div>
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
   <div class="container">
		 <div class="row">
			 <div class="col-md-8 col-md-offset-2">
				 <h2>Register form</h2>
				 <form action="<?php echo base_url(); ?>Auth/registerUser" method="post" class="register">
					 <div class="form-group">
						 <label>First Name</label>
						 <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" autocomplete="off" required="required" >
						 <span id="f_error"></span>
					 </div>
					 <div class="form-group">
						 <label>Last Name</label>
						 <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" autocomplete="off" required="required" >
						 <span id="l_error"></span>
					 </div>
					 <div class="form-group">
						 <label for="email">Email:</label>
						 <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required"  >
					 </div>
					 <div class="form-group">
						 <label>Address:</label>
						 <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required="required" >
						 <span id="a_error"></span>
					 </div>
					 <div class="form-group">
						 <label>Phone Number:</label>
						 <input type="number" class="form-control" id="phonenumber" name="phonenumber" min="0" autocomplete="off" placeholder="Enter Phone number" required="required" min="0">
						 <span id="p_error"></span>
					 </div>
					 <div class="form-group">
						 <label>Password:</label>
						 <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required="required">
						 <span id="pas_error"></span>
					 </div>
					 <button type="submit" class="btn btn-default">Submit</button>
					 <button type="reset" class="btn btn-default">Reset</button>
					<div class="help">
						<?php if (isset($data['register'])) {
							echo $data['register'];
						} ?>
					</div>
				 </form>
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
			 </div>
		 </div>
  </div>
	<?php include('footer.php')?>
</body>
</html>

