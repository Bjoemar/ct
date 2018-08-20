<?php require_once "templates.php" ?>


<?php function getTitle(){

	echo "Chill&tats";
} ?>













<?php function getContent() {?>


<div id="carousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    
  </ul>


  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
		 <div class="banner_comm_holder1 ">
			<div id="prod_img" ></div>
				<div class="title_holder">
					<hr>
					<h1>CHILL & TAT'S</h1>
					 <h2>Tatto</h2>
					<h3>Get a tatto's</h3>
					<hr>
					<button>Set Schedule
						<i class="icofont-long-arrow-right "></i>
					</button>
			</div>
		</div>

		<div class="row" id="sub_info">
			<div class="col-12" id="sub_head"><hr></div>
			<div class="col" id="sub_call">Call us 
				<h3>09XXXXXXX</h3>
			</div>

			<div class="col" id="sub_locate">Locate us
			 <h3>Block 30 lot 100 phase 2 cavite city</h3>
			</div>

			<div class="col" id="sub_hours">Hours
				<h3>6pm - 7am</h3>
			</div>
		</div>



    </div>


    <div class="carousel-item">
       <div class="banner_comm_holder1 ">
			<div id="prod_img1" ></div>
				<div class="title_holder">
					<hr>
					<h1>CHILL & TAT'S</h1>
					<h2> Clothing</h2>
					<h3>See Merchandise</h3>
					<hr>
					<button>Order Now
						<i class="icofont-long-arrow-right "></i>
					</button>
			</div>
		</div>

		<div class="row" id="sub_info">
			<div class="col-12" id="sub_head"><hr></div>
			<div class="col" id="sub_call">Call us 
				<h3>09XXXXXXX</h3>
			</div>

			<div class="col" id="sub_locate">Locate us
			 <h3>Block 30 lot 100 phase 2 cavite city</h3>
			</div>

			<div class="col" id="sub_hours">Hours
				<h3>6pm - 7am</h3>
			</div>
		</div>
    </div>




   
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#carousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>




</div>

	<div class="chill_motto">
		<hr>
		
		<h3>For the Best Local Tattoo Shop, serving our customers with respect! Come See it for your self!</h3>

		<hr>

	</div>


		<div class="container-fluid welcome_content">

			<div class="row ">
				<div class="col-6">
					<div class="c1_img"></div>
				</div>
				<div class="col-6">
					<div class="des_img1">
						<h2>Welcome to Chill & Tat's</h2>
						<p>We are local tatto shop in quezon city and we been doing this since 2016</p>
						<p>we offer a tatto session its either you will give the design or we will give a design for you , </p>
						<p>we also have a clothing line which is our brand check our merchandise and see what fits in you</p>
					</div>
					
				</div>
			</div>
		</div>


		<div class="container-fluid welcome_content">

			<div class="row ">
			
				<div class="col-6">
					<div class="des_img1">
						<h2>Come see our Merchandise</h2>
						<p>We also selling shirt , jacket cap come see what fits in you.</p>
						<button>Go to shop</button>
						
					</div>
					
				</div>

					<div class="col-6">
					<div class="c2_img"></div>
				</div>
			</div>
		</div>



		<div class="container-fluid booking_holder">
			
			<div class="row">
				<div class="col">
					<h2>Address</h2>
					<p>lorem ipsum 29th ave.</p>
					<p>Manila quezon city</p>
			

					<h2>PHONE</h2>
					<p>Call : 090909090909</p>
					<p>text : 090909090909</p>
				

					<h2>Email</h2>
					<p>loremipsum@gmail.com</p>
					<p>ipsum@gmail.com</p>


					<hr>
				</div>

				<div class="col">
					<h2>BOOK NOW</h2>
					<form>
						<div class="form-group">
						  <label for="sched_name">Name:</label>
						  <input type="text" class="form-control" id="sched_name">
						</div>

						<div class="form-group">
						  <label for="shed_email">Email:</label>
						  <input type="email" class="form-control" id="sched_email">
						</div>

						<div class="form-group">
						  <label for="sched_msg">Message:</label>
						  <textarea class="form-control" rows="5" id="sched_msg"></textarea>
						</div>

						<button class="btn btn-primary">Send Message</button>

					</form>
				</div>
			</div>
		</div>







<?php } ?>