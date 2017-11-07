             			<?php if ($product_data->num_rows()>0){
             				foreach ($product_data->result() as $data) {
             					?>
									<option><?php echo $data->pname;?></option>
             					<?php
             				}
							}
             			?>
             			            		<!-- Button click of Product Display -->
            		<label id="listClick" onclick="document.location.href='<?php echo base_url();?>AdminController/display_Product?id=<?php echo $data->id;?>'">Click Me</label>



            						<?php 
				if ($product_data->num_rows()>0){
					foreach ($product_data->result() as $data) {
						?>
							<div id="box"  class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				 			<div id="thumbnail" class="thumbnail">
				 				<img id="viewImages" src="<?php echo base_url();?>assets/images/products/<?php echo $data->image ?>" alt="products" height="200px">
				 				<div class="caption">
				 					<h4><?php echo $data->pname;?></h4>
									<a href="<?php echo base_url();?>AdminController/display_Product?id=<?php  echo $data->id;?>"><button id="btn" class="btn btn-primary">View</button></a><br><br>
									<a href="<?php echo base_url();?>AdminController/display_Product?id=<?php  echo $data->id;?>"><button id="btn" class="btn btn-primary">Delete</button></a>
				 				</div>
				 			</div>
						 	</div>
						<?php
					}
				}
				else {
					?>
						<h1 style="text-align: center; color: #e8491d">Sory, Choose other not none!!!</h1>
				<?php }
				?>