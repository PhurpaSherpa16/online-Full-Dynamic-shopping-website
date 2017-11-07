<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/box.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/boo.css" rel="stylesheet">

<section id="body">
		<div class="container-fluid">
			<div class="row" style="min-height:400px; ">
				<div class="col-lg-12 col-sm-12 col-xs-12" style="background-color:;">
						<?php
							if ($pdata->num_rows()>0) {
								foreach ($pdata->result() as $row) {
									?>
										<div id="card" class=" col-lg-3 col-md-4 col-sm-6 col-xs-12">
 										<div class="imgBx">
 											<a href="<?php echo base_url();?>UserController/product_view?pid=<?php echo $row->id; ?>"><img id="img" class="img-responsive" src="<?php echo base_url();?>assets/images/products/<?php echo $row->image;?>" alt="image">
 										</div>
 											<ul>
 											<li>View</a></li>
 											</ul>
												<div class="content">
													<h3 id="h3"><?php echo $row->pname;?></h3>
												</div>	
 										</div>
									<?php
								}
							}
							else{
								echo '<h1 style="text-align: center; color: #e8491d">Sory, No data Found!!!</h1>';
							}
							?>
				</div>
			</div>
		</div>
	</section>