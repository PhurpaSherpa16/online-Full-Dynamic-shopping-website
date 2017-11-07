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
  							<li class="list-group-item" id="oder">How to Add Product?<span class="badge">5</span></li>
  							<li class="list-group-item" id="cart">What the thing I can do as an Admin?<span class="badge">5</span></li> 
  							<li class="list-group-item" id="login">Hot to update product<span class="badge">4</span></li> 
  							<li class="list-group-item" id="register">What the report that I can view?<span class="badge">2</span></li> 
						</ul>
 					</div>
 				</div>
 				<div class="col-lg-9 col-sm-7 col-xs-12" style="background-color: ">
 					<div class="col-lg-12 col-sm-12 col-xs-12" style="min-height: 400px;">
 							<div class="col-lg-12 col-sm-12 col-xs-12" id="dummy" style="min-height: 400px;">
 								<h3>User Help!!!</h3>
 			<pre  style="min-height: 250px;">
 				Hello Admin!! You can get the help from this page.

 			</pre>
 							</div>
 							<div class="col-lg-12 col-sm-12 col-xs-12" id="orderdiv" style="display: none; min-height: 400px;">
 								<h3>Add Product!!!</h3>
 <pre  style="min-height: 250px;">
 	***Note:- for the adding product you need the appropriate name,
 	image and its price as market value.
 	1.First You need to Login 
 	2.Admin portal will display.
 	3. Click on add product in nav bar?
 	4. Fill up the adding form?
 	5. Click on add prodcut button. 
 </pre>
 							</div>
 							<div class="col-lg-12 col-sm-12 col-xs-12" id="cartdiv" style="display: none; min-height: 400px;">
 								<h3>Things Admin Can Do??</h3>
 <pre  style="min-height: 250px;">
 	1.Admin can add product.
 	2.Admin can remove product.
 	3.Admin can update product.
 	4.Admin can view the reports.
 	5.Admin can update him self.
 </pre>
 							</div>
 							<div class="col-lg-12 col-sm-12 col-xs-12" id="logindiv" style="display: none; min-height: 400px;">
 								<h3>Update Product!!!</h3>
 <pre  style="min-height: 250px;">
 	***Note:- for the adding product you need the appropriate name,
 	image and its price as market value.
 	1. Click on update product in nav bar?
 	2. Update the update form?
 	3. Click on update prodcut button. 
 	4. Then you will the certain message.
 </pre>
 							</div>
 							<div class="col-lg-12 col-sm-12 col-xs-12" id="registerdiv" style="display: none; min-height: 400px;">
 								<h3>View report!!!</h3>
<pre  style="min-height: 250px;">
 	1.You can view the customer report and print them.
 	2.You can view the Sales report and print them. 
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

