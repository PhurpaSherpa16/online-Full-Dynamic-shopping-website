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
           
        </style>
</head>
<?php  if ($pdata->num_rows()>0) {
            foreach ($pdata->result() as $value) {
                
            }
} ?>

<body>
        <!-- NAV AREA -->
        <?php include("Normalnav.php");?>
        <!-- body part -->
        <div class="container" style="min-height: 400px;background-color: ;">
             <div class="row" style="margin-top: 20px;">
                <div class="col-md-6 col-md-offset-3">
                <form class="form-group" method="post" action="<?php echo base_url();?>UserController/orderProduct">
                <div class="col-md-12 col-sm-12" style="background-color: ">
                        <label>Gmail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Gmail" value="<?php echo $value->email;?>" required="required" >
                        <input type="text" hidden name="user_id" value="<?php echo $value->id;?>" required="required" >
                </div>
                <div class="col-md-12" style="background-color: ">
                        <label>Current Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Current Address" required="required" >
                </div>
                <div class="col-md-12 col-sm-12" style="background-color: ">
                        <label>Mobile number</label>
                        <input type="text" class="form-control" id="number" name="number" placeholder="Enter Your Used Phone Number" required="required" >
                </div>
                <div class="col-md-12 col-sm-12" style="background-color:; padding: 10px;">
                    <button type="submit" class="btn btn-primary">Submit</button>   
                </div>
                </form>
                </div>
             </div>  
        </div>
        <!-- Footer Part-->
        <?php include('footer.php')?>
</body>

</html>