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
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Gmail" value="<?php echo $pdata[0]->email;?>" required="required" >
                        <input type="text" hidden name="user_id" value="<?php echo $pdata[0]->id;?>" required="required" >
                </div>
                <div class="col-md-12" style="background-color: ">
                        <label>Current Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Current Address" required="required">
                        <span id="a_error"></span>
                </div>
                <div class="col-md-12 col-sm-12" style="background-color: ">
                        <label>Mobile number</label>
                        <input type="text" class="form-control" id="number" name="number" placeholder="Enter Your Used Phone Number" required="required" >
                        <span id="n_error"></span>
                </div>
                <div class="col-md-12 col-sm-12" style="background-color:; padding: 10px;">
                    <button type="submit" class="btn btn-primary">Order</button>   
                    <a href="<?php echo base_url();?>UserController/index"><button type="button" class="btn btn-danger">Cancel Action</button></a>   
                </div>
                </form>
                </div>
             </div>  
        </div>
        
        <!-- Footer Part-->
        <?php include('footer.php')?>
        <script>
                    $(document).ready(function(){
                    $('#address').on('keyup', function(){
                    if($('#address').val().length < 3){
                    $('#a_error').html('***At least 3 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#a_error').html('');
                    }
                    });
                    }); 
                    
                     $(document).ready(function(){
                    $('#number').on('keyup', function(){
                    if($('#number').val().length < 9){
                    $('#n_error').html('***Mobile Number require at least 9 number').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#n_error').html('');
                    }
                    });
                    }); 
        </script>
</body>

</html>