<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="keywords" content="PHP, HTML, CSS">
	<meta name="description" content="Online Medecinal Food Shopping">
	<meta name="author" content="Phurpa Sherpa">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/interface.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fa/css/font-awesome.css"></link>
  	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/box.css">
  	<link rel="stylesheet" href="<?php echo base_url();?>assets/boo.css" rel="stylesheet">
	<script src='<?php echo base_url(); ?>assets/js/jquery.min.js'></script>
	<script src='<?php echo base_url(); ?>assets/js/bootstrap.min.js'></script>
	<title>Online Medecinal Food shopping center</title>
	<style>
	.nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
   background-color: #35424a;
    border-color: ;
}
	</style>
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

	<section id="showcase" style="background:url('<?php echo base_url(); ?>assets/images/showcase1.jpg') no-repeat 0 -400px;">

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12" style="background-color:;">
					<div class="col-sm-12" style="background-color:;">
						<h1>Welcome To our Food Shoping</h1>
						<p>Apples are red, berries are blue, pears are sweet and they are all good for you.</p>
						<p>Be healthy and stay safety!!</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- NAV AREA -->
	<?php include("nav.php"); ?>

<!-- Products in Grid View -->
	<?php include("Grid_Product.php"); ?>

<!-- Footer -->
	<?php include('interfacefooter.php')?>

	<button type="button" class="hidden" data-toggle="modal" id="openLoginError" data-target="#myModal"></button>
<!--Login error Modal -->

<?php
if (isset($_SESSION['login'])) {
	echo "<script>
				$( document ).ready(function() {
				    $('#openLoginError').click();
				});
			</script>";
}
?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Error!!!</h4>
      </div>
      <div class="modal-body">
        <?php
				if (isset($_SESSION['login'])) {
					echo $_SESSION['login'];
        }
				?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>

</html>
