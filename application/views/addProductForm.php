
<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1" style="background:;">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>Adding Products form</h2>
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url(); ?>ProductContorller/registerProduct" method="post" class="register" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-5" style="background:;">

										<div class="form-group col-md-12">
											<label>Product Name</label>
											<input id="pname" type="text" class="form-control" placeholder="Product name" name="pname" autocomplete="off" required="required">
											<span id="productErrMsg"></span>
										</div>
										<div class="form-group col-md-12">
											<label>Product Type</label>
											<select class="form-control" name="ptype" required="required">
											 <option id="dp" value="meat" required="required">Meat</option>
											 <option id="dp" value="fruits">Fruits</option>
											 <option id="dp" value="herbs">Herbs</option>
											 <option id="dp" value="vegetables">Vegetables</option>
											 <option id="dp" value="fruits">Fruit</option>
										 </select>
										</div>
										<div class="form-group col-md-12">
											<label>Rate/kg</label><br>
											<input type="number" id="rate" class="form-control" name="rate" placeholder="Enter the amount" autocomplete="off" min="50" required="required">
											<span id="Errrate"></span>
										</div>
										<div class="form-group" id="des-div">
											<label>Description</label>
											<textarea rows="10" class="form-control" name="desc" id="description" name="description" placeholder="Enter the description of products" autocomplete="off" required="required"></textarea>
											<span id="DescErrMsg"></span>
										</div>
									</div>

									<div class="col-md-6" class="text-center" id="Pimage">
										<div class="well" style="height:100%" >
											<div class="box" style="height=300px; width=100%;">
												<img src="<?php echo base_url()?>assets/images/showcase1.jpg" id="showImage" class="img-fluid" alt="product Image" height="300px" width="100%" required="required">
											</div>
											<input type="file" id="upimage" value="prouduct-image" name="image" required="required">
											<span id="image"></span>
										</div>
									</div>

								</div>
								<div class="col-md-6" style="background:; margin-left:200px;">
									<button type="submit" class="btn btn-default">Submit</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	<script type="text/javascript">
			$(document).ready(function(){
				$('#pname').on('keyup', function(){
					if($('#pname').val().length < 4){
						$('#productErrMsg').html('Product name can not be less than 4 characters!').css('color', 'red');
						$(':input[type="submit"]').prop('disabled',true);
						return;
					}else{
						$('#productErrMsg').html('');	
						$(':input[type="submit"]').prop('disabled',false);
					}
				});
			});
			$(document).ready(function(){
				$('#description').on('keyup', function(){
					if($('#description').val().length < 20){
						$('#DescErrMsg').html('Product Details can not be less than 20 characters!').css('color', 'red');
						$(':input[type="submit"]').prop('disabled',true);
						return;
					}else{
						$('#DescErrMsg').html('');
						$(':input[type="submit"]').prop('disabled',false);	
					}
				});
			});

			$(document).ready(function(){
				$('#rate').on('keyup', function(){
					if($('#rate').val() <0 ){
						$('#Errrate').html('Product rate can not be in minus(-)!').css('color', 'red');
						$(':input[type="submit"]').prop('disabled',true);
						return;
					}else{
						$('#Errrate').html('');
						$(':input[type="submit"]').prop('disabled',false);
					}
				});
			});

			$(document).ready(function(){
				$('#upimage').change(function(){
				var fileExtension = ['jpeg', 'jpg', 'png'];
        		if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            	$('#image').html("Only formats are allowed : "+fileExtension.join(',')).css('color','red');
       		 	$(':input[type="submit"]').prop('disabled',true);
       		 	$('#upimage').html('<img src="<?php echo base_url()?>assets/images/showcase1.jpg" id="showImage" class="img-fluid" alt="product Image" height="300px" width="100%" required="required">');
				return;
				}
				else{
						$('#image').html('');
						$(':input[type="submit"]').prop('disabled',false);
				}
				});
			});

	</script>



		