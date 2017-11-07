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

<body>
	<!-- NAV AREA -->
<header>
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
</header>
 	<!-- body part -->
 	<div class="container" style="min-height: 400px;">
 			<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
 				<div class="col-lg-3 col-sm-5 col-xs-12" >
 					<div class="col-lg-12 col-sm-12 col-xs-12" style="background-color: ; min-height: 400px;">
 						<ul class="list-group">
  							<li class="list-group-item" id="oder">How to Order Product?<span class="badge">6</span></li>
  							<li class="list-group-item" id="cart">What are the things can added in cart?<span class="badge">4</span></li> 
  							<li class="list-group-item" id="login">How to Login?<span class="badge">3</span></li> 
  							<li class="list-group-item" id="register">How to Register?<span class="badge">3</span></li> 
						</ul>
 					</div>
 				</div>
 				<div class="col-lg-9 col-sm-7 col-xs-12" style="background-color: ">
 					<div class="col-lg-12 col-sm-12 col-xs-12" style="min-height: 400px;">
 							<div class="col-lg-12 col-sm-12 col-xs-12" id="dummy" style="min-height: 400px;">
 								<h3>User Help!!!</h3>
 			<pre  style="min-height: 250px;">
 				You can get the help from this page.

 			</pre>
 							</div>
 							<div class="col-lg-12 col-sm-12 col-xs-12" id="orderdiv" style="display: none; min-height: 400px;">
 								<h3>Ordering Product!!!</h3>
 <pre  style="min-height: 250px;">
 	1.First You need to Login 
 	2.If you haven't sign up, Your will require to register than Login
 	3.Choose the particular product?
 	4.Then go to cart and check out the procuts, fill up the some personal details 
 	5. After a while you will recive the confirm call then confirm it.
 	6.Your product will be at your door.
 </pre>
 							</div>
 							<div class="col-lg-12 col-sm-12 col-xs-12" id="cartdiv" style="display: none; min-height: 400px;">
 								<h3>Add to Cart Product!!!</h3>
 <pre  style="min-height: 250px;">
 	Product that are display in normal portal that cna be added to cart by 
 	following steps:
 	1.First You need to Login 
 	2.If you haven't sign up, Your will require to register than Login
 	3.Choose the particular product?
 	4.Then add the product to cart by clicking the add to cart button
 </pre>
 							</div>
 							<div class="col-lg-12 col-sm-12 col-xs-12" id="logindiv" style="display: none; min-height: 400px;">
 								<h3>Login process!!!</h3>
 <pre  style="min-height: 250px;">
 	1.Enter the valid email. 
 	2.Enter the valid password
 	3.Then click on login button.
 </pre>
 							</div>
 							<div class="col-lg-12 col-sm-12 col-xs-12" id="registerdiv" style="display: none; min-height: 400px;">
 								<h3>Register process!!!</h3>
<pre  style="min-height: 250px;">
 	1.Click on register Button.
 	2.Fill up the register form
 	3.Click on register.
 </pre>
 							</div>
 					</div>
 				</div>
 			</div>		
	</div>
   <!-- Footer Part-->
	<?php include('footer.php')?>
</body>
</html>

			<script>
				$("#oder").click(function(){
				//alert("cick");
					$("#orderdiv").show();
					$("#cartdiv").hide();
					$("#logindiv").hide();
					$("#registerdiv").hide();
					$("#dummy").hide();
				})

			</script>

			<script>
				$("#cart").click(function(){
				//alert("cick");
					$("#orderdiv").hide();
					$("#cartdiv").show();
					$("#logindiv").hide();
					$("#registerdiv").hide();
					$("#dummy").hide();
				})

			</script>

			<script>
				$("#login").click(function(){
				//alert("cick");
					$("#orderdiv").hide();
					$("#cartdiv").hide();
					$("#logindiv").show();
					$("#registerdiv").hide();
					$("#dummy").hide();
				})

			</script>

			<script>
				$("#register").click(function(){
				//alert("cick");
					$("#orderdiv").hide();
					$("#cartdiv").hide();
					$("#logindiv").hide();
					$("#registerdiv").show();
					$("#dummy").hide();
				})

			</script>

