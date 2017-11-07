<style>
  #a span:hover{
    color:#e8491d;
  }
</style>
<header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12" style="background-color:#;">
          <div class="col-sm-6" style="background-color:#;">
            <div id="branding" class="page_header">
              <h1><span class="hightlight">Online</span> Medecinal Food Shopping</h1>
            </div>
          </div>
          <a id="a" href="<?php echo base_url();?>UserController/Help" style="color: white"><span class="glyphicon glyphicon-question-sign" style="float:right;" aria-hidden="true">Help</span></a>
        </div>
      </div>
    </div>
<nav id="nav">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" style="background-color:;">
        <ul class="nav nav-tabs" style="border:none;">
          <li role="presentation" class="active"><a href="<?php echo base_url();?>UserController/"><span class="hightlight">Home</span></a></li>
          <li role="presentation"><a href="<?php echo base_url();?>UserController/getCart?id=<?php echo           $user_data->id;?>">Carts</a></li>
          <li role="presentation" class="dropdown" id="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url();?>UserController/product_buttonClick" role="button" aria-haspopup="true" aria-expanded="false">
              Products
              <span class="caret">
              </span>
            </a>
            <ul class="dropdown-menu" id="dropdown-menu" style="background: #35424a;">
              <li role="presentation"><a href="<?php echo base_url();?>UserController/product_views?product_type=<?php echo 'fruits' ?>">Fruits</a></li>
              <li role="presentation"><a href="<?php echo base_url();?>UserController/product_views?product_type=<?php echo 'herbs' ?>">Herbs</a></li>
              <li role="presentation"><a href="<?php echo base_url();?>UserController/product_views?product_type=<?php echo 'meat' ?>">Meat</a></li>
              <li role="presentation"><a href="<?php echo base_url();?>UserController/product_views?product_type=<?php echo 'vegetables' ?>">Vegetables</a></li>
            </ul>
            </li>
            <?php if (isset($_SESSION['email'])) { ?>
            <li id="dropdown" role="presentation" class="dropdown" style="float:right;">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                 <?php  echo $user_data->fname.' '.$user_data->lname; ?>
                <span class="caret">
                </span>
              </a>
              <ul class="dropdown-menu" style="margin-left:-68px; background-color:#35424a;">
                <li role="presentation"><a href="<?php echo base_url();?>UserController/NormalprofileUpdate?id=<?php echo $user_data->id;?>">Update Profile</a></li>
               <li role="presentation"><a href="<?php echo base_url();?>UserController/logout">Log Out</a></li>
              </ul>
            </li>
            <?php } ?>
             
        </ul>
      </div>
    </div>
  </div>
</nav>
</header>