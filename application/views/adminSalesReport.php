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
	<script src='<?php echo base_url(); ?>assets/js/bootstrap.js'></script>
  	<link href="<?php echo base_url();?>assets/new/css/mdb.min.css" rel="stylesheet">
  	<link href="<?php echo base_url();?>assets/new/css/style.css" rel="stylesheet">
	<title>Online Medecinal Food shopping center</title>
</head>
<style>
   		#viewImages{
   			height: 180px;
   			width: 100%
   		}
   		#thumbnail{

   		}
   		h3{
   			color: white;
   		}
		#btn{
			background: #e8491d;
			width: 100px;
			height: 30px;
		}
		#btn{
			color: white;
			font-size: 15px;
			line-height: 0;
		}
		#btn:hover{
			background: white;
			color: blue;
		}
		table tr th, table tr td{
			font-size: 17px;
		}
  </style>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:#;">
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
  <body>
 <!-- body part -->
		<div class="container" style="background: ; padding: 10px; padding-left: 20px; min-height: 400px;">
					<div class="container">
					<a style="float: right;" title="print screen" alt="print screen" onclick="window.print()" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true">Print</span>
					</a>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<h2>Sales Report Table</h2>
					</div>
					<div class="col-lg-8 col-sm-9 col-xs-12">
						<form action="<?php echo base_url(); ?>AdminController/salesDatabyDate" method="get">
						<div class="col-lg-5 col-sm-5 col-xs-12">
							<input type="date" name="date1" style="font-size: 17px; margin-top: 20px;" required="required">
						</div>
						<div class="col-lg-7 col-sm-5 col-xs-12">
							<div class="col-lg-8 col-sm-8 col-xs-12">
							<input type="date" name="date2" required="required" style="font-size: 17px; margin-top: 20px;" >
							</div>
							<div class="col-lg-4 col-sm-4 col-xs-12">
							<input type="submit" id="submit" value="Search" class="btn btn-success" style="font-size: 15px; background-color: #e8491d">
							</div>
						</div>
						</form>	
					</div>
					<div class="col-lg-12 col-sm-12 col-xs-12" style="margin-top: 20px; border-top: 2px solid #e8491d;">
						</script>
					<div id="Secondtable"class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
						<tr>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Email</th>
							<th>Delivery Address</th>
							<th>Phone number</th>
							<th>Product buy name</th>
							<th>Qty</th>
							<th>Rate</th>
							<th>total</th>
						</tr>
						</thead>
						<?php
						if (isset($datedata)) {
							if ($datedata->num_rows()>0){
							foreach ($datedata->result() as $custdata) {
							?>
						<tbody>
						<tr>
							<td><?php echo $custdata->fname;?></td>
							<td><?php echo $custdata->lname;?></td>
							<td><?php echo $custdata->email;?></td>
							<td><?php echo $custdata->delivery_address;?></td>
							<td><?php echo $custdata->mobile_number;?></td>
							<td><?php echo $custdata->pname;?></td>
							<td><?php echo $custdata->qty;?></td>
							<td><?php echo $custdata->rate;?></td>
							<td><?php echo $custdata->order_date;?></td>
						</tr>
						</tbody>
						<?php } }
						else{
							echo '<tr><td colspan=9><h1 style="text-align: center; color: #e8491d">Sory, No data Found!!!</h1></td></tr>';
							}
							}
							else{
							echo '<tr><td colspan=9><h1 style="text-align: center; color: #e8491d">Choose the date from calander!!!</h1></td></tr>';
							} ?>
						</table>
					</div>
					</div>
					</div>	
		</div>
   <!-- Footer Part-->
	<?php include('footer.php');?>
</body>

</html>
