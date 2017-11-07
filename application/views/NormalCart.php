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
            #checkoutbtn{
                    color: white;
                    background-color: #35424a;
                    font-family: Aerial, helvetica, sans-serif;
                    font-size: 15px;
                    font-weight: bold;
                    width: 200px;
                    height: 30px;
                    margin-left: 30px ;
                    line-height: 1.5;
            }
            #checkoutbtn:hover{
                background:  #e8491d;;
                color: white;
                border:none;
            }
        </style>
</head>

<body>
        <!-- NAV AREA -->
        <?php include("Normalnav.php"); ?>
        <!-- body part -->
        <div class="container" style="min-height: 400px;">
                <table class="table table-striped">
                        <thead>
                                <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Prouct Type</th>
                                        <th>Product Quantity</th>
                                        <th>Product Rate</th>
                                        <th>Remove</th>
                                </tr>
                        </thead>
                        <tbody>
                                   <?php 
      							if (isset($cartdata)) {
       							if ($cartdata->num_rows()>0) {
        						foreach ($cartdata->result() as $value){
        								?>
        							<tr>
        							<td><img src="<?php echo base_url();?>assets/images/products/<?php echo $value->image?>" alt="image" height="100px" width="100px"></td>
         							<td><?php echo $value->product_name?></td>
         							<td><?php echo $value->product_type?></td>
         							<td><?php echo $value->quantity?> kg</td>
         							<td><?php echo $value->product_rate?> Rs/kg</td>
         							<td><a href="<?php echo base_url();?>UserController/remove_ProductFromCart?id=<?php echo $value->id?>&user_id=<?php echo $value->user_id;?>">Remove</a></td>
        							</tr>
         							<?php 
       					 			} 
      								}
      								else{?>
										<tr>
											<td colspan="7"><h1 style="text-align: center; color: #e8491d">Sory, Your cart is empty!!!</h1></td>
										</tr>
          							<?php	
        							}
      									}
      			
       								?>
                        </tbody>
                </table>
                <div class="container">
                <div class="col-lg-12 col-sm-12 col-xs-12" style="min-height: 100px; background-color: ;">
                    
                    <div class="col-lg-3 col-sm-4 col-xs-12 pull-right" style="background-color: ;">
                       <?php
                          if ($cartdata->num_rows()>0) {
                            ?>
                             <a href="<?php echo base_url();?>UserController/check_outProduct?uid=<?php echo $user_data->id;?>"><button id="checkoutbtn" type="button" class="btn btn-outline-primary waves-effect" style="margin-bottom: 20px;">Check Out</button></a>
                            <?php
                          }
                       ?>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-12 pull-right"  style="background-color: ; " >
                        <input disabled type="text" id="form3" class="form-control" value="<?php
                        if($cartdata->num_rows()>0){
                            $num=0; 
                         foreach($cartdata->result() as $value){
                            $num+=($value->product_rate*$value->quantity);
                         }
                         echo "NRs.".$num;
                        }
                        else{
                            echo "No! Data";
                          }   
                        ?>">
                        
                    </div>
                </div>
                </div>
             
        </div>
        <!-- Footer Part-->
        <?php include('footer.php')?>
</body>

</html>