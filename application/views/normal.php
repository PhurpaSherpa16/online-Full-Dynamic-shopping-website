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
	<style> 
		body{
    	margin-top:20px;
		}
		#dp{
			background-color: #e8eef7;
		}
		#dp li a{
			font-family: Aerial, helvetica, sans-serif; 

		}
		
		
	</style>
	<script>
		$(document).ready(function(e){
    	$('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
		});
		});
		
		function search(){
					document.getElementById('search').innerHTMl;
					document.getElementById('search').value;
		}

	</script>
</head>

<body>
	<!-- NAV AREA -->
	<?php include("Normalnav.php"); ?>
 	<!-- body part -->
 	<div class="container" style="min-height: 400px;">
 	<div class="col-lg-12 col-sm-12 col-xs-12" >
			<div >
				<h1 style="text-align:center;">Welcome Normal <?php echo $user_data->fname." ".$user_data->lname;?></h1>
			</div>
		<div class="container" style="background-color: ;">
    		
    		<form action="<?php echo base_url();?>UserController/searchProduct" method="get">
    		<div class="row">    
        	<div class="col-lg-8 col-lg-offset-2" style="background-color: ">
		    <div class="input-group"> 
                <input type="text" class="form-control" name="search" placeholder="Search term...">
                <span class="input-group-btn">
                   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        	</div>
			</div>
			</form>
		</div>
		<div id="box"  class="col-lg-12 col-sm-12 col-xs-12" style="background-color:; border-style: ; margin-top: 20px; margin-bottom: 20px; padding: 20px;" >
			<?php include("NormalGridProduct.php"); ?>
		</div >
		
		</div>
	</div>
	<?php 
		if (isset($message)) {
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
  						<h4 class="modal-title" id="mySmallModalLabel">Information!!!</h4> 
  					</div> 
  					<div class="modal-body"> <?php echo  $message; ?></div>
  				</div> 
  			</div> 
		</div>
	<?php
		}
	?>
   <!-- Footer Part-->
	<?php include('footer.php')?>

</body>

</html>
