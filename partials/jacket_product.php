		<div class="container">
			<div class="row">
				<div class="col-3 tshirt_icon">
					<h2>Jacket Products</h2>
					<!-- <img src="assets/images/image_content/welcome2_tatto.jpg"> -->

						  <!-- Left and right controls -->
						
					  <a class="carousel-control-prev tshirt_controls" href="#carousel1" data-slide="prev">
					    <span><i class="icofont-rounded-left icofont-3x ico-controls"></i></span>
					  </a>
					  <a class="carousel-control-next tshirt_controls" href="#carousel1" data-slide="next">
					    <span><i class="icofont-rounded-right icofont-3x ico-controls"></i></span>
					  </a>

					 <button>Check all Jacket's</button>
				</div>


				<div class="col-9 product_slide">
					
				<div id="carousel1" class="carousel slide" data-ride="carousel">

				
					  <?php require "connection.php" ?>
					  <?php  $sql = "SELECT * FROM tshirt ORDER BY id DESC LIMIT 4"; ?>

					  <?php $result = mysqli_query($conn , $sql) ?>

					  <?php $row = mysqli_fetch_assoc($result) ?>
					  <!-- The slideshow -->
					 <div class="carousel-inner">
					    <div class="carousel-item active">
							<div class="row">

								<?php while($row = mysqli_fetch_assoc($result)) { ?>
								<div class="col-4">	
										<img class="card-img-top items_img" src="<?php echo $row['img_add']?> ">
										<h2><?php echo $row['product_name'] ?></h2>
										<p>Price : P<?php echo $row['product_price'] ?></p>
										<button>Add to cart</button>
								
								</div>
									<?php } 

									mysqli_close($conn); ?>


							</div> <!-- end row -->

					    </div>




					    <div class="carousel-item">

					    	<?php require "connection.php" ?>
							  <?php  $sql = "SELECT * FROM tshirt ORDER BY id DESC LIMIT 4 OFFSET 3"; ?>

							  <?php $result = mysqli_query($conn , $sql) ?>

							  <?php $row = mysqli_fetch_assoc($result) ?>
					     	<div class="row">

					     			<?php while($row = mysqli_fetch_assoc($result)) { ?>
								<div class="col-4">	
										<img class="card-img-top items_img" src="<?php echo $row['img_add']?> ">
										<h2><?php echo $row['product_name'] ?></h2>
										<p>Price : P<?php echo $row['product_price'] ?></p>
										<button>Add to Cart</button>
								</div>
						
							<?php } ?>
							

					    	</div>


					  	</div>

		

					</div>


				</div>

				</div>

			</div><!--  end second column -->
		</div> <!-- end container -->