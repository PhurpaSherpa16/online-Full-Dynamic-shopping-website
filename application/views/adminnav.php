<nav id="nav">
 <div class="container-fluid" style="border-bottom: 5px solid #e8491d;">
   <div class="row">
     <div class="col-sm-12" style="background-color:;">
       <ul class="nav nav-tabs" style="border:none;">
         <li role="presentation" ><a href="<?php echo base_url();?>AdminController" class="" >Home</a></li>
         <li role="presentation" ><a href="<?php echo base_url();?>AdminController/getAddProduct" class="">Add Products</a></li>
         <li role="presentation" ><a href="<?php echo base_url();?>AdminController/viewProducts" class="">View Products</a></li>
         <li role="presentation" ><a href="<?php echo base_url();?>AdminController/getUpdateProduct" >Update Products</a></li>
         <li role="presentation" ><a href="<?php echo base_url();?>AdminController/report">View Report</a></li>
           <li id="dropdown" role="presentation" class="dropdown" style="float:right;">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <?php echo $user_data->fname.' '.$user_data->lname ?>
              </a>
             <ul class="dropdown-menu" style="margin-left:-68px;">
               <li role="presentation"><a href="<?php echo base_url();?>AdminController/update_profile?id=<?php echo $user_data->id;?>">Update Profile</a></li>
               <li role="presentation"><a href="<?php echo base_url();?>AdminController/logout">Log Out</a></li>
             </ul>
           </li>
       </ul>
     </div>
   </div>
 </div>
</nav>
