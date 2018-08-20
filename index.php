<?php session_start() ?>

<?php require_once "templates.php" ?>

<?php function getTitle(){
	echo "Chill&tats";
 }
  ?>


<?php function getContent(){ ?>

	<?php require_once "partials/log_in_content/login_content.php" ?>
	<div class="nav_invi_content"></div>
<div class="input_log">
	<h1>Chill And tat's</h1>
	<form id="log_form" action="controllers/authenticate_endpoint.php" method="POST">
		<div class="form-group">
			
		  <label for="username">Name:</label>
		  <input id="u_name" type="text" class="form-control" name="username">
		</div>

		<div class="form-group">
		  <label for="password">Password:</label>
		  <input id="u_pass" type="password" class="form-control" name="password">
		</div>
		<p id="error_msg"></p>

		<button id="sign_in" type="button" class="btn btn-primary">Sign In</button>
	</form>
</div>












<script type="text/javascript" src="assets/js/script.js"></script>

<?php } ?>