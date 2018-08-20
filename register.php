<?php require_once "templates.php" ?>


<?php function getTitle() {

	echo "Chill&Tats";
} ?>


<?php function getContent() { ?>
<div class="main">

<!-- <div class="nav_invi_content"></div> -->

<div class="reg_banner">
	<div class="reg_img">
		<h2>' We Treat you as a family so you better introduce your self . '</h2>

	</div>
</div>

<div class="container reg_form">
<h1>Register Form </h1>
<small>We need your info to assist you better</small>
<hr>
<form  id="reg_form" action="controllers/authenticate_endpoint.php" method="POST">

	<div class="form-group">
	  <label for="reg_user_name">Username :</label>
	  <input id="username" type="text" class="form-control" name="reg_user_name">
	  <p></p>
	</div>

	<div class="form-group">
	  <label for="reg_password">Password :</label>
	  <input id="password" type="password" class="form-control" name="reg_password">
	   <p></p>
	</div>

	<div class="form-group">
	  <label for="reg_email_add">Email :</label>
	  <input id="email" type="email" class="form-control" name="reg_email_add">
	   <p></p>
	</div>

	<div class="form-group">
	  <label for="reg_first_name">Firstname :</label>
	  <input id="firstname" type="text" class="form-control" name="reg_first_name">
	   <p></p>
	</div>

	<div class="form-group">
	  <label for="reg_middle_name">Middlename :</label>
	  <input id="middlename" type="text" class="form-control" name="reg_middle_name">
	   <p></p>
	</div>

	<div class="form-group">
	  <label for="reg_last_name">Lastname :</label>
	  <input id="lastname" type="text" class="form-control" name="reg_last_name">
	   <p></p>
	</div>

	<div class="form-group">
	  <label for="reg_address">Address :</label>
	  <input id="address" type="text" class="form-control" name="reg_address">
	   <p></p>
	</div>

	<div class="form-group">
	  <label for="reg_num">Number :</label>
	  <input id="number" type="number" class="form-control" name="reg_num">
	   <p></p>
	</div>
<hr>

	<button id="reg_btn" type="button" class="btn btn-success">Register</button>








	</form>

	</div>
</div>


<script type="text/javascript" src="assets/js/script.js"></script>
<?php } ?>