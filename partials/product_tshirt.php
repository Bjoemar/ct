	<div class="container">

		<div class="banner_items">
		<div class="row" style="margin: auto;">
			<div class="col-6 latest_img">
				<img src="assets/images/image_content/welcome_tatto.jpg">
				<div class="latest_info">
					<p><strong>Check out our latest tshirt</strong></p>
					<h3>Product Name Here</h3>
					<h3><small>Price :</small>Product Price here</h3>
					<button>Buy this</button>
				</div>
			</div>

			<div class="col-6 latest_cap">
				<div class="row">
					<div class="col-12">
						<div class="invi_latest_cap">
							<img src="assets/images/image_content/welcome_tatto.jpg">
							<div class="cap_content">
								<p><strong>Check out our latest tshirt</strong></p>
								<h3>Product Name Here</h3>
								<h3><small>Price :</small>Product Price here</h3>
								<button>Buy this</button>
								</div>
							</div>
						</div>

					<div class="col-12">
						<div class="invi_latest_cap">
						<img src="assets/images/image_content/welcome_tatto.jpg">
							<div class="jacket_content">
								<p><strong>Check out our latest tshirt</strong></p>
								<h3>Product Name Here</h3>
								<h3><small>Price :</small>Product Price here</h3>
								<button>Buy this</button>
								</div>
							</div>
					</div>
				</div>
			</div>


		</div> <!-- end row here -->

		</div>



		<div class="container tshirt_title_content">
			<h2>let's find something fit's in you .</h2>
	
		</div>


		<div class="container">
			<div class="row">
				<div class="col-3 tshirt_icon">
					<h2>Tshirt Products</h2>
					<!-- <img src="assets/images/image_content/welcome2_tatto.jpg"> -->

						  <!-- Left and right controls -->
						
					  <a class="carousel-control-prev tshirt_controls" href="#carousel" data-slide="prev">
					    <span><i class="icofont-rounded-left icofont-3x ico-controls"></i></span>
					  </a>
					  <a class="carousel-control-next tshirt_controls" href="#carousel" data-slide="next">
					    <span><i class="icofont-rounded-right icofont-3x ico-controls"></i></span>
					  </a>

					 <button>Check all shirt</button>
				</div>


				<div class="col-9 product_slide">
					
				<div id="carousel" class="carousel slide" data-ride="carousel">

				
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
	</div> <!-- end main1 container -->